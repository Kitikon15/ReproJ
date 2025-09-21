<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name_th',
        'student_name_en',
        'title_th',
        'title_en',
        'description_th',
        'description_en',
        'category',
        'achievement_date',
        'image',
        'award_level',
        'sort_order',
        'is_featured',
        'is_published',
    ];

    protected $casts = [
        'achievement_date' => 'date',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
    ];

    // Scope for published achievements
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Scope for featured achievements
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope for recent achievements
    public function scopeRecent($query)
    {
        return $query->orderBy('achievement_date', 'desc')->orderBy('created_at', 'desc');
    }

    // Scope by category
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
