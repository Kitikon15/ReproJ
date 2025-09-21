<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_th',
        'title_en',
        'content_th',
        'content_en',
        'excerpt_th',
        'excerpt_en',
        'image',
        'publish_date',
        'sort_order',
        'is_published',
        'is_featured',
    ];

    protected $casts = [
        'publish_date' => 'date',
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
    ];

    // Scope for published news
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Scope for featured news
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope for recent news
    public function scopeRecent($query)
    {
        return $query->orderBy('publish_date', 'desc')->orderBy('created_at', 'desc');
    }
}
