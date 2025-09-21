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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->string('name_th'); // Thai name
            $table->string('name_en')->nullable(); // English name
            $table->string('title_th'); // Thai title/position
            $table->string('title_en')->nullable(); // English title/position
            $table->string('department_th'); // Thai department
            $table->string('department_en')->nullable(); // English department
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('specialization')->nullable(); // Areas of expertise
            $table->string('image')->nullable(); // Profile image path
            $table->integer('sort_order')->default(0); // For ordering display
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
