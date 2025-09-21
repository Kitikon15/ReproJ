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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title_th'); // Thai title
            $table->string('title_en')->nullable(); // English title
            $table->text('description_th'); // Thai description
            $table->text('description_en')->nullable(); // English description
            $table->string('video_url'); // YouTube, Vimeo, or local video URL
            $table->string('thumbnail_url')->nullable(); // Custom thumbnail image
            $table->string('video_type')->default('youtube'); // youtube, vimeo, local
            $table->integer('duration')->nullable(); // Duration in seconds
            $table->string('category')->default('general'); // general, tutorial, presentation, etc.
            $table->date('publish_date'); // Publication date
            $table->integer('view_count')->default(0); // View counter
            $table->integer('sort_order')->default(0); // For ordering display
            $table->boolean('is_published')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
