<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Engine;

class EngineController extends Controller
{
    public function list()
    {
    	$list=Engine::all();
    	return view('admin.engine.list',get_defined_vars());
    }
    public function loadEng(Request $req)
    {
        if(is_null($req->id)){
            $html=view('admin.engine.render')->render();
        }
        else
        {
            $engine=Engine::find($req->id);
            $html=view('admin.engine.render',get_defined_vars())->render();  
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
    		$engine = new Engine();
    		$engine->name = $req->name;
    		$engine->save();
    		$msg = 'Egine added successfully';
    	}
    	else
    	{
    		$engine = Engine::findorfail($req->id);
            $engine->name = $req->name;
            $engine->save();
    		$msg = 'Engine updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function delete($id)
    {
        Engine::findOrFail($id)->delete();
        return redirect()->back()->with('success','Engine deleted successfully');
    }
}
