<?php

namespace App\Http\Controllers;

use App\Models\PizzaSize;
use Illuminate\Http\Request;

class PizzaSizeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pizzaSizes = PizzaSize::all();
        return view('back.pizzaSize.index', ['pizzaSizes' => $pizzaSizes]);
    }

    public function create()
    {
        return view('back.pizzaSize.create');
    }

    public function store(Request $request)
    {
        $pizzaSize = new PizzaSize;
        $pizzaSize->title = $request->pizzaSize_title;
        $pizzaSize->size = $request->pizzaSize_size;
        $pizzaSize->save();
        return redirect()->route('pizzaSize.index')->with('success_message', 'New Pizza Size created.');
    }

    public function edit(PizzaSize $pizzaSize)
    {
        return view('back.pizzaSize.edit', ['pizzaSize' => $pizzaSize]);
    }

    public function update(Request $request, PizzaSize $pizzaSize)
    {
        $pizzaSize->title = $request->pizzaSize_title;
        $pizzaSize->size = $request->pizzaSize_size;
        $pizzaSize->save();
        return redirect()->route('pizzaSize.index')->with('success_message', 'Pizza size was edited.');
    }

    public function destroy(PizzaSize $pizzaSize)
    {
        // if ($pizzaSize->pizzaSizeHasOutfits->count()){
        //     return redirect()->back()->with('info_message', 'There is job to do. Can\'t delete.');
        // }
        
        $pizzaSize->delete();
        return redirect()->route('pizzaSize.index')->with('success_message', 'PizzaSize gone.');
    }
}