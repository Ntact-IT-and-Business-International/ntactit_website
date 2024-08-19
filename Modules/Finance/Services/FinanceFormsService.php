<?php

namespace App\Services;
use Modules\Finance\App\Models\FinanceForm;

class FinanceFormService
{
    public static function createFinanceForm($fields)
    {
        try {
            return FinanceForm::createFinanceForm($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getFinanceForm($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return FinanceForm::getFinanceForm($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularFinanceForm($FinanceFormId): JsonResponse
    {
        try {
            return response()->json(['data' => FinanceForm::getParticularFinanceForm($FinanceFormId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteFinanceForm($FinanceFormId): JsonResponse
    {
        try {
            FinanceForm::deleteFinanceForm($FinanceFormId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
