<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;
use App\product;

class MobileController extends Controller
{
	public function index()
	{

    	$category=category::all();
        return view ('mobilelist')->with('category', $category);
    }


    public function product()
	{
    	return view ('addProduct');
    }

    public function addproduct(Request $request)
	{
		
		$product=new product();
		$product->product_name=$request->product_name;
		$product->price=$request->price;
		$product->details=$request->details;
		$product->cat_id=1;
		$product->brand_id=1;
		$product->model_id=1;
		
          $product->save();

    	return view ('addProduct'); 
    }


    public function productdetail()
	{
    	return view ('productDetails');
    }

}
// public function index() {

//     	$title = 'Welcome to Laravel!';
//     	return view('pages.index', compact('title'));         //1st way to pass a value
//     	return view('pages.index')->with('title', $title);      //2nd way to pass a value and multiple values
//     }
