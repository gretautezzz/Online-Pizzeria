<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\PhotoHandleService;



class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
            $products= Product::all(); 
       
        return view('back.product.index', [
            'products' => $products,
        ]);

    }

    public function create()
    {
        $cats = Cat::all();
        return view('back.product.create', [
        'cats' => $cats
        ]);

    }

    public function store(Request $request, PhotoHandleService $photoHandler)
    {
       

        $product= new Product;
        $photoHandler->handlePhoto($request, $product);
        $product->title = $request->product_title;
        $product->amount = $request->product_amount;
        $product->description = $request->product_description;
        $product->price= $request->product_price;
        $product->description = $request->product_description;
        $product->info= $request->product_info;
        $product->save();
        //attach category
        if($request->cat_id) {
        $product-> cats()->attach($request->cat_id);
        }

        return redirect()->route('product.index')->with('success_message','All good. New product created');

    }

    public function show(Product $product)
    {
        return view('back.product.show',['product'=>$product]);
    }

    public function edit(Request $request, Product $product)
    {
        $cats = Cat::all();
        return view('back.product.edit', [
            'product' => $product,
            'cats' => $cats,
            'catId' =>$product->cats->first()->id ?? 0
        ]);
    }

    public function update(Request $request, Product $product,PhotoHandleService $photoHandler)
    {

            
        $photoHandler->handlePhoto($request, $product, 'edit');
            $product->title = $request->product_title;
            $product->amount = $request->product_amount;
            $product->description = $request->product_description;
            $product->price= $request->product_price;
            $product->description = $request->product_description;
            $product->info= $request->product_info;
            $product->save();

        // change or add category
            $product->cats()->detach();
            if($request->cat_id) {
                $product-> cats()->attach($request->cat_id);
                }

            return redirect()
            ->route('product.index')
            ->with('success_message', 'OK. Product was edited.');
        }

    public function destroy(Product $product,PhotoHandleService $photoHandler)
    {

        
        $photoHandler->deleteOldPhoto($product);
        $product->cats()->detach();
        $product->delete();

        return redirect()
        ->route('product.index')
        ->with('success_message','All good.Product deleted');
    }
}
