<?php

namespace App\Http\Controllers;

use App\Models\LayoutCat;
use App\Models\Cat;
use Illuminate\Http\Request;

class LayoutCatController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $layoutCats = LayoutCat::orderBy('place','DESC')->get();
        return view('back.layoutCat.index', ['layoutCats' => $layoutCats]);
    }

    public function create()
    {
        $cats = Cat::all();
        $usedCats = LayoutCat::all()->pluck('cat_id')->all();

        return view('back.layoutCat.create',
    [
        'cats' => $cats,
        'usedCats' => $usedCats
    ]);
    }

    public function store(Request $request)
    {
        $usedCats = LayoutCat::all()->pluck('cat_id')->all();
        if(in_array($request->layout_cat_id,$usedCats)) {
            $request->flash();
            return redirect()->back()->with('info_message', 'Category has been already selected');

        }


        $layoutCat = new LayoutCat;
        $layoutCat->cat_id=$request->layout_cat_id;
        $layoutCat->place =0;
        $layoutCat->save(); //nuo cia atsiranda modelyje id
        $layoutCat->place =$layoutCat->id;
        $layoutCat->save();

        return redirect()->route('layoutCat.index')->with('success_message', 'New layoutCategory been created.');
    }

    public function up(LayoutCat $layoutCat) {
       $upLayout = LayoutCat::orderBy('place', 'ASC')
        -> where('place','>',$layoutCat->place) 
        ->first();

        if (null !== $upLayout) {
            $place = $layoutCat->place;
            $layoutCat->place = $upLayout->place;
            $upLayout->place = $place;
            $layoutCat->save();
            $upLayout->save();
            return redirect()->back()->with('success_message', 'Categories layout place was changed'); 
        }
        return redirect()->back()->with('info_message', 'This category is in the layout top position already');
    }

    public function down(LayoutCat $layoutCat) {
        $downLayout = LayoutCat::orderBy('place', 'DESC')
         -> where('place','<',$layoutCat->place) 
         ->first();
 
         if (null !== $downLayout) {
             $place = $layoutCat->place;
             $layoutCat->place = $downLayout->place;
             $downLayout->place = $place;
             $layoutCat->save();
             $downLayout->save();
             return redirect()->back()->with('success_message', 'Categories layout place was changed'); 
         }
         return redirect()->back()->with('info_message', 'This category is in the layout bottom position already');
     }

    public function destroy(LayoutCat $layoutCat)
    {
        $layoutCat->delete();

        return redirect()
        ->route('layoutCat.index')
        ->with('success_message', 'LayoutCategory gone.');
    }
}