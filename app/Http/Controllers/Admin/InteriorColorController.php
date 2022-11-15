<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InteriorColor;

class InteriorColorController extends Controller
{
    public function list()
    {
    	$list=InteriorColor::all();
    	return view('admin.interiorcolor.list',get_defined_vars());
    }
    public function loadInt(Request $req)
    {
        if(is_null($req->id)){
            $html=view('admin.interiorcolor.render')->render();
        }
        else
        {
            $interior=InteriorColor::find($req->id);
            $html=view('admin.interiorcolor.render',get_defined_vars())->render();  
        }
        return response()->json($html);
    }
    public function save(Request $req)
    {
    	$req->validate([
    		'name' => 'required',
    	]);
    	// dd($req);
    	if(is_null($req->id))
    	{
    		$interiorcolor = new InteriorColor();
    		$interiorcolor->name = $req->name;
    		$interiorcolor->save();
    		$msg = 'Interior Color added successfully';
    	}
    	else
    	{
    		$interiorcolor = InteriorColor::findorfail($req->id);
            $interiorcolor->name = $req->name;
            $interiorcolor->save();
    		$msg = 'Interior Color updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function delete($id)
    {
        InteriorColor::findOrFail($id)->delete();
        return redirect()->back()->with('success','Interior Color deleted successfully');
    }
}
