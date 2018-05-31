<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\model;
use Illuminate\Support\Facades\Input;
use Redirect;
class AdminController extends Controller
{
    public function table()

    {
    	 $data=product::get();

    	return view('viewtable',compact('data'));
    }
 	public function delete($id)
    {
        product::where('id', '=', $id)->delete();
        return Redirect::back();
    }
     public function update($id)
    {
         $data=product::where('id', '=', $id)->first();
        return view('edit', compact('data'));
        
        
    }
    public function saveUpatedData(){
     
      $input = Input::except('_token');
      
      product::where('id','=',$input['id'])->update($input);
      return Redirect::to('/viewtable');

    }
   
}
