<?php

namespace App\Services;
use Modules\HumanResource\App\Models\Attendance;

class AttendanceService
{
    public static function createAttendance($fields)
    {
        try {
            return Attendance::createAttendance($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getAttendance($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Attendance::getAttendance($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularAttendance($AttendanceId): JsonResponse
    {
        try {
            return response()->json(['data' => Attendance::getParticularAttendance($AttendanceId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteAttendance($AttendanceId): JsonResponse
    {
        try {
            Attendance::deleteAttendance($AttendanceId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
