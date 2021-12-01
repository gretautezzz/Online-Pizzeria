<?php

namespace App\Services;

use Session;
use App\Models\Product;

class ShowCartService {

    private $cart;

    public function __construct()
    {
        $this->cart = Session::get('cart',[]);
    }
    public function count()
    {
        return count($this->cart);
    }

    public function cart()
    {
        $ids = array_keys($this->cart);

        return Product::whereIn('id',$ids)
        ->get()
        ->map(function($p) {
            $p->count = $this->cart[$p->id]['count'];
            return $p;
        });
    }
    public function total()
    {
       
        $total = 0;
        foreach($this->cart() as $cartProduct) {
            $total +=  $cartProduct->price * $cartProduct->count;
        }
        return $total;
    }

}