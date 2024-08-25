<?php

namespace Modules\Finance\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\IncomeFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\BusinessDevelopment\App\Models\Client;
use App\Models\User;
use Modules\BusinessDevelopment\App\Models\BusinessDevelopmentDocument;

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
        return $this->belongsTo(Client::class, 'received_from');
    }
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(BusinessDevelopmentDocument::class, 'invoice_number');
    }
    
    protected static function newFactory(): IncomeFactory
    {
        //return IncomeFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('reason', 'like', '%'.$val.'%')
        ->orWhere('actual_amount', 'like', '%'.$val.'%')
        ->orWhereHas('client', function ($query) use ($val) {
            $query->where('received_from', 'like', '%'.$val.'%');
        })
        ->orWhereHas('invoice', function ($query) use ($val) {
            $query->where('invoice_number', 'like', '%'.$val.'%');
        });
    }

    public static function createIncome($fields)
    {
        self::create([
            'invoice_number' => $fields['invoice_number'],
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
        $sortBy = $sortBy ?: 'invoice_number';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator','client','invoice')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateIncome($IncomeId, $fields)
    {
        self::whereId($IncomeId)->update([
            'invoice_number' => $fields['invoice_number'],
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

    public static function sumIncomeAmount(){
        return self::sum('actual_amount');
    }

    public static function sumIncomeDeposit(){
        return self::sum('initial_deposit');
    }
}
