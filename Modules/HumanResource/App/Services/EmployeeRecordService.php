<?php

namespace Modules\HumanResource\App\Services;

use Modules\HumanResource\App\Models\EmployeeRecord;

class EmployeeRecordService
{
    public static function createEmployeeRecord($fields)
    {
        try {
            return EmployeeRecord::createEmployeeRecord($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getEmployeeRecord($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return EmployeeRecord::getEmployeeRecord($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularEmployeeRecord($EmployeeId): JsonResponse
    {
        try {
            return response()->json(['data' => EmployeeRecord::getParticularEmployeeRecord($EmployeeId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteEmployeeRecord($EmployeeId): JsonResponse
    {
        try {
            EmployeeRecord::deleteEmployeeRecord($EmployeeId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
