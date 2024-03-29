<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'content',
        'image',
        'slug',
        'author'
        // Add more fields as needed
    ];
}
