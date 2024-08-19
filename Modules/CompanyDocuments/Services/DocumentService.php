<?php

namespace App\Services;
use Modules\CompanyDocuments\App\Models\Document;

class DocumentService
{
    public static function createDocument($fields)
    {
        try {
            return Document::createDocument($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getDocument($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return Document::getDocument($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularDocument($DocumentId): JsonResponse
    {
        try {
            return response()->json(['data' => Document::getParticularDocument($DocumentId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteDocument($DocumentId): JsonResponse
    {
        try {
            Document::deleteDocument($DocumentId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
