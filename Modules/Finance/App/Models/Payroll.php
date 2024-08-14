<?php

namespace Modules\Finance\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\PayrollFactory;

class Payroll extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): PayrollFactory
    {
        //return PayrollFactory::new();
    }
}
