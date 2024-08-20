<?php

namespace Modules\Finance\App\Services;
use Modules\Finance\App\Models\Income;

class IncomeService
{
    public static function createIncome($fields)
    {
        try {
            return Income::createIncome($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getIncome($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Income::getIncome($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularIncome($IncomeId): JsonResponse
    {
        try {
            return response()->json(['data' => Income::getParticularIncome($IncomeId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteIncome($IncomeId): JsonResponse
    {
        try {
            Income::deleteIncome($IncomeId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
