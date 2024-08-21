<?php

namespace Modules\Item\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Item\Database\factories\ItemFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
    protected static function newFactory(): ItemFactory
    {
        //return ItemFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('item', 'like', '%'.$val.'%');
    }

    public static function createItem($fields)
    {
        self::create([
            'item' => $fields['item'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function getItem($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'item';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateItem($ItemId, $fields)
    {
        self::whereId($ItemId)->update([
            'item' => $fields['item'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function deleteItem($ItemId)
    {
        self::whereId($ItemId)->delete();
    }
}
