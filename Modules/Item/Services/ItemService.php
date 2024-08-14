<?php

namespace App\Services;

use Modules\Item\App\Models\Item;

class ItemService
{
    public static function createItem($fields)
    {
        try {
            return Item::createItem($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getItem($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Item::getItem($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularItem($ItemId): JsonResponse
    {
        try {
            return response()->json(['data' => Item::getParticularItem($ItemId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteItem($ItemId): JsonResponse
    {
        try {
            Item::deleteItem($ItemId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
