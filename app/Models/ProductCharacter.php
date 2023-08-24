<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCharacter extends Model
{
    use HasFactory;

    protected $table = 'product_characters';

    protected $fillable = 
    [
        'product_id', 'key', 'value', 'sort'
    ];
}
