<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Make;
use App\Models\CarModel;
use App\Models\ExteriorColor;
use App\Models\InteriorColor;
use App\Models\Engine;
use App\Models\Fuel;
use App\Models\Location;
use App\Models\Body;
use App\Models\Product;
use App\Models\ProductImage;

class HomeController extends Controller
{

	public function index()
	{
    	$brand = Brand::all();
    	$make = Make::all();
		return view('front.index',get_defined_vars());
	}
    public function inventory()
    {
        $list = Product::all();
        $locations = Location::all();
        $bodys = Body::all();
        $fuels = Fuel::all();
    	$makes = Make::all();
    	$models = CarModel::all();
    	$engines = Engine::all();
    	$exteriors = ExteriorColor::all();
    	$interiors = InteriorColor::all();
        return view('front.inventory',get_defined_vars());
    }
    public function detail($id)
    {
        $item = Product::find($id);
    	$make = Make::all();
        return view('front.detail',get_defined_vars());
    }
    public function about()
    {
    	$make = Make::all();
        return view('front.about',get_defined_vars());
    }
    public function warranty()
    {
    	$make = Make::all();
        return view('front.warranty',get_defined_vars());
    }
    public function finance()
    {
        $make = Make::all();
        return view('front.finance',get_defined_vars());
    }
    public function service()
    {
        $make = Make::all();
        return view('front.service',get_defined_vars());
    }

}
