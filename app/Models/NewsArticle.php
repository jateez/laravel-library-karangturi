<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'author',
        'image', // Add the 'image' attribute to the fillable array
    ];

    protected $casts = [
        'image' => 'array', // Cast the 'image' attribute as an array
    ];
}
