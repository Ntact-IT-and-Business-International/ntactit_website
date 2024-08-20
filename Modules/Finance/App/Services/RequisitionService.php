<?php

namespace Modules\Finance\App\Services;
use Modules\Finance\App\Models\Requisition;

class RequisitionService
{
    public static function createRequisition($fields)
    {
        try {
            return Requisition::createRequisition($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getRequisition($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Requisition::getRequisition($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularRequisition($RequisitionId): JsonResponse
    {
        try {
            return response()->json(['data' => Requisition::getParticularRequisition($RequisitionId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteRequisition($RequisitionId): JsonResponse
    {
        try {
            Requisition::deleteRequisition($RequisitionId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
