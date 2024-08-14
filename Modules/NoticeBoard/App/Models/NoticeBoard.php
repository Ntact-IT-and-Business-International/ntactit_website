<?php

namespace Modules\NoticeBoard\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\NoticeBoard\Database\factories\NoticeBoardFactory;

class NoticeBoard extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): NoticeBoardFactory
    {
        //return NoticeBoardFactory::new();
    }
}
