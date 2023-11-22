<?php
namespace App\Utils;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use App\Models\CmsRolePermission;
use App\Models\CmsPermission;
use App\Collections\CMSUserActivityCollection;
use Auth;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Models\PushSMSLog;
use App\Models\Products;
use App\Models\LeadData;
use App\Models\UserData;

trait CommonUtils
{
    public $client;

    public function getGuzzleClient()
    {
        if (is_null($this->client)) {
            $this->client = app()->make(Client::class);
        }

        return $this->client;
    }
	
	public function generateUUID()
	{
		return md5(uniqid(rand(), true));
	}


    protected function permissionsCaching($user)
    {
    	$key = 'PERMISSIONS:'.$user->id;
    	$permissions = Redis::get($key);
    	if (empty($permissions) === false) {
    		$permissions = json_decode($permissions, true);
    	} else {
            $roleId = $user->roles[0]->id;
	        $permissions = [];
	        if (empty($roleId) === false) {
                $rolePermissions = CMSRolePermission::where('cms_role_id', '=', $roleId)
                        ->leftJoin('cms_permissions', 'cms_role_permissions.cms_permission_id', '=', 'cms_permissions.id')
                        ->get();
	        	if (empty($rolePermissions) === false) {
		            foreach ($rolePermissions as $permission) {
		                array_push($permissions, $permission->slug);
		            }
	        	}
	        }
            Redis::set($key, json_encode($permissions));
    	}

        return $permissions;
    }
    protected function s3_upload($folder, $filename, $data)
    {
        $fileSplit = explode('.', $filename);
        if (!Storage::disk('s3')->exists($folder)) {
            Storage::disk('s3')->makeDirectory($folder, 0777, true);
        }
        if ($fileSplit[1] == "svg") {
           $path = Storage::disk('s3')->put($folder.'/'.$filename, $data, ['mimetype' => 'image/svg+xml']);
        } else {
            $path = Storage::disk('s3')->put($folder.'/'.$filename, $data);
        }
        
        return Storage::disk('s3')->url($path);

    }

    public function getS3File($proofPath)
    {
        $s3 = S3Client::factory(
            array(
              'credentials' => array(
                'key'      => env('FD_S3_KEY'),
                'secret'   => env('FD_S3_SECRET')
            
              ),
              'version' => 'latest',
              'region'   => env('FD_S3_REGION'),
            )
          );
        $keyPath =$proofPath;
        $getFileName = basename($keyPath);
        $fileName = $getFileName;
        $command = $s3->getCommand('GetObject', array(
            'Bucket'      =>env('FD_S3_BUCKET'),
            'Key'         => $keyPath,
            'ResponseContentDisposition' => 'attachment; filename="'.$fileName.'"'
        ));
        $signedUrl = $s3->createPresignedRequest($command, "+6 days");
        $content = (string)$signedUrl->getUri();
        return file_get_contents($content);
    }

    public function cmsUserActivity($menu, $action, $modified, $title)
    {
        $loggedUser = Auth::user();
        $count = CMSUserActivityCollection::count();

        $UserActivityLog = new CMSUserActivityCollection();
        //$UserActivityLog->log_id = (empty($count) === false && $count > 0) ? $count+1 : 1;
        $UserActivityLog->user_id = $loggedUser->id;
        $UserActivityLog->user_name = $loggedUser->name;
        $UserActivityLog->user_email = $loggedUser->email;
        $UserActivityLog->title = $title;
        $UserActivityLog->menu = $menu;
        $UserActivityLog->modified = $modified;
        $UserActivityLog->action = $action;
        $UserActivityLog->created_at = Carbon::now()->toDateTimeString();
        $UserActivityLog->save();
    }
    
    public function smsLogInsert($data){

        \Log::info("Push Sms Log Insert Data --->>>>>".json_encode($data));
        $exceptionQuery = PushSMSLog::query();
        $lead = LeadData::where('id', $data['leadId'])->orderBy('id','desc')->first();
        $user = UserData::where('mobile', $data['mobileNo'])->orderBy('id','desc')->first();

        $logId = $exceptionQuery->insertGetId([
            "api_name" => empty($data['api_name']) === false ? $data['api_name'] : NULL,
            "user_id" => empty($user->id) === false ? $user->id : NULL,
            "lead_id" => empty($data['leadId']) === false ? $data['leadId'] : NULL,
            "product_id" => empty($lead['product_id']) === false ? $lead['product_id'] : NULL,
            "product_name" => empty($data['productType']) === false ? $data['productType'] : NULL,
            "gateway_name" => empty($data['type']) === false ? $data['type'] : NULL,
            "otp_code" => empty($data['otp']) === false ? $data['otp'] : NULL,
            "status" => "Success",
            "mobile" => empty($data['mobileNo']) === false ? $data['mobileNo'] : NULL,
            "external_request" => empty($data['externalRequest']) === false ? $data['externalRequest'] : NULL,
            "request" => empty($data) === false ? json_encode($data) : NULL,
            "is_new" => "1",
            "request_timestamp" => date('Y-m-d H:i:s'.substr((string)microtime(), 1, 4).'\Z'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        return $logId;
    }

    public function smsLogUpdate($data){

        if(empty($data['status']) === false && $data["status"] == "failure"){
            $data["reason"] = "Something Went Wrong. please try again later";
        }
        $logarray = array(
            "status"     => empty($data['status']) === false ? $data['status'] : "failure",
            "response"   => empty($data['response']) === false ? json_encode($data['response']) : NULL,
            "message_id" => empty($data['response_id']) === false ? $data['response_id'] : NULL,
            "exception"  => empty($data['exception']) === false ? $data['exception'] : NULL,
            "delivery_time" => Carbon::now(),
            "delivery_status" => empty($data['status']) === false ? $data['status'] : "failure",
            "response_timestamp" => date('Y-m-d H:i:s'.substr((string)microtime(), 1, 4).'\Z'),
            "reason" => empty($data['reason']) === false ? $data['reason'] : NULL,
            "updated_at" => Carbon::now()
        );
        $logUpdate = PushSMSLog::where("id", $data['id'])->update($logarray);
    }

    public function apiCall($url, $options = [], $method = "GET"){

        try{

            $options['timeout'] = empty($options['timeout']) === false ? $options['timeout'] : 60;

            $response = $this->getGuzzleClient()->request($method, $url, $options);
            $this->statusCode = $response->getStatusCode();

            if ($response->getStatusCode() === 200) {
                $apiResponse = $response->getBody()->getContents();
                return $apiResponse;
            }
        } catch (\ClientException $e) {
            Log::error($e->getMessage());
        }

        return NULL;
    }

    public function removeFirstSlashString($filePath)
    {
        $pattern = '/^\//i';
        $keyPath =preg_replace($pattern, '', $filePath);
        return $keyPath;
    }

    // s3 bucket file exits
    public function s3FileExists($filePath)
    {
        $keyPath = $this->removeFirstSlashString($filePath);
        return \Storage::disk('pl_gl_s3')->exists($keyPath);
    }
}
