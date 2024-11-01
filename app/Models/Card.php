<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * @property Collection $galleries
 * @property Collection $descriptions
 */
class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'preview_photo',
        'active',
        'disable',
        'integer'
    ];


    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];

    public function galleries(): HasMany
    {
        return $this->hasMany(CardGallery::class);
    }

}
