<?php

namespace App\Models\Block;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockThree extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'photo'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];

}
