<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fuel;

class FuelController extends Controller
{
	public function list()
    {
    	$list=Fuel::all();
    	return view('admin.fuel.list',get_defined_vars());
    }
    public function load(Request $req)
    {
        if(is_null($req->id)){
            $html=view('admin.fuel.render')->render();
        }
        else
        {
            $fuel=Fuel::find($req->id);
            $html=view('admin.fuel.render',get_defined_vars())->render();  
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
    		$fuel = new Fuel();
    		$fuel->name = $req->name;
    		$fuel->save();
    		$msg = 'Fuel added successfully';
    	}
    	else
    	{
    		$fuel = Fuel::findorfail($req->id);
            $fuel->name = $req->name;
            $fuel->save();
    		$msg = 'Fuel updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function delete($id)
    {
        Fuel::findOrFail($id)->delete();
        return redirect()->back()->with('success','Fuel deleted successfully');
    }
}
