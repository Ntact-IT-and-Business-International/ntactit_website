<?php

namespace Modules\ContactModule\Services;

use Modules\ContactModule\App\Models\ContactMessage;

class ContactService
{
    public static function createContactMessage($fields)
    {
        try {
            return ContactMessage::createContactMessage($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }


    public static function getContactMessage($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return ContactMessage::getContactMessage($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function updateContactMessage($ContactId): JsonResponse
    {
        try {
            return response()->json(['data' => ContactMessage::updateContactMessage($ContactId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
