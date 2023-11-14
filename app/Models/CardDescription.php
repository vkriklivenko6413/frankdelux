<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardDescription extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'size',
    ];



    protected $casts = [
        'description' => 'array',
        'title' => 'array'
    ];
}
