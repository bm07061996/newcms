<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsRolePermission extends Model
{
    protected $fillable = [
        'cms_role_id', 'cms_permission_id'
    ];
}
