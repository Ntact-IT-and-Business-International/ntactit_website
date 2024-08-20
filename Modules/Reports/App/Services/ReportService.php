<?php

namespace Modules\Reports\App\Services;

use Modules\Reports\App\Models\Report;

class ReportService
{
    public static function createReport($fields)
    {
        try {
            return Report::createReport($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getReport($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Report::getReport($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularReport($ReportId): JsonResponse
    {
        try {
            return response()->json(['data' => Report::getParticularReport($ReportId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteReport($ReportId): JsonResponse
    {
        try {
            Report::deleteReport($ReportId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
