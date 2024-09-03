<?php

namespace Modules\BusinessDevelopment\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BusinessDevelopment\Database\factories\ClientFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'client_name', 'company', 'email', 'contact','address', 'customer_number', 'business_status', 'registered_by'
    ];
    
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'registered_by');
    }
    
    protected static function newFactory(): ClientFactory
    {
        //return ClientFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('client_name', 'like', '%'.$val.'%')
        ->orWhere('company', 'like', '%'.$val.'%')
        ->orWhere('email', 'like', '%'.$val.'%')
        ->orWhere('contact', 'like', '%'.$val.'%')
        ->orWhere('customer_number', 'like', '%'.$val.'%')
        ->orWhere('created_at', 'like', '%'.$val.'%');
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
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }

    public static function updateClient($ClientId, $fields)
    {
        self::whereId($ClientId)->update([
            'client_name' => $fields['client_name'],
            'company' => $fields['company'],
            'email' => $fields['email'],
            'contact' => $fields['contact'],
            'invoice_number' => $fields['invoice_number'],
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
    public static function deleteClient($ClientId)
    {
        self::whereId($ClientId)->delete();
    }
    public static function updateClientStatus($client_id){
        return self::whereId($client_id)->update(['business_status' => 'forwarded']);
    }
}
