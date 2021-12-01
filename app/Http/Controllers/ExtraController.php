<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\PhotoHandleService;



class ExtraController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
            $extras= Extra::all(); 
       
        return view('back.extra.index', [
            'extras' => $extras,
        ]);

    }

    public function create()
    {
        return view('back.extra.create');

    }

    public function store(Request $request, PhotoHandleService $photoHandler)
    {
       
        $extra = new Extra;
       
        $photoHandler->handlePhoto($request, $extra);
        $extra->title = $request->extra_title;
        $extra->price_s = $request->extra_price_s;
        $extra->price_m = $request->extra_price_m;
        $extra->price_l = $request->extra_price_l;
    
        $extra->save();

        return redirect()->route('extra.index')->with('success_message','All good. New extra created');

    }

    public function show(Extra $extra)
    {
        return view('back.extra.show',['extra'=>$extra]);
    }

    public function edit(Request $request, Extra $extra, PhotoHandleService $photoHandler)
    {
        return view('back.extra.edit', [
            'extra' => $extra,
            'return' => $request->return ?? ''
        ]);
    }

    public function update(Request $request, Extra $extra, PhotoHandleService $photoHandler)
    {

       
        $photoHandler->handlePhoto($request, $extra, 'edit');
            $extra->title = $request->extra_title;
            $extra->price_s = $request->extra_price_s;
            $extra->price_m = $request->extra_price_m;
            $extra->price_l = $request->extra_price_l;
            $extra->save();

            return redirect()
            ->route('extra.index')
            ->with('success_message', 'OK. Extra was edited.');
        }

    public function destroy(Extra $extra, PhotoHandleService $photoHandler)
    {

        
        $photoHandler->deleteOldPhoto($extra);

        $extra->delete();

        return redirect()
        ->route('extra.index')
        ->with('success_message','All good.Extra deleted');
    }
}
