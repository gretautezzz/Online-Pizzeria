<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    public function products() {

        return $this->belongsToMany(Product::class, 'cats_products', 'cat_id', 'product_id');
    
    }
    
}
