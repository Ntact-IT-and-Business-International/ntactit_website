<?php

namespace Modules\Finance\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\PayrollFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Modules\HumanResource\App\Models\EmployeeRecord;

class Payroll extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];
    
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function worker(): BelongsTo
    {
        return $this->belongsTo(EmployeeRecord::class, 'employee_record_id');
    }
    
    protected static function newFactory(): PayrollFactory
    {
        //return PayrollFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('month', 'like', '%'.$val.'%')
        ->orWhereHas('worker', function ($query) use ($val) {
            $query->where('account_number', 'like', '%'.$val.'%');
        })
        ->orWhereHas('creator', function ($query) use ($val) {
            $query->where('name', 'like', '%'.$val.'%');
        });
    }

    public static function createPayroll($fields)
    {
        self::create([
            'employee_record_id' => $fields['employee_record_id'],
            'amount' => $fields['amount'],
            'month' => $fields['month'],
            'payroll_status' => $fields['payroll_status'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function getPayroll($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'month';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')->join('employee_records','employee_records.employee_id','payrolls.employee_record_id')
              ->join('users','users.id','employee_records.employee_id')
              ->select('payrolls.*','employee_records.account_number','employee_records.bank_name','users.name')
             ->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updatePayroll($PayrollId, $fields)
    {
        self::whereId($PayrollId)->update([
            'employee_record_id' => $fields['employee_record_id'],
            'amount' => $fields['amount'],
            'month' => $fields['month'],
            'payroll_status' => $fields['payroll_status'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function deletePayroll($PayrollId)
    {
        self::whereId($PayrollId)->delete();
    }
}
