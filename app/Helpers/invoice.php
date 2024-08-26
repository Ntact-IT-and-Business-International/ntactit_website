<?php

use Modules\NoticeBoard\App\Models\NoticeBoard;
use Modules\NoticeBoard\App\Models\NoticeBoardRead;

if (!function_exists('generateInvoiceNumber')) {
    function generateInvoiceNumber($model)
    {
        $prefix = 'NITBIL';
        $year = date('Y');
        $month = strtoupper(substr(date('F'), 0, 3));
        $count = $model::whereYear('created_at', $year)
            ->whereMonth('created_at', date('m'))
            ->count() + 1;
        $formattedCount = str_pad($count, 3, '0', STR_PAD_LEFT); // Ensure it's 3 digits
        $invoiceNumber = $prefix . $month . $formattedCount;

        return $invoiceNumber;
    }
} 
if (!function_exists('getNoticeBoardId')) {
    function getNoticeBoardId($noticeBoardId)
    {
       
        $NoticeId = NoticeBoard::where('id', $noticeBoardId)->value('id');
        return $NoticeId;
    }
}
if (!function_exists('countNoticeBoardRead')) {
    function countNoticeBoardRead($noticeBoardId)
    {
       
        $CountNoticeBoardRead = NoticeBoardRead::where('notice_board_id', $noticeBoardId)->count();
        return $CountNoticeBoardRead;
    }
}

