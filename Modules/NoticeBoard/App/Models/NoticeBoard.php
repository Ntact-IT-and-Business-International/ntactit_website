<?php

namespace Modules\NoticeBoard\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\NoticeBoard\Database\factories\NoticeBoardFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class NoticeBoard extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];
    
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'posted_by');
    }
    protected static function newFactory(): NoticeBoardFactory
    {
        //return NoticeBoardFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('title', 'like', '%'.$val.'%')
        ->orWhere('notice_type', 'like', '%'.$val.'%')
        ->orWhere('body', 'like', '%'.$val.'%')
        ->orWhere('created_at', 'like', '%'.$val.'%');
    }

    public static function createNoticeBoard($fields)
    {
        self::create([
            'notice_type' => $fields['notice_type'],
            'title' => $fields['title'],
            'body' => $fields['body'],
            'posted_by' => $fields['posted_by'],
        ]);
    }

    public static function getNoticeBoard($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'title';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateNoticeBoard($NoticeBoardId, $fields)
    {
        self::whereId($NoticeBoardId)->update([
            'notice_type' => $fields['notice_type'],
            'title' => $fields['title'],
            'body' => $fields['body'],
            'posted_by' => $fields['posted_by'],
        ]);
    }
    public static function deleteNoticeBoard($NoticeBoardId)
    {
        self::whereId($NoticeBoardId)->delete();
    }
}
