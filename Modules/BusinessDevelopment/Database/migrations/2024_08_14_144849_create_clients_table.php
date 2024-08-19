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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('company');
            $table->string('email');
            $table->string('contact');
            $table->string('invoice_number');
            $table->string('address');
            $table->string('customer_number');
            $table->string('quantity');
            $table->string('description');
            $table->string('rate');
            $table->string('amount');
            $table->enum('business_status',['pending','successful','did not succeed'])->default('pending');
            $table->foreignId('registered_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
