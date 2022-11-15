<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Make;

class MakeController extends Controller
{
    public function list()
    {
    	$list=Make::all();
    	return view('admin.make.list',get_defined_vars());
    }
    public function loadMake(Request $req)
    {
        if(is_null($req->id)){
            $html=view('admin.make.make')->render();  
        }
        else
        {
            $make=Make::find($req->id);
            $html=view('admin.make.edit',get_defined_vars())->render();  
        }
        return response()->json($html);
    }
    public function save(Request $req)
    {
    	$req->validate([
    		'name' => 'required',
    	]);
    	if(is_null($req->id))
    	{
    		$make = new Make();
    		$make->name = $req->name;
    		if(isset($req->image))
            {
                $req->validate([
                    'image.*' => 'image|mimes:jpg,jpeg,png|max:5000',
                ]);
                $make->image = uploadImage($req->image,'uploads/make');
            }
    		$make->save();
    		$msg = 'Make added successfully';
    	}
    	else
    	{
    		$make = Make::findorfail($req->id);
            $make->name = $req->name;
            if(isset($req->image))
            {
                $req->validate([
                    'image.*' => 'image|mimes:jpg,jpeg,png|max:5000',
                ]);
                $make->image = uploadImage($req->image,'uploads/make');
            }
            $make->save();
    		$msg = 'Make updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);
    }
    public function delete($id)
    {
        Make::findOrFail($id)->delete();
        return redirect()->back()->with('success','Make successfully deleted');
    }
}
