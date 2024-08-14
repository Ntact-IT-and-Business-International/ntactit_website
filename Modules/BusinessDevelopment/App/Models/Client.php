<?php

namespace Modules\BusinessDevelopment\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BusinessDevelopment\Database\factories\ClientFactory;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): ClientFactory
    {
        //return ClientFactory::new();
    }
}
