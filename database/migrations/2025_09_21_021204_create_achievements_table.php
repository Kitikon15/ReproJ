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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('student_name_th'); // Thai student name
            $table->string('student_name_en')->nullable(); // English student name
            $table->string('title_th'); // Thai achievement title
            $table->string('title_en')->nullable(); // English achievement title
            $table->text('description_th'); // Thai description
            $table->text('description_en')->nullable(); // English description
            $table->string('category'); // Category: academic, competition, research, etc.
            $table->date('achievement_date'); // Date of achievement
            $table->string('image')->nullable(); // Achievement image/certificate
            $table->string('award_level')->nullable(); // Level: national, international, regional
            $table->integer('sort_order')->default(0); // For ordering display
            $table->boolean('is_featured')->default(false); // For highlighting important achievements
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
