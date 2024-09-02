<?php

namespace Modules\BusinessDevelopment\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BusinessDevelopment\Database\factories\BusinessDevelopmentDocumentFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Modules\BusinessDevelopment\App\Models\Client;
use Modules\ServicesModule\App\Models\Service;

class BusinessDevelopmentDocument extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'client_id', 'document_type','service_id', 'invoice_number', 'quantity','description', 'rate', 'amount','status', 'registered_by'
    ];
    
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'registered_by'); 
    }
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
    protected static function newFactory(): BusinessDevelopmentDocumentFactory
    {
        //return BusinessDevelopmentDocumentFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('document_type', 'like', '%'.$val.'%')
        ->orWhere('invoice_number', 'like', '%'.$val.'%')
        ->orWhere('description', 'like', '%'.$val.'%')
        ->orWhere('created_at', 'like', '%'.$val.'%')
        ->orWhereHas('client', function ($query) use ($val) {
            $query->where('client_name', 'like', '%'.$val.'%');
        });
    }
    public static function createDocument($fields)
    {
        self::create([
            'client_id' => $fields['client_id'], 
            'document_type' => $fields['document_type'],
            'invoice_number' => $fields['invoice_number'],
            'service_id' => $fields['service_id'],
            'quantity' => $fields['quantity'],
            'description' => $fields['description'],
            'rate' => $fields['rate'],
            'amount' => $fields['amount'],
            'status' => $fields['status'],
            'registered_by' => $fields['registered_by'],
        ]);
    }
    public static function getQuotationClients($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'document_type';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator','client','service')
        ->distinct()
        ->select('client_id','status')
        ->where('document_type','quotation')
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
    public static function getPrintQuotation($client_id)
    {
        return self::with('creator','client','service')
        ->where('client_id',$client_id)
        ->where('status','pending')
        ->limit(1)
        ->get();
    }
    public static function getInvoiceClients($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'document_type';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator','client','service')
        ->distinct('client_id')
        ->select('client_id','invoice_number')
        ->where('document_type','invoice')
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
}
