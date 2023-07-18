<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\support\Str;

class NewsArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'content',
        'image',
        'slug'
        // Add more fields as needed
    ];
}
