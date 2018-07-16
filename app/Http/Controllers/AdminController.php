<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\model;
use Illuminate\Support\Facades\Input;
use Redirect;
class AdminController extends Controller
{
    public function table()

    {
    	 $data=Product::get();

    	return view('viewtable',compact('data'));
    }
 	public function delete($id)
    {
        Product::where('id', '=', $id)->delete();
        return Redirect::back();
    }
     public function update($id)
    {
         $data=Product::where('id', '=', $id)->first();
        return view('edit', compact('data'));
        
        
    }
    public function saveUpatedData(){
     
      $input = Input::except('_token');
      
      Product::where('id','=',$input['id'])->update($input);
      return Redirect::to('/viewtable');

    }
   
}
