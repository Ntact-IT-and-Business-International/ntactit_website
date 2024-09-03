<?php

namespace Modules\BusinessDevelopment\App\Services;
use Modules\BusinessDevelopment\App\Models\QuotationForwarded;

class ForwardedQuotationService
{
    public static function forwardQuotation($fields)
    {
        try {
            return QuotationForwarded::forwardQuotation($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getForwardedQuotation($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return QuotationForwarded::getForwardedQuotation($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
