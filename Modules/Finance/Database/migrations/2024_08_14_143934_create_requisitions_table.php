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
        Schema::create('requisitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requested_by');
            $table->foreignId('department_id');
            $table->foreignId('item_id');
            $table->string('date');
            $table->string('work_order');
            $table->string('quantity');
            $table->string('description');
            $table->string('unit_cost');
            $table->string('amount');
            $table->string('comment')->nullable();
            $table->forignId('forwarded_by')->nullable();
            $table->string('reason')->nullable();
            $table->enum('request_status',['pending','approved','rejected','forwarded'])->default('pending');
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisitions');
    }
};
