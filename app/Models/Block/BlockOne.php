<?php

namespace App\Models\Block;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockOne extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'button',
        'photo'
    ];

    protected $casts = [
      'title' => 'array',
      'description' => 'array',
      'button' => 'array',
    ];
}
