<?php

namespace Modules\HumanResource\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\HumanResource\Database\factories\EmployeeRecordFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Modules\Department\App\Models\Department;

class EmployeeRecord extends Model
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
    public function employee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    protected static function newFactory(): EmployeeRecordFactory
    {
        //return EmployeeRecordFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('account_number', 'like', '%'.$val.'%')
        ->orWhere('tin_number', 'like', '%'.$val.'%')
        ->orWhere('nssf', 'like', '%'.$val.'%')
        ->orWhereHas('employee', function ($query) use ($val) {
            $query->where('name', 'like', '%'.$val.'%');
        });
    }

    public static function createEmployeeRecord($fields)
    {
        self::create([
            'employee_id' => $fields['employee_id'],
            'department_id' => $fields['department_id'],
            'position' => $fields['position'],
            'appointment_date' => $fields['appointment_date'],
            'curriculum_vitae' => $fields['curriculum_vitae'],
            'appointment_letter' => $fields['appointment_letter'],
            'contract' => $fields['contract'],
            'job_description' => $fields['job_description'],
            'salary' => $fields['salary'],
            'account_number' => $fields['account_number'],
            'tin_number' => $fields['tin_number'],
            'nssf' => $fields['nssf'],
            'employee_status' => $fields['employee_status'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function getEmployeeRecord($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'name';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('department','employee')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateEmployeeRecord($EmployeeId, $fields)
    {
        self::whereId($EmployeeId)->update([
            'employee_id' => $fields['employee_id'],
            'department_id' => $fields['department_id'],
            'position' => $fields['position'],
            'appointment_date' => $fields['appointment_date'],
            'curriculum_vitae' => $fields['curriculum_vitae'],
            'appointment_letter' => $fields['appointment_letter'],
            'contract' => $fields['contract'],
            'job_description' => $fields['job_description'],
            'salary' => $fields['salary'],
            'account_number' => $fields['account_number'],
            'tin_number' => $fields['tin_number'],
            'nssf' => $fields['nssf'],
            'employee_status' => $fields['employee_status'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function deleteEmployeeRecord($EmployeeId)
    {
        self::whereId($EmployeeId)->delete();
    }
}
