<?php

namespace Modules\ServicesModule\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ServicesModule\Database\factories\PackageFactory;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\ServicesModule\App\Models\Service;

class Package extends Model
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

    public function services(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service');
    }

    protected static function newFactory(): PackageFactory
    {
        //return PackageFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('category', 'like', '%'.$val.'%');
    }
    public static function createPackage($fields){
        self::create([
            'service' => $fields['service'],
            'category' => $fields['category'],
            'quantity' => $fields['quantity'],
            'amount' => $fields['amount'],
            'description' => $fields['description'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function getPackage($search, $sortBy, $sortDirection, $perPage)
    {
        // Define a default column and direction in case $sortBy is empty.
        $sortBy = $sortBy ?: 'created_at';
        $sortDirection = $sortDirection ?: 'asc';

        return self::with('creator','services')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }

    public static function updatePackage($packageId, $fields)
    {
        self::whereId($packageId)->update([
            'service' => $fields['service'],
            'category' => $fields['category'],
            'amount' => $fields['amount'],
            'quantity' => $fields['quantity'],
            'description' => $fields['description'],
            'created_by' => $fields['created_by'],
        ]);
    }

    public static function deletePackage($packageId)
    {
        self::whereId($packageId)->delete();
    }
}
