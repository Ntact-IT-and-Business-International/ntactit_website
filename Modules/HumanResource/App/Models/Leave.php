<?php

namespace Modules\HumanResource\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\HumanResource\Database\factories\LeaveFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Leave extends Model
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
    protected static function newFactory(): LeaveFactory
    {
        //return LeaveFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('created_at', 'like', '%'.$val.'%')
        ->orWhereHas('name', function ($query) use ($val) {
            $query->where('name', 'like', '%'.$val.'%');
        });
    }

    public static function createLeave($fields)
    {
        self::create([
            'employee_id' => $fields['employee_id'],
            'date_in' => $fields['date_in'],
            'date_out' => $fields['date_out'],
            'reason' => $fields['reason'],
            'leave_status' => $fields['leave_status'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function getLeave($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'name';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateLeave($LeaveId, $fields)
    {
        self::whereId($LeaveId)->update([
            'employee_id' => $fields['employee_id'],
            'date_in' => $fields['date_in'],
            'date_out' => $fields['date_out'], 
            'reason' => $fields['reason'],
            'reason_for_rejection' => $fields['reason_for_rejection'],
            'leave_status' => $fields['leave_status'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function deleteLeave($LeaveId)
    {
        self::whereId($LeaveId)->delete();
    }
}
