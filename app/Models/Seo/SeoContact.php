<?php

namespace App\Models\Seo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoContact extends Model
{
    use HasFactory;

    protected $fillable = ['seo_title','seo_description','seo_text'];

    protected $casts = [
        'seo_title' => 'array',
        'seo_description' => 'array',
        'seo_text' => 'array',
    ];
}
