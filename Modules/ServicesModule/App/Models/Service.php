<?php

namespace Modules\ServicesModule\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ServicesModule\Database\factories\ServiceFactory;
use Modules\ServicesModule\App\Models\QuotationRequest;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
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

    protected static function newFactory(): ServiceFactory
    {
        //return ServiceFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query->where('name_of_service', 'like', '%'.$val.'%');
    }

    public static function createService($fields)
    {
        self::create([
            // 'id' => Uuid::uuid4(),
            'name_of_service' => $fields['name_of_service'],
            'created_by' => $fields['created_by'],
        ]);
    }
    public static function getQuotation($search, $sortBy, $sortDirection, $perPage){
        try {
            return QuotationRequest::getQuotation($search, $sortBy, $sortDirection, $perPage);
        } catch (\Exception $e) {
            return response()->json(['failed' => 'Operation Failed', 'error' => $e->getMessage()], 500);
        }
    }
    public static function getGetService($search, $sortBy, $sortDirection, $perPage){
        
        $sortBy = $sortBy ?: 'name_of_service';
        $sortDirection = $sortDirection ?: 'asc';

        return self::with('creator')->search($search)
            ->orderBy($sortBy, $sortDirection)
            ->paginate($perPage);
    }
}
