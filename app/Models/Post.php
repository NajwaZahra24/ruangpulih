<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'category',
        'thumbnail',
        'published_at'
    ];

    // Ganti $dates dengan $casts untuk Laravel 8+
    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Tambahkan default value untuk category
    protected $attributes = [
        'category' => 'informasi', // nilai default
    ];

    public function getCategoryNameAttribute()
    {
        return [
            'edukasi' => 'Edukasi Kesehatan Mental',
            'informasi' => 'Informasi Kesehatan Mental'
        ][$this->category] ?? $this->category;
    }

    // Tambahkan scope untuk post yang sudah dipublish
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
                    ->where('published_at', '<=', now());
    }

    // Tambahkan accessor untuk thumbnail URL
    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail 
            ? asset("storage/{$this->thumbnail}")
            : asset('images/default-thumbnail.jpg');
    }
}