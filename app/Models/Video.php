<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_th',
        'title_en',
        'description_th',
        'description_en',
        'video_url',
        'thumbnail_url',
        'video_type',
        'duration',
        'category',
        'publish_date',
        'view_count',
        'sort_order',
        'is_published',
        'is_featured',
    ];

    protected $casts = [
        'publish_date' => 'date',
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
    ];

    // Scope for published videos
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Scope for featured videos
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope for recent videos
    public function scopeRecent($query)
    {
        return $query->orderBy('publish_date', 'desc')->orderBy('created_at', 'desc');
    }

    // Scope by category
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    // Helper method to get formatted duration
    public function getFormattedDurationAttribute()
    {
        if (!$this->duration) return null;
        
        $minutes = floor($this->duration / 60);
        $seconds = $this->duration % 60;
        
        return sprintf('%02d:%02d', $minutes, $seconds);
    }

    // Helper method to get YouTube video ID
    public function getYoutubeIdAttribute()
    {
        if ($this->video_type !== 'youtube') return null;
        
        preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $this->video_url, $matches);
        
        return $matches[1] ?? null;
    }
}
