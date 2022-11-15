<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function list()
    {
    	$list=Brand::all();
    	return view('admin.brand.list',get_defined_vars());
    }
    public function save(Request $req, $id=null )
    {
    	$req->validate([
    		'name' => 'required',
    	]);
    	// dd($req);
    	if(is_null($id))
    	{
    		$brand = new Brand();
    		$brand->name = $req->name;
    		$brand->image = uploadImage($req->image,'uploads/brand');
    		$brand->save();
    		$msg = 'Brand added successfully';
    	}
    	else
    	{
    		$brand = Brand::findorfail($id);
            $brand->name = $req->name;
    		$brand->image = uploadImage($req->image,'uploads/brand');
            $brand->save();
    		$msg = 'Brand updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function edit($id)
    {
        $list = Brand::findOrFail($id);
        return view('admin.brand.edit',get_defined_vars());
    }
}
