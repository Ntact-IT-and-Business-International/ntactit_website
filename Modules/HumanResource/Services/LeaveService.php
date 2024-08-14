<?php

namespace App\Services;
use Modules\HumanResource\App\Models\Leave;

class LeaveService
{
    public static function createLeave($fields)
    {
        try {
            return Leave::createLeave($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getLeave($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Leave::getLeave($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularLeave($LeaveId): JsonResponse
    {
        try {
            return response()->json(['data' => Leave::getParticularLeave($LeaveId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteLeave($LeaveId): JsonResponse
    {
        try {
            Leave::deleteLeave($LeaveId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
