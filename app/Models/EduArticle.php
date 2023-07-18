<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        // Add more fields as needed
    ];
}
