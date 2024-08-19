<?php

namespace Modules\Finance\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\FinanceFormFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class FinanceForm extends Model
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

    protected static function newFactory(): FinanceFormFactory
    {
        //return FinanceFormFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('name_of_form', 'like', '%'.$val.'%')
        ->orWhereHas('name', function ($query) use ($val) {
            $query->where('name', 'like', '%'.$val.'%');
        });
    }

    public static function createFinanceForm($fields)
    {
        self::create([
            'name_of_form' => $fields['name_of_form'],
            'form' => $fields['form'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function getFinanceForm($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'name';
        $sortDirection = $sortDirection ?: 'desc';

        return self::with('creator')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updateFinanceForm($FinanceFormId, $fields)
    {
        self::whereId($FinanceFormId)->update([
            'name_of_form' => $fields['name_of_form'],
            'form' => $fields['form'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function deleteFinanceForm($FinanceFormId)
    {
        self::whereId($FinanceFormId)->delete();
    }
}
