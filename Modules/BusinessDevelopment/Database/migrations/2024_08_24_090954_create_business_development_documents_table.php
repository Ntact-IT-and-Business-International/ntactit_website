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
        Schema::create('business_development_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->string('document_type');
            $table->foreignId('service_id');
            $table->string('invoice_number')->nullable();
            $table->string('quantity');
            $table->string('description');
            $table->string('rate');
            $table->string('amount');
            $table->enum('status',['pending','successful','did not succeed','forwarded'])->default('pending');
            $table->foreignId('registered_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_development_documents');
    }
};
