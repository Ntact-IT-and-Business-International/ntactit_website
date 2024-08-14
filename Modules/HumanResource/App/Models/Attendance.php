<?php

namespace Modules\HumanResource\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\HumanResource\Database\factories\AttendanceFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Attendance extends Model
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
    
    protected static function newFactory(): AttendanceFactory
    {
        //return AttendanceFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('created_at', 'like', '%'.$val.'%')
        ->orWhereHas('name', function ($query) use ($val) {
            $query->where('name', 'like', '%'.$val.'%');
        });
    }

    public static function createAttendance($fields)
    {
        self::create([
            'employee_id' => $fields['employee_id'],
            'time_in' => $fields['time_in'],
            'time_out' => $fields['time_out'],
            'reason' => $fields['reason'],
        ]);
    }

    public static function getAttendance($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'name';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateAttendance($AttendanceId, $fields)
    {
        self::whereId($AttendanceId)->update([
            'employee_id' => $fields['employee_id'],
            'time_in' => $fields['time_in'],
            'time_out' => $fields['time_out'],
            'reason' => $fields['reason'],
        ]);
    }

    public static function deleteAttendance($AttendanceId)
    {
        self::whereId($AttendanceId)->delete();
    }
}
