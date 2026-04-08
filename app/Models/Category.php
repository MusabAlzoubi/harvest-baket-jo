<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ar',
        'name_en',
        'slug',
        'description',
        'description_ar',
        'description_en',
        'image',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function localizedName(string $locale): string
    {
        return $locale === 'en'
            ? ($this->name_en ?: $this->name ?: '')
            : ($this->name_ar ?: $this->name ?: '');
    }

    public function localizedDescription(string $locale): string
    {
        return $locale === 'en'
            ? ($this->description_en ?: $this->description ?: '')
            : ($this->description_ar ?: $this->description ?: '');
    }
}
