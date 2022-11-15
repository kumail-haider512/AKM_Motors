<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function searchSort(Request $request)
    {
        // dd($req->all());
        $posts=Posts::where('status','active');
        if($request->sort == "small")
        {
            $posts=$posts->orderBy('sale_price','asc');
        }
        if($request->sort == "large")
        {
            $posts=$posts->orderBy('sale_price','DESC');
        }
        if($request->sort == "oldest")
        {
            $posts=$posts->orderBy('created_at','ASC');
        }
        if($request->sort == "latest")
        {
            $posts=$posts->orderBy('created_at','DESC');
        }
        $posts=$posts->get();
        $html = view('ajax.sorting',get_defined_vars())->render();
        // dd($posts);
        return response()->json(['html' => $html]);
    }
}
