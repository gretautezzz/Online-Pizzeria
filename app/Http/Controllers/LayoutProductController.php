<?php

namespace App\Http\Controllers;

use App\Models\LayoutProduct;
use App\Models\Product;
use App\Models\Cat;
use Illuminate\Http\Request;

class LayoutProductController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Cat $cat)
    {
        if(null=== $cat->id) {
            $message = 'Please select category to layout' ;
            $header = 'Category layout selector';
            $layoutProducts = collect();
        } else {
        $message = 'Category is empty' ;
        $header = $cat->title. ' Layout';
        $catId =  $cat->id;

        $layoutProducts = LayoutProduct::whereIn('product_id',function($query) use ($catId) {
            $query->select('product_id')
            ->from('cats_products')
            ->where('cats_products.cat_id', $catId);
             })->orderBy('place','DESC')->get();
        
}


       $cats = Cat::all(); 
        return view('back.layoutProduct.index', ['layoutProducts' => $layoutProducts,
        'cats' => $cats,
        'message' => $message,
        'header'=> $header,
        'catNow' => $cat
    ]);
    }

    public function create()
    {
        $products = Product::all();
        $usedProducts = LayoutProduct::all()->pluck('product_id')->all();

        return view('back.layoutProduct.create',
    [
        'products' => $products,
        'usedProducts' => $usedProducts
    ]);
    }

    public function store(Request $request)
    {
        $usedProducts = LayoutProduct::all()->pluck('product_id')->all();
        if(in_array($request->layout_product_id,$usedProducts)) {
            $request->flash();
            return redirect()->back()->with('info_message', 'Product caegory has been already selected');

        }


        $layoutProduct = new LayoutProduct;
        $layoutProduct->product_id=$request->layout_product_id;
        $layoutProduct->place =0;
        $layoutProduct->save(); //nuo cia atsiranda modelyje id
        $layoutProduct->place =$layoutProduct->id;
        $layoutProduct->save();

        return redirect()->route('layoutProduct.index')->with('success_message', 'New Product category been created.');
    }

    public function up(LayoutProduct $layoutProduct, Cat $cat) {

        $catId =  $cat->id;

        $upLayout = LayoutProduct::whereIn('product_id',function($query) use ($catId) {
            $query->select('product_id')
            ->from('cats_products')
            ->where('cats_products.cat_id', $catId);
             })->orderBy('place','ASC')-> where('place','>',$layoutProduct->place) 
             ->first();

    //    $upLayout = LayoutProduct::orderBy('place', 'ASC')
    //     -> where('place','>',$layoutProduct->place) 
    //     ->first();

        if (null !== $upLayout) {
            $place = $layoutProduct->place;
            $layoutProduct->place = $upLayout->place;
            $upLayout->place = $place;
            $layoutProduct->save();
            $upLayout->save();
            return redirect()->back()->with('success_message', 'Product categories layout place was changed'); 
        }
        return redirect()->back()->with('info_message', 'This product category is in the layout top position already');
    }

    public function down(LayoutProduct $layoutProduct, Cat $cat) {

        $catId =  $cat->id;

        $downLayout = LayoutProduct::whereIn('product_id',function($query) use ($catId) {
            $query->select('product_id')
            ->from('cats_products')
            ->where('cats_products.cat_id', $catId);
             })->orderBy('place','DESC')-> where('place','<',$layoutProduct->place) 
             ->first();

        // $downLayout = LayoutProduct::orderBy('place', 'DESC')
        //  -> where('place','<',$layoutProduct->place) 
        //  ->first();
 
         if (null !== $downLayout) {
             $place = $layoutProduct->place;
             $layoutProduct->place = $downLayout->place;
             $downLayout->place = $place;
             $layoutProduct->save();
             $downLayout->save();
             return redirect()->back()->with('success_message', 'Product categories layout place was changed'); 
         }
         return redirect()->back()->with('info_message', 'This product category is in the layout bottom position already');
     }

    public function destroy(LayoutProduct $layoutProduct)
    {
        $layoutProduct->delete();

        return redirect()
        ->route('layoutProduct.index')
        ->with('success_message', 'LayoutProductegory gone.');
    }
}