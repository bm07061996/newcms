<?php

namespace App\Models;

use App\Models\CmsUser;
use App\Models\CmsPermission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CmsRole extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'slug', 'is_active'
    ];

    public function users()
    {
        return $this->belongsToMany(CmsUser::class, 'cms_user_roles')
                    ->withTimestamps();
    }

    public function permissions()
    {
        return $this->belongsToMany(CmsPermission::class, 'cms_role_permissions')
                    ->where('is_active', '=', true)
                    ->withTimestamps();
    }
}
