<?php

namespace App\Utils;

use Log;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\VivaConnectSmsController;
use App\Http\Controllers\GupShupSmsController;

trait SmsApiTrait
{
    public function smsGateway($data){

        $gupshupController  = new GupShupSmsController;
        $vivaConnectController  = new VivaConnectSmsController;

        $smsMode = env('PRIMARY_SMS_MODE');
        \Log::info("Primary Sms Mode ----->>>>>".$smsMode);

        if(empty($smsMode) === false && $smsMode=='vivaconnect'){
               
               $data['type'] = 'VivaConnect';
               $response = $vivaConnectController->processSmsService($data);

            if(empty($response['message']) === true || $response['message'] === 'Sms Push Failed'){

                $data['type'] = 'Gupshup';
                $response = $gupshupController->processSmsService($data);  
            }

        }else if(empty($smsMode) === false && $smsMode=='gupshup'){

               $data['type'] = 'Gupshup';
               $response = $gupshupController->processSmsService($data);

            if(empty($response['message']) === true || $response['message'] === 'Sms Push Failed'){

                $data['type'] = 'VivaConnect';
                $response = $vivaConnectController->processSmsService($data); 
            }
        }

        return $response;
    }
}