<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'ingridient',
        'instructions',
        'image_path',
        'user_id'
    ];
}
