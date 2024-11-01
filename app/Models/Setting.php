<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'viber',
        'address',
        'telegram',
        'whatsapp',
        'email',
        'phone',
        'date',
        'instagram'
    ];

    protected $casts = [
        'address' => 'array',
        'date' => 'array'
    ];
}
