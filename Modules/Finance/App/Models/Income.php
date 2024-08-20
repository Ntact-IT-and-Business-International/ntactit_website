<?php

namespace Modules\Finance\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\IncomeFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\BusinessDevelopment\App\Models\Client;
use App\Models\User;

class Income extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];  
    
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'entered_by');
    }
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'invoice_id');
    }
    
    protected static function newFactory(): IncomeFactory
    {
        //return IncomeFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('received_from', 'like', '%'.$val.'%')
        ->orWhere('reason', 'like', '%'.$val.'%')
        ->orWhere('actual_received_from', 'like', '%'.$val.'%')
        ->orWhereHas('name', function ($query) use ($val) {
            $query->where('name', 'like', '%'.$val.'%');
        })
        ->orWhereHas('invoice_number', function ($query) use ($val) {
            $query->where('invoice_number', 'like', '%'.$val.'%');
        });
    }

    public static function createIncome($fields)
    {
        self::create([
            'invoice_id' => $fields['invoice_id'],
            'received_from' => $fields['received_from'],
            'reason' => $fields['reason'],
            'initial_deposit' => $fields['initial_deposit'],
            'actual_amount' => $fields['actual_amount'],
            'income_status' => $fields['income_status'],
            'entered_by' => $fields['entered_by'],
        ]);
    }

    public static function getIncome($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'name';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator','client')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateIncome($IncomeId, $fields)
    {
        self::whereId($IncomeId)->update([
            'invoice_id' => $fields['invoice_id'],
            'received_from' => $fields['received_from'],
            'reason' => $fields['reason'],
            'initial_deposit' => $fields['initial_deposit'],
            'actual_amount' => $fields['actual_amount'],
            'income_status' => $fields['income_status'],
            'entered_by' => $fields['entered_by'],
        ]);
    }

    public static function deleteIncome($IncomeId)
    {
        self::whereId($IncomeId)->delete();
    }
}
