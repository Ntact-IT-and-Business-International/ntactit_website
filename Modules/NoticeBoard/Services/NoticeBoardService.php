<?php

namespace App\Services;
use Modules\NoticeBoard\App\Models\NoticeBoard;

class NoticeBoardService
{
    public static function createNoticeBoard($fields)
    {
        try {
            return NoticeBoard::createNoticeBoard($fields);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getNoticeBoard($search, $sortBy, $sortDirection, $perPage)
    {
        try {
            return NoticeBoard::getNoticeBoard($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function getParticularNoticeBoard($NoticeBoardId): JsonResponse
    {
        try {
            return response()->json(['data' => NoticeBoard::getParticularNoticeBoard($NoticeBoardId)]);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }

    public static function deleteNoticeBoard($NoticeBoardId): JsonResponse
    {
        try {
            NoticeBoard::deleteNoticeBoard($NoticeBoardId);

            return response()->json(['success' => 'operation successful']);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
}
