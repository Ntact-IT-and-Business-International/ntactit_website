<?php

namespace Modules\AccountSetting\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\AccountSetting\Database\factories\AssignedPermissionFactory;

class AssignedPermission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['id'];
    
    protected static function newFactory(): AssignedPermissionFactory
    {
        //return AssignedPermissionFactory::new();
    }
}
