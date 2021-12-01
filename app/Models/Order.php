<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function clients() {

        return $this->belongsToMany(Client::class, 'clients_orders', 'order_id', 'client_id');
    
    }
    
    public function products() {

        return $this->belongsToMany(Product::class, 'order_products', 'order_id', 'product_id');
    
    }
}
