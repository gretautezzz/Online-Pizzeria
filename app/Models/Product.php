<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;

public function cats() {

    return $this->belongsToMany(Cat::class, 'cats_products', 'product_id', 'cat_id');

}

}
