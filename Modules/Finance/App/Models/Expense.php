<?php

namespace Modules\Finance\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\ExpenseFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Modules\Item\App\Models\Item;
use Modules\Department\App\Models\Department;

class Expense extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];
    
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'received_by');
    }
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    
    protected static function newFactory(): ExpenseFactory
    {
        //return ExpenseFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('description', 'like', '%'.$val.'%')
        ->orWhere('date_of_expense', 'like', '%'.$val.'%')
        ->orWhereHas('name', function ($query) use ($val) {
            $query->where('name', 'like', '%'.$val.'%');
        })
        ->orWhereHas('item', function ($query) use ($val) {
            $query->where('item', 'like', '%'.$val.'%');
        });
    }

    public static function createExpense($fields)
    {
        self::create([
            'received_by' => $fields['received_by'],
            'item_id' => $fields['item_id'],
            'department_id' => $fields['department_id'],
            'date_of_expense' => $fields['date_of_expense'],
            'quantity' => $fields['quantity'],
            'description' => $fields['description'],
            'unit_cost' => $fields['unit_cost'],
            'amount' => $fields['amount'],
            'expense_status' => $fields['expense_status'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function getExpense($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'item';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator','department','item')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateExpense($ExpenseId, $fields)
    {
        self::whereId($ExpenseId)->update([
            'received_by' => $fields['received_by'],
            'department_id' => $fields['department_id'],
            'item_id' => $fields['item_id'],
            'date_of_expense' => $fields['date_of_expense'],
            'quantity' => $fields['quantity'],
            'description' => $fields['description'],
            'unit_cost' => $fields['unit_cost'],
            'amount' => $fields['amount'],
            'expense_status' => $fields['expense_status'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function deleteExpense($ExpenseId)
    {
        self::whereId($ExpenseId)->delete();
    }
}
