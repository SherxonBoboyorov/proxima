<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = 
    [
        'image',
        'title_ru',
        'title_uz',
        'slug_ru',
        'slug_uz',
        'slug_ru', 
        'slug_uz',
        'price_ru',
        'price_uz',
        'sub_content_ru',
        'sub_content_uz',
        'description_ru',
        'description_uz',
        'specifications_ru',
        'specifications_uz',
        'meta_title_ru',
        'meta_title_uz',
        'meta_description_ru',
        'meta_description_uz',
    ];

    public function gallaries(): HasMany
    {
        return $this->hasMany(ProductGallary::class, 'product_id', 'id');
    }

    public function characters(): HasMany
    {
        return $this->hasMany(ProductCharacter::class, 'product_id', 'id');
    }
}
