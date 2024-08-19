<?php

namespace Modules\CompanyDocuments\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\CompanyDocuments\Database\factories\DocumentFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Document extends Model
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
    protected static function newFactory(): DocumentFactory
    {
        //return DocumentFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('document_name', 'like', '%'.$val.'%');
    }

    public static function createDocument($fields)
    {
        self::create([
            'document_name' => $fields['document_name'],
            'document' => $fields['document'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function getDocument($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'document_name';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateDocument($DocumentId, $fields)
    {
        self::whereId($DocumentId)->update([
            'document_name' => $fields['document_name'],
            'document' => $fields['document'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function deleteDocument($DocumentId)
    {
        self::whereId($DocumentId)->delete();
    }
}
