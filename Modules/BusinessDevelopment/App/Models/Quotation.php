<?php

namespace Modules\BusinessDevelopment\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BusinessDevelopment\Database\factories\QuotationFactory;

class Quotation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): QuotationFactory
    {
        //return QuotationFactory::new();
    }
}
