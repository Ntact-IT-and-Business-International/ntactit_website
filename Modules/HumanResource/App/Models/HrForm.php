<?php

namespace Modules\HumanResource\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\HumanResource\Database\factories\HrFormFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class HrForm extends Model
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
    
    protected static function newFactory(): HrFormFactory
    {
        //return HrFormFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('name_of_form', 'like', '%'.$val.'%')
        ->orWhereHas('name', function ($query) use ($val) {
            $query->where('name', 'like', '%'.$val.'%');
        });
    }

    public static function createHrForm($fields)
    {
        self::create([
            'name_of_form' => $fields['name_of_form'],
            'form' => $fields['form'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function getHrForm($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'name';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateHrForm($HrFormId, $fields)
    {
        self::whereId($HrFormId)->update([
            'name_of_form' => $fields['name_of_form'],
            'form' => $fields['form'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function deleteHrForm($HrFormId)
    {
        self::whereId($HrFormId)->delete();
    }
}
