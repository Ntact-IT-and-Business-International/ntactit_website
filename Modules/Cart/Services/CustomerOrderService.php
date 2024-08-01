<?php

namespace Modules\Cart\Services;

use Modules\Cart\App\Models\CustomerOrder;

class CustomerOrderService
{
    public static function createOrder($fields)
    {
        try {
            return CustomerOrder::createOrder($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getCustomerOrder($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return CustomerOrder::getCustomerOrder($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularCustomerOrder($OrderId): JsonResponse
    {
        try {
            return response()->json(['data' => CustomerOrder::getParticularCustomerOrder($OrderId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteCustomerOrder($OrderId): JsonResponse
    {
        try {
            CustomerOrder::deleteCustomerOrder($OrderId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
