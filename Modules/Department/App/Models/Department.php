<?php

namespace Modules\Department\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Department\Database\factories\DepartmentFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Department extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guareded = ['id'];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
    protected static function newFactory(): DepartmentFactory
    {
        //return DepartmentFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('department', 'like', '%'.$val.'%');
    }

    public static function createDepartment($fields)
    {
        self::create([
            'department' => $fields['department'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function getDepartment($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'department';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateDepartment($DepartmentId, $fields)
    {
        self::whereId($DepartmentId)->update([
            'department' => $fields['department'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function deleteDepartment($DepartmentId)
    {
        self::whereId($DepartmentId)->delete();
    }
    
}
