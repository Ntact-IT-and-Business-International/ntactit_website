<?php

namespace Modules\ServicesModule\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ServicesModule\Database\factories\QuotationRequestFactory;
use Modules\ServicesModule\App\Models\Package;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuotationRequest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];
    
    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    protected static function newFactory(): QuotationRequestFactory
    {
        //return QuotationRequestFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('client_email', 'like', '%'.$val.'%');
    }
    public static function createQuotation($fields){
        self::create([
            'package_id' => $fields['package_id'],
            'client_name' => $fields['client_name'],
            'company' => $fields['company'],
            'client_email' => $fields['client_email'],
            'client_contact' => $fields['client_contact'],
            'client_message' => $fields['client_message'],
            'status' => $fields['status'],
        ]);
    }
    public static function getQuotation($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'created_at';
        $sortDirection = $sortDirection ?: 'asc';

        return self::with('package')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateQuotation($quotationId, $fields)
    {
        self::whereId($quotationId)->update([
            'package_id' => $fields['package_id'],
            'client_name' => $fields['client_name'],
            'company' => $fields['company'],
            'client_email' => $fields['client_email'],
            'client_contact' => $fields['client_contact'],
            'client_message' => $fields['client_message'],
            'status' => $fields['status'],
        ]);
    }

    public static function deleteQuotation($quotationId)
    {
        self::whereId($quotationId)->delete();
    }
}
