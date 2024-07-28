<?php

namespace Modules\ContactModule\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ContactModule\Database\factories\ContactMessageFactory;

class ContactMessage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];
    
    protected static function newFactory(): ContactMessageFactory
    {
        //return ContactMessageFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('contact_email', 'like', '%'.$val.'%')
                    ->orwhere('contact_name', 'like', '%'.$val.'%')
                    ->orwhere('subject', 'like', '%'.$val.'%')
                    ->orwhere('phone_number', 'like', '%'.$val.'%')
                    ->orwhere('message', 'like', '%'.$val.'%');
    }

    public static function createContactMessage($fields)
    {
        self::create([
            'contact_email' => $fields['contact_email'],
            'contact_name' => $fields['contact_name'],
            'subject' => $fields['subject'],
            'phone_number' => $fields['phone_number'],
            'message' => $fields['message'],
        ]);
    }

    public static function getContactMessage($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'phone_number';
        $sortDirection = $sortDirection ?: 'desc';

        return self::search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }
}
