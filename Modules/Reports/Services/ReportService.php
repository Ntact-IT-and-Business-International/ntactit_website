<?php

namespace App\Services;

use Modules\Reports\App\Models\Report;

class ReportService
{
    public static function createReport($fields)
    {
        try {
            return Deprtment::createReport($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getReport($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Deprtment::getReport($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularReport($ReportId): JsonResponse
    {
        try {
            return response()->json(['data' => Deprtment::getParticularReport($ReportId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteReport($ReportId): JsonResponse
    {
        try {
            Deprtment::deleteReport($ReportId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
