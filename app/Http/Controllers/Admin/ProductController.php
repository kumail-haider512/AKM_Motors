<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Make;
use App\Models\CarModel;
use App\Models\ExteriorColor;
use App\Models\InteriorColor;
use App\Models\Engine;
use App\Models\Product;
use App\Models\Fuel;
use App\Models\Body;
use App\Models\Location;
use App\Models\ProductImage;

class ProductController extends Controller
{
    public function list()
    {
        $list = Product::all();
    	return view('admin.product.list', get_defined_vars());
    }
    public function add()
    {
        $make = Make::all();
        $location = Location::all();
        $body = Body::all();
        $fuel = Fuel::all();
        $carmodel = CarModel::all();
        $engine = Engine::all();
        $exterior = ExteriorColor::all();
        $interior = InteriorColor::all();
    	return view('admin.product.add' , get_defined_vars());
    }
    public function save(Request $req, $id=null)
    {
    	$req->validate([
    		'name' => 'required',
            'price' => 'required',
            'equipment' => 'required',
            'make_id' => 'required',
            'carmodel_id' => 'required',
            'engine_id' => 'required',
            'interiorcolor_id' => 'required',
            'exteriorcolor_id' => 'required',
    		'vin_number' => 'required',
    	]);
    	if(is_null($id))
    	{
    		$product = new Product();
            $product->name = $req->name;
            $product->price = $req->price;
	    	$product->equipment = $req->equipment;
            $product->make_id = $req->make_id;
            $product->carmodel_id = $req->carmodel_id;
            $product->engine_id = $req->engine_id;
            $product->location_id = $req->location_id;
            $product->fuel_id = $req->fuel_id;
            $product->vin_number = $req->vin_number;
            $product->transmission = $req->transmission;
            $product->mileage = $req->mileage;
	    	$product->interiorcolor_id = $req->interiorcolor_id;
            $product->exteriorcolor_id = $req->exteriorcolor_id;
	    	$product->save();

		    if(isset($req->photos))
	        {
	            $req->validate([
	                'photos.*' => 'image|mimes:jpg,jpeg,png|max:5000',
	            ]);

	            foreach($req->photos as $photo)
	            {
	                $photo = uploadFile($photo,'upload/products');
	                $product_image = new ProductImage();
	                $product_image->image = $photo;
	                $product_image->product_id = $product->id;
	                $product_image->save();
	            }
	        }

	    	$msg = "Product save successfully";
    	}
        
    	else
    	{
    		$product = Product::find($id);
	    	$product->name = $req->name;
            $product->price = $req->price;
            $product->equipment = $req->equipment;
            $product->make_id = $req->make_id;
            $product->carmodel_id = $req->carmodel_id;
            $product->engine_id = $req->engine_id;
            $product->location_id = $req->location_id;
            $product->fuel_id = $req->fuel_id;
            $product->vin_number = $req->vin_number;
            $product->transmission = $req->transmission;
            $product->mileage = $req->mileage;
            $product->interiorcolor_id = $req->interiorcolor_id;
            $product->exteriorcolor_id = $req->exteriorcolor_id;
            $product->save();
            // dd($req->photos,$req->productImageId);
            if(isset($req->photos))
            {

                $req->validate([
                    'photos.*' => 'image|mimes:jpg,jpeg,png|max:5000',
                ]);
                // ProductImage::where('product_id',$product->id)->delete();
                foreach($req->photos as $photo)
                {
                    $photo = uploadFile($photo,'upload/products');
                    $product_image = new ProductImage();
                    $product_image->image = $photo;
                    $product_image->product_id = $product->id;
                    $product_image->save();
                }
            }
            if($req->removeimage)
            {
                $myArray = explode(',', rtrim($req->removeimage, ','));
                foreach($myArray as $item)
                {
                    ProductImage::whereId($item)->delete();
                }
            }
	    	$msg = "Product update successfully";
    	}
    	return redirect()->route('admin.product.list')->with('success',$msg);
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
