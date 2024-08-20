<?php

namespace Modules\Finance\App\Services;
use Modules\Finance\App\Models\Payroll;

class PayrollService
{
    public static function createPayroll($fields)
    {
        try {
            return Payroll::createPayroll($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getPayroll($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Payroll::getPayroll($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularPayroll($PayrollId): JsonResponse
    {
        try {
            return response()->json(['data' => Payroll::getParticularPayroll($PayrollId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deletePayroll($PayrollId): JsonResponse
    {
        try {
            Payroll::deletePayroll($PayrollId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
