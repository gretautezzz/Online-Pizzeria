<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use App\Models\LayoutCat;
use App\Models\Cat;
use App\Models\LayoutProduct;
use App\Models\Product;
use App\Services\ShowCartService;

class FrontController extends Controller
{
    public function index(ShowCartService $showCart) {

        $pageData = new stdClass; //vienas didelis objekas
        $pageData->cartCount = $showCart->count();
        $pageData->cart = $showCart->cart();
        $pageData->cartTotal = $showCart->total();
        $pageData->layout = [] ; //objekto savybe kuri yra masyvas

        $layoutCatsIds = LayoutCat::orderBy('place','DESC')
        ->get()
        ->pluck('cat_id')
        ->all();            //eiles tvarka sudetos kategorijos/paprastas masyvas cia

        foreach($layoutCatsIds as $key => $layoutCatsId) { //key pridedam nes reikia kintamojo cia
            $pageData->layout[$key] = new stdClass; //vel objekta sukuriame 
            $pageData->layout[$key]-> cat = Cat::where('id', $layoutCatsId)->first(); //surasta visa kategorija 
            $pageData->layout[$key]->layoutProducts = LayoutProduct::whereIn('product_id',function($query) use ($layoutCatsId) {
                $query->select('product_id')
                ->from('cats_products')
                ->where('cats_products.cat_id', $layoutCatsId);
                })->orderBy('place','DESC')
                ->get();
                //pridedami produktu layoutai tam tikra tvarka
                $pageData->layout[$key]->products = collect();
                foreach( $pageData->layout[$key]->layoutProducts as $layoutProduct) {
                    $pageData->layout[$key]->products->add($layoutProduct->getProduct) ;
                }
        }

        return view('front.index', ['pageData'=>$pageData]);
    }
}
