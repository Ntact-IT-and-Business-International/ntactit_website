<?php

namespace Modules\BusinessDevelopment\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BusinessDevelopment\Database\factories\QuotationForwardedFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class QuotationForwarded extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'forwarded_by');
    }
    
    protected static function newFactory(): QuotationForwardedFactory
    {
        //return QuotationForwardedFactory::new();
    }

    public function scopeSearch($query, $val)
    {
        return $query->where('comment', 'like', '%'.$val.'%');
    }

    public static function forwardQuotation($fields)
    {
        self::create([
            'employee_id' => $fields['employee_id'],
            'comment' => $fields['comment'],
            'client_id' => $fields['client_id'],
            'forwarded_by' => $fields['forwarded_by'],
        ]);
    }

    public static function getForwardedQuotation($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'comment';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')->where('employee_id',auth()->user()->id)
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage);
    }

}
