<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'name_ar',
        'name_en',
        'slug',
        'sku',
        'description',
        'description_ar',
        'description_en',
        'price',
        'sale_price',
        'base_unit',
        'stock',
        'image',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
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

    public function displayPrice(): float
    {
        return (float) ($this->sale_price ?: $this->price);
    }
}
