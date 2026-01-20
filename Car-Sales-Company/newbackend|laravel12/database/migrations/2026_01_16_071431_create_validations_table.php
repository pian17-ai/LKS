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
        Schema::create('validations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('society_id')->constrained('societies')->unique();
            $table->foreignId('validator_id')->constrained('validators');
            $table->enum('status', ['accepted', 'declined', 'pending'])->default('pending');
            $table->string('job');
            $table->text('job_description');
            $table->bigInteger('income');
            $table->text('reason_accepted');
            $table->text('validator_notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validations');
    }
};
