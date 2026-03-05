<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    use HasFactory;

    // Asta permite salvarea datelor din formular
    protected $fillable = ['title', 'content', 'author_email'];
}