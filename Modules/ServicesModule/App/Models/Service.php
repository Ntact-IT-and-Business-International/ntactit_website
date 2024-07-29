<?php

namespace Modules\ServicesModule\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ServicesModule\Database\factories\ServiceFactory;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $guarded = ['id'];
    
    protected static function newFactory(): ServiceFactory
    {
        //return ServiceFactory::new();
    }
    public static function createService($fields)
    {
        self::create([
            // 'id' => Uuid::uuid4(),
            'name_of_service' => $fields['name_of_service'],
            'created_by' => $fields['created_by'],
        ]);
    }
}
