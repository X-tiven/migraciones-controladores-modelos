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
        Schema::create('course_teacher', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('techer_id')->nullable();
            //referencia tabla course
            $table->foreign('course_id')
                ->references('id')
                ->on('course')->onDelete('set null');
            //referencia tabla computer
            $table->foreign('techer_id')
                ->references('id')
                ->on('techer')->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_teacher');
    }
};
