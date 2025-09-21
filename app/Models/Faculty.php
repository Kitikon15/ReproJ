<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_th',
        'name_en',
        'title_th',
        'title_en',
        'department_th',
        'department_en',
        'email',
        'phone',
        'specialization',
        'image',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Scope for active faculty
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for ordered display
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name_th');
    }
}
