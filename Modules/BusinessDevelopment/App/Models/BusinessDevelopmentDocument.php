<?php

namespace Modules\BusinessDevelopment\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BusinessDevelopment\Database\factories\BusinessDevelopmentDocumentFactory;

class BusinessDevelopmentDocument extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): BusinessDevelopmentDocumentFactory
    {
        //return BusinessDevelopmentDocumentFactory::new();
    }
    public static function createClient($fields)
    {
        self::create([
            'client_name' => $fields['client_name'],
            'company' => $fields['company'],
            'email' => $fields['email'],
            'contact' => $fields['contact'],
            'address' => $fields['address'],
            'customer_number' => $fields['customer_number'],
            'quantity' => $fields['quantity'],
            'description' => $fields['description'],
            'rate' => $fields['rate'],
            'amount' => $fields['amount'],
            'business_status' => $fields['business_status'],
            'registered_by' => $fields['registered_by'],
        ]);
    }
    public static function getClient($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'client_name';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')
        ->select('invoice_number', 'client_name', 'company', 'email', 'contact', 'customer_number', 'business_status', 'registered_by')
        ->search($search)
        ->distinct()
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }
}
