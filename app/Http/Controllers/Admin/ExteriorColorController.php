<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExteriorColor;

class ExteriorColorController extends Controller
{
    public function list()
    {
    	$list=ExteriorColor::all();
    	return view('admin.exteriorcolor.list',get_defined_vars());
    }
    public function loadExt(Request $req)
    {
        if(is_null($req->id)){
            $html=view('admin.exteriorcolor.render')->render();
        }
        else
        {
            $exterior=ExteriorColor::find($req->id);
            $html=view('admin.exteriorcolor.render',get_defined_vars())->render();  
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
    		$exteriorcolor = new ExteriorColor();
    		$exteriorcolor->name = $req->name;
    		$exteriorcolor->save();
    		$msg = 'Exterior Color added successfully';
    	}
    	else
    	{
    		$exteriorcolor = ExteriorColor::findorfail($req->id);
            $exteriorcolor->name = $req->name;
            $exteriorcolor->save();
    		$msg = 'Exterior Color updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function delete($id)
    {
        ExteriorColor::findOrFail($id)->delete();
        return redirect()->back()->with('success','Exterior Color deleted successfully');
    }
}
