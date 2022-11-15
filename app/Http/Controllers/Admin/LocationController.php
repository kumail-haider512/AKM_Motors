<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
	public function list()
    {
    	$list=Location::all();
    	return view('admin.location.list',get_defined_vars());
    }
    public function loadLocation(Request $req)
    {
        if(is_null($req->id)){
            $html=view('admin.location.render')->render();
        }
        else
        {
            $location=Location::find($req->id);
            $html=view('admin.location.render',get_defined_vars())->render();  
        }
        return response()->json($html);
    }
    public function save(Request $req )
    {
    	$req->validate([
    		'name' => 'required',
    	]);
    	// dd($req);
    	if(is_null($req->id))
    	{
    		$location = new Location();
    		$location->name = $req->name;
    		$location->save();
    		$msg = 'Location added successfully';
    	}
    	else
    	{
    		$location = Location::findorfail($req->id);
            $location->name = $req->name;
            $location->save();
    		$msg = 'Location updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function delete($id)
    {
        Location::findOrFail($id)->delete();
        return redirect()->back()->with('success','Location deleted successfully');
    }
}
