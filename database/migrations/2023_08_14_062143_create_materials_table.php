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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->string('tittle');
            $table->text('description');
            $table->string('file');
            $table->unsignedBigInteger('teacher_id');
            $table->timestamps();
            $table->dateTime('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_materials');
    }
};
