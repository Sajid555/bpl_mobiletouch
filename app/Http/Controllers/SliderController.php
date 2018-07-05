<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\slider;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
{
    public function sliderImages(Request $request){
    	$slider=new slider();
    	$file=Input::file('image1');
    	if(!empty($file)){
    		$newfilename=$file->getClientOriginalName();
    		$destinationPath=public_path().'/image1';
    		$upload=$file->move($destinationPath, $newfilename);
    		
    		if($upload){
    			$slider->image1= $newfilename;
    			}
    		
    	}
    	$file=Input::file('image2');
    	if(!empty($file))
    	{
    		$newfilename=$file->getClientOriginalName();
    		$destinationPath=public_path().'/image2';
    		$upload=$file->move($newfilename,$destinationPath);
    		if($upload)
    		{
    			$slider->image2=$newfilename;
    		}
    		
    	}
    	$file=Input::file('image3');
    	if(!empty($file))
    	{
    		$newfilename=$file->getClientOriginalName();
    		$destinationPath=public_path().'/image3';
    		$upload=$file->move($newfilename,$destinationPath);
    		if($upload)
    		{
    			$slider->image3=$newfilename;
    		}

    	}

		$slider->save();
		return back()->with('success','Image Upload successfully');

}
public function update ($id)
{
	{
      $article = slider::find($id);
      if(Input::hasFile('id'))
    {
    	dd('here');
     File::delete(public_path() . '/images', $article->file->name); // Delete old flyer
}
    
   
    $article->save();
    return "success";
}
}
}