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
        Schema::create('quotation_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id');
            $table->string('client_name');
            $table->string('company')->nullable();
            $table->string('client_email');
            $table->string('client_contact');
            $table->string('client_message');
            $table->enum('status',['pending','replied','successful','sent'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotation_requests');
    }
};
