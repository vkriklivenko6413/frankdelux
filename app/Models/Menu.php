<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_1',
        'menu_2',
        'menu_3',
        'menu_4',
        'menu_5',
        'menu_6',
    ];

    protected $casts = [
        'menu_1' => 'array',
        'menu_2' => 'array',
        'menu_3' => 'array',
        'menu_4' => 'array',
        'menu_5' => 'array',
        'menu_6' => 'array',
    ];
}
