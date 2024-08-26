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
        Schema::create('employee_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->foreignId('department_id');
            $table->string('position');
            $table->string('appointment_date');
            $table->string('phone_number');
            $table->string('curriculum_vitae');
            $table->string('appointment_letter');
            $table->string('contract');
            $table->string('job_description');
            $table->string('salary');
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('nssf')->nullable();
            $table->string('photo');
            $table->enum('employee_status',['permanent','contract','probation'])->default('permanent');
            $table->foreignId('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_records');
    }
};
