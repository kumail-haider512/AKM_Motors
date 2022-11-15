<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function searchSort(Request $request)
    {
    	// dd($request);
        $list=Product::where('id','!=',0);
        if($request->sort == "make")
        {
            $list=$list->where('make_id',$request->id);
        }
        if($request->sort == "model")
        {
            $list=$list->where('carmodel_id',$request->id);
        }
        if($request->sort == "exterior")
        {
            $list=$list->where('exteriorcolor_id',$request->id);
        }
        if($request->sort == "interior")
        {
            $list=$list->where('interiorcolor_id',$request->id);
        }
        if($request->sort == "engine")
        {
            $list=$list->where('engine_id',$request->id);
        }
        $list=$list->get();
        $html = view('ajax.sorting',get_defined_vars())->render();
        return response()->json(['html' => $html]);
    }
    public function productSort(Request $request)
    {
        // dd($request);
        $list=Product::where('id','!=',0);
        if($request->sort == "small")
        {
            $list=$list->orderBy('price','asc');
        }
        if($request->sort == "large")
        {
            $list=$list->orderBy('price','desc');
        }
        if($request->sort == "latest")
        {
            $list=$list->orderBy('created_at','asc');
        }
        if($request->sort == "oldest")
        {
            $list=$list->orderBy('created_at','desc');
        }
        $list=$list->get();
        $html = view('ajax.sorting',get_defined_vars())->render();
        return response()->json(['html' => $html]);
    }
}
