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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title_th'); // Thai title
            $table->string('title_en')->nullable(); // English title
            $table->text('content_th'); // Thai content
            $table->text('content_en')->nullable(); // English content
            $table->text('excerpt_th')->nullable(); // Thai excerpt/summary
            $table->text('excerpt_en')->nullable(); // English excerpt/summary
            $table->string('image')->nullable(); // Featured image path
            $table->date('publish_date'); // Publication date
            $table->integer('sort_order')->default(0); // For ordering display
            $table->boolean('is_published')->default(true);
            $table->boolean('is_featured')->default(false); // For highlighting important news
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
