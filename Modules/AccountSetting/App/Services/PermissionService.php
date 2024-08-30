<?php

namespace Modules\AccountSetting\App\Services;
use Modules\AccountSetting\App\Models\Permission;

class PermissionService
{
    public static function createPermission($fields)
    {
        try {
            return Permission::createPermission($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getPermission($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Permission::getPermission($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
