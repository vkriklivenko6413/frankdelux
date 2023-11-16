<?php

namespace App\Models\Block;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockTwo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'preview_title_1',
        'preview_title_2',
        'preview_title_3',
        'description_1',
        'description_2',
        'description_3',
    ];

    protected $casts = [
        'title' => 'array',
        'preview_title_1' => 'array',
        'preview_title_2' => 'array',
        'preview_title_3' => 'array',
        'description_1' => 'array',
        'description_2' => 'array',
        'description_3' => 'array',
    ];
}
