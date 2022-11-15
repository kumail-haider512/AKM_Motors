<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarModel;

class CarModelController extends Controller
{
    public function list()
    {
    	$list=CarModel::all();
    	return view('admin.model.list',get_defined_vars());
    }
    public function loadModel(Request $req)
    {
        if(is_null($req->id)){
            $html=view('admin.model.render')->render();
        }
        else
        {
            $model=CarModel::find($req->id);
            $html=view('admin.model.render',get_defined_vars())->render();  
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
    		$carmodel = new CarModel();
    		$carmodel->name = $req->name;
    		$carmodel->save();
    		$msg = 'Car Model added successfully';
    	}
    	else
    	{
    		$carmodel = CarModel::findorfail($req->id);
            $carmodel->name = $req->name;
            $carmodel->save();
    		$msg = 'Car Model updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function delete($id)
    {
        CarModel::findOrFail($id)->delete();
        return redirect()->back()->with('success','Car Model successfully deleted');
    }
}
