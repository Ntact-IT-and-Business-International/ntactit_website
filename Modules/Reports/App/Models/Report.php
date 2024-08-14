<?php

namespace Modules\Reports\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Reports\Database\factories\ReportFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Modules\Department\App\Models\Department;


class Report extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guareded = ['id'];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
    
    protected static function newFactory(): ReportFactory
    {
        //return ReportFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('title', 'like', '%'.$val.'%')
        ->orWhere('date', 'like', '%'.$val.'%')
        ->orWhereHas('department', function ($query) use ($val) {
            $query->where('department', 'like', '%'.$val.'%');
        });
    }

    public static function createReport($fields)
    {
        self::create([
            'department_id' => $fields['department_id'],
            'employee_id' => $fields['employee_id'],
            'date' => $fields['date'],
            'report' => $fields['report'],
        ]);
    }

    public static function getReport($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'department';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator','department')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateReport($ReportId, $fields)
    {
        self::whereId($ReportId)->update([
            'department_id' => $fields['department_id'],
            'employee_id' => $fields['employee_id'],
            'date' => $fields['date'],
            'report' => $fields['report'],
        ]);
    }

    public static function deleteReport($ReportId)
    {
        self::whereId($ReportId)->delete();
    }
}
