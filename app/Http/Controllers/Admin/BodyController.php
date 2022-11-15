<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Body;

class BodyController extends Controller
{
	public function list()
    {
    	$list=Body::all();
    	return view('admin.body.list',get_defined_vars());
    }
    public function load(Request $req)
    {
        if(is_null($req->id)){
            $html=view('admin.body.render')->render();
        }
        else
        {
            $body=Body::find($req->id);
            $html=view('admin.body.render',get_defined_vars())->render();  
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
    		$body = new Body();
    		$body->name = $req->name;
    		$body->save();
    		$msg = 'Body added successfully';
    	}
    	else
    	{
    		$body = Body::findorfail($req->id);
            $body->name = $req->name;
            $body->save();
    		$msg = 'Body updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function delete($id)
    {
        Body::findOrFail($id)->delete();
        return redirect()->back()->with('success','Body deleted successfully');
    }
}

