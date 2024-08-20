<?php

namespace Modules\Department\App\Services;

use Modules\Department\App\Models\Department;

class DepartmentService
{
    public static function createDepartment($fields)
    {
        try {
            return Department::createDepartment($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getDepartment($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Department::getDepartment($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularDepartment($DepartmentId): JsonResponse
    {
        try {
            return response()->json(['data' => Department::getParticularDepartment($DepartmentId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteDepartment($DepartmentId): JsonResponse
    {
        try {
            Department::deleteDepartment($DepartmentId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
