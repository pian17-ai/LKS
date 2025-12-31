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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id('schedule_id');
            $table->string('doctor_id');
            $table->string('departement_id');
            $table->foreign('doctor_id')->references('doctor_id')->on('doctors');
            $table->foreign('departement_id')->references('departement_id')->on('departements');
            $table->dateTime('schedule_date');
            $table->dateTime('schedule_start');
            $table->dateTime('schedule_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
