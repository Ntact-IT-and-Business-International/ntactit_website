<?php

namespace Modules\ServicesModule\Services;

use Modules\ServicesModule\App\Models\QuotationRequest;

class QuotationService
{
    public static function createQuotation($fields)
    {
        try {
            return QuotationRequest::createQuotation($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getQuotation($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return QuotationRequest::getQuotation($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularQuotation($QuotationId): JsonResponse
    {
        try {
            return response()->json(['data' => QuotationRequest::getParticularQuotation($QuotationId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteQuotation($QuotationId): JsonResponse
    {
        try {
            QuotationRequest::deleteQuotation($QuotationId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
