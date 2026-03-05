<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Câmpurile pe care le-am pus în tabelul de evenimente
    protected $fillable = ['name', 'date', 'location', 'description'];
}