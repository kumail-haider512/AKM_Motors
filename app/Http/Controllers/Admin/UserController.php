<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;

class UserController extends Controller
{
    public function list()
    {
        $list = User::all();
    	return view('admin.user.list', get_defined_vars());
    }
    public function add()
    {
    	return view('admin.user.add' , get_defined_vars());
    }
    public function save(Request $req)
    {
    	$req->validate([
    		'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required',
    	]);

		$user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->role = 'admin';
    	$user->password = Hash::make($req->password);
	    if(isset($req->image))
        {
            $req->validate([
                'image.*' => 'image|mimes:jpg,jpeg,png|max:5000',
            ]);
            $photo = uploadFile($req->image,'upload/user');
            $user->image=$photo;
        }
        $user->save();
    	$msg = "Admin created successfully";

    	return redirect()->route('admin.user.list')->with('success',$msg);
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $make = Make::all();
        $location = Location::all();
        $body = Body::all();
        $fuel = Fuel::all();
        $carmodel = CarModel::all();
        $engine = Engine::all();
        $exterior = ExteriorColor::all();
        $interior = InteriorColor::all();
        return view('admin.product.edit',get_defined_vars());
    }
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back()->with('success','Product deleted successfully');
    }
}