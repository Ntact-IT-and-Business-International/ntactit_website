<?php

namespace App\Services;

use Modules\Department\App\Models\Deprtment;

class DepartmentService
{
    public static function createDepartment($fields)
    {
        try {
            return Deprtment::createDepartment($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getDepartment($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Deprtment::getDepartment($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularDepartment($DepartmentId): JsonResponse
    {
        try {
            return response()->json(['data' => Deprtment::getParticularDepartment($DepartmentId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteDepartment($DepartmentId): JsonResponse
    {
        try {
            Deprtment::deleteDepartment($DepartmentId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
