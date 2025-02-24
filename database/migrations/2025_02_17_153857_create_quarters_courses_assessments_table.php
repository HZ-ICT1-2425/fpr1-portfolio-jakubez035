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
        // Create the quarters table
        Schema::create('quarters', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Create the courses table
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('quarter_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        // Create the assessments table
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->enum('condition', ['Passed', 'Pending', 'Failed'])->default('Pending');
            $table->decimal('points', 4, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('quarters');
    }
};
