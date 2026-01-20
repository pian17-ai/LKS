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
        Schema::create('installment_apply_status', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('society_id')->constrained('societies');
            $table->foreignId('installment_id')->constrained('installments');
            $table->foreignId('available_month_id')->constrained('available_month');
            $table->foreignId('installment_apply_societies_id')->constrained('installment_apply_societies');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installment_apply_status');
    }
};
