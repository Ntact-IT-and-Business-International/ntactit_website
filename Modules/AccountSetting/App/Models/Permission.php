<?php

namespace Modules\AccountSetting\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\AccountSetting\Database\factories\PermissionFactory;

class Permission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];
    
    protected static function newFactory(): PermissionFactory
    {
        //return PermissionFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('permission', 'like', '%'.$val.'%');
    }

    public static function createPermission($fields)
    {
        self::create([
            'permission' => $fields['permission'],
        ]);
    }

    public static function getPermission($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'permission';
        $sortDirection = $sortDirection ?: 'desc';

        return self::search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }
}
