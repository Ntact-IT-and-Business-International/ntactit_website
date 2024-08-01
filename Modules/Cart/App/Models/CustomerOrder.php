<?php

namespace Modules\Cart\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Cart\Database\factories\CustomerOrderFactory;

class CustomerOrder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];
    
    protected static function newFactory(): CustomerOrderFactory
    {
        //return CustomerOrderFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('category', 'like', '%'.$val.'%')
                      ->orwhere('contact','like', '%'.$val.'%')
                      ->orwhere('order_name','like', '%'.$val.'%')
                      ->orwhere('order_email','like', '%'.$val.'%');
    }
    public static function createOrder($fields){
        self::create([
            'contact' => $fields['contact'],
            'category' => $fields['category'],
            'quantity' => $fields['quantity'],
            'amount' => $fields['amount'],
            'order_name' => $fields['order_name'],
            'order_email' => $fields['order_email'],
            'order_location' => $fields['order_location'],
        ]);
    }
    public static function getCustomerOrder($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'order_name';
        $sortDirection = $sortDirection ?: 'asc';

        return self::search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateCustomerOrder($orderId, $fields)
    {
        self::whereId($orderId)->update([
            'contact' => $fields['contact'],
            'category' => $fields['category'],
            'quantity' => $fields['quantity'],
            'amount' => $fields['amount'],
            'order_name' => $fields['order_name'],
            'order_email' => $fields['order_email'],
            'order_location' => $fields['order_location'],
        ]);
    }

    public static function deleteCustomerOrder($orderId)
    {
        self::whereId($orderId)->delete();
    }
}
