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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('received_by');
            $table->foreignId('item_id');
            $table->foreignId('department_id');
            $table->string('date_of_expense');
            $table->string('quantity');
            $table->string('description');
            $table->string('unit_cost');
            $table->string('amount');
            $table->string('expense_status');
            $table->foreignId('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
