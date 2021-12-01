<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use stdClass;
use App\Services\ShowCartService;
use App\Models\LayoutCat;
use App\Models\Cat;
use App\Models\LayoutProduct;



class CartController extends Controller
{

    public function add(Product $product) 
    {
        // [id] => [count => 5]

        $cart = Session::get('cart', []);
        $id = (int) $product->id;
        if (isset($cart[$id])) {
            $cart[$id]['count']++;
        }
        else {
            $cart[$id] = ['count' => 1];
        }
        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function remove(Product $product)
    {
        $cart = Session::get('cart', []);
        $id = (int) $product->id;
        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }
        return redirect()->back();
    }

    public function view (ShowCartService $showCart)
    {
        $pageData = new stdClass; 
        $pageData->hideMiniCart = true;

        $pageData->cart = $showCart->cart();
        $pageData->cartTotal = $showCart->total();

        return view('front.cart.view', ['pageData'=>$pageData]);
    }

    public function update(Request $request)
    {
       $cart = Session::get('cart',[]);
        foreach ($cart as $key => &$product) {
            if(isset($request->product[$key])) {
                $count = max((int)$request->product[$key], 0);
                if(!$count) {
                   unset($cart[$key]) ;
                }
                $product['count'] = $count;
            }
            if ($request->delete) {
                unset($cart[(int) $request->delete]) ;
            }
        }
        Session::put('cart', $cart);
        return redirect()->back();
    }
}
