<?php

namespace Modules\NoticeBoard\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\NoticeBoard\Database\factories\NoticeBoardReadFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Modules\NoticeBoard\App\Models\NoticeBoard;

class NoticeBoardRead extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];
    
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'read_by');
    }
    public function noticeboard(): BelongsTo
    {
        return $this->belongsTo(NoticeBoard::class, 'notice_board_id');
    }
    
    protected static function newFactory(): NoticeBoardReadFactory
    {
        //return NoticeBoardReadFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->whereHas('creator', function ($query) use ($val) {
            $query->where('name', 'like', '%'.$val.'%');
        })
        ->orWhereHas('noticeboard', function ($query) use ($val) {
            $query->where('title', 'like', '%'.$val.'%');
        });
    }

    public static function createNoticeBoardRead($fields)
    {
        self::create([
            'notice_board_id' => $fields['notice_board_id'],
            'read_by' => $fields['read_by'],
        ]);
    }

    public static function getNoticeBoardRead($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'created_at';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator','noticeboard')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateNoticeBoardRead($NoticeBoardReadId, $fields)
    {
        self::whereId($NoticeBoardReadId)->update([
            'notice_board_id' => $fields['notice_board_id'],
            'read_by' => $fields['read_by'],
        ]);
    }
    public static function deleteNoticeBoardRead($NoticeBoardReadId)
    {
        self::whereId($NoticeBoardReadId)->delete();
    }
}
