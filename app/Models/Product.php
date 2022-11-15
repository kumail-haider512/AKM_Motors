<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productImage()
    {
    	return $this->hasMany('App\Models\ProductImage');
    }
    public function make()
    {
        return $this->belongsTo('App\Models\Make');
    }
    public function carmodel()
    {
        return $this->belongsTo('App\Models\CarModel');
    }
    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }
    public function body()
    {
        return $this->belongsTo('App\Models\Body');
    }public function fuel()
    {
        return $this->belongsTo('App\Models\Fuel');
    }public function engine()
    {
        return $this->belongsTo('App\Models\Engine');
    }
    public function exteriorcolor()
    {
        return $this->belongsTo('App\Models\ExteriorColor');
    }
    public function interiorcolor()
    {
        return $this->belongsTo('App\Models\interiorColor');
    }
}
