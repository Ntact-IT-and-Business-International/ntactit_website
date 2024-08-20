<?php

namespace Modules\Finance\App\Services;
use Modules\Finance\App\Models\Expense;

class ExpenseService
{
    public static function createExpense($fields)
    {
        try {
            return Expense::createExpense($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getExpense($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Expense::getExpense($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularExpense($ExpenseId): JsonResponse
    {
        try {
            return response()->json(['data' => Expense::getParticularExpense($ExpenseId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteExpense($ExpenseId): JsonResponse
    {
        try {
            Expense::deleteExpense($ExpenseId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
