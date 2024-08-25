<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void 
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_number');
            $table->string('received_from');
            $table->string('reason');
            $table->string('initial_deposit')->nullable();
            $table->string('actual_amount');
            $table->enum('income_status',['cleared','pending balance']);
            $table->foreignId('entered_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
