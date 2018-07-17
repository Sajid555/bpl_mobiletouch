<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class MainController extends Controller {

    public function showProductsWithCategory($id) {
        $Product = Product::where('cat_id', $id)->get();
        return view('adminPanel.product', compact('Product'));
    }

    public function showSelectedProductsWithCategory($id) {
        $Product = Product::where('cat_id', $id)->get();
        return view('Mainpage', compact('Product'));
    }

 public function frontpage() {
    return view("FrontPage");
    }


           public function search(Request $request) {
    
             $search=$request->search;
             $data=Product::where("cat_id","%Like%",$search)->get();
               return view("Mainpage",compact("data"));     

    }



    public function imageStore(Request $request) {
        $product = new photo();
        $file = Input::file("image");
        if (!empty($file)) {
            $newFilename = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $upload = $file->move($destinationPath, $newFilename);
            if ($upload)
                $product->image = $newFilename;
        }
        $file = Input::file("image1");
        if (!empty($file)) {
            $newFilename = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $upload = $file->move($destinationPath, $newFilename);
            if ($upload)
                $product->image1 = $newFilename;
        }
        $file = Input::file("image2");
        if (!empty($file)) {
            $newFilename = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $upload = $file->move($destinationPath, $newFilename);
            if ($upload)
                $product->image2 = $newFilename;
        }
        $file = Input::file("image3");
        if (!empty($file)) {
            $newFilename = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $upload = $file->move($destinationPath, $newFilename);
            if ($upload)
                $product->image3 = $newFilename;
        }
        $file = Input::file("image4");
        if (!empty($file)) {
            $newFilename = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $upload = $file->move($destinationPath, $newFilename);
            if ($upload)
                $product->image4 = $newFilename;
        }
        $product->img_name = $request->input('img_name');
        $product->save();
        return view('adminPanel.addProduct');
    }

    public function filter(Request $request) {
        $inputs = $request->except('_token');
        $prodct  = \App\Product::filter($inputs);
        
        return view('Mainpage', compact('prodct'));

    }
    public function showproducts()
    {
      $Product=\App\Product::all();
       return view("Mainpage",compact("Product"));

    }
    public function getFilterProduct(Request $request) {

        $inputs = $request->except('_token');
        $Product = \App\Product::filter($inputs);          
        return response()->json($Product);

           }



    public function addcategory(Request $request) {

        $this->validate($request, [
            'cat_name' => 'required|min:3',
            'image' => 'required|   mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
 $Category = new Category();
        $file = Input::file("image");
        if (!empty($file)) {
            $newFilename = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $upload = $file->move($destinationPath, $newFilename);
            if ($upload)
                $Category->image = $newFilename;
        }
       
        $Category->cat_name =  $request->input("cat_name");
        $Category->image =$request->input('image');

        $Category->save();
        return view('adminPanel.addBrand');
    }  

    public function details($id) {
        $data = \App\Product::where('id', '=', $id)->first();
        return view('details', compact('data'));
    }

    public function addbrand(Request $request) {
        $Brand = new Brand();
        $Brand->brand_name = $request->input('brand_name');
        $Brand->cat_id = $request->input('cat_id');
        $Brand->save();
        return view('adminPanel.addModel');
    }

    public function show() {

        $prodct = Product::orderBy('created_at', 'desc')->paginate(18);
        return view('Mainpage')->with('prodct', $prodct);
    }

    public function ans() {


        return view('ans');
    }

    public function popular() {
        $data = \App\Product::where('id', '=', 5)->first();
        return view('Mainpage', compact('popular'));
    }

    public function index() {
        $id = $_GET['id'];
        $brand = Brand::where('cat_id', $id)->get();
        return $brand;
    }

    public function insert() {
        return view('insert');
    }

    public function addproduct() {
        $inputs = Input::except('_token');
        $file = Input::file("image");
        if (!empty($file)) {
            $newFilename = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images';
            $upload = $file->move($destinationPath, $newFilename);
            if ($upload)
                $inputs['image'] = $newFilename;
        }
        $save_data = Product::create($inputs);
        if ($save_data) {
            return view('adminPanel.addProduct');
        }
    }

    public function GetAllProducts(Request $request) {
        $product = \App\Product::all();
        return response()->json($product);
    }

    public function GetAllCategory(Request $request) {
        $Category = \App\Category::all();
        return response()->json($Category);
    }

    public function GetAllBrands(Request $request) {
        $Brand = \App\Brand::all();
        return response()->json($Brand);
    }

    Public function GetProductsByPrice($min, $max) {
        $product = new Product();
        $prodct = Product::where('price', '>=', $min)->where('price', '<=', $max)->get();


        return response()->json($prodct);
    }

    Public function GetProductsByPriceAndCategoryFilter($min, $max, $id) {
        $prodct = new Product();
        $prodct = Product::where('cat_id', '=', $id)->where('price', '>=', $min)->where('price', '<=', $max)->get();
        return response()->json($prodct);
    }

    public function GetSubCategoryMobNames($id) {
        $Brand = \App\Brand::where('cat_id', $id)->get();
        return response()->json($Brand);
    }

    public function GetProductsByCategory($id) {
        $prodct = Product::where('cat_id', $id)->get();
        return response()->json($prodct);
    }

    public function GetSpecificProduct($id) {
        $product = Product::where('id', $id)->get();
        return response()->json($product);
    }

    public function GetOrderAddress(Request $request) {
        $Order_Address = \App\Order_Address::all();
        return response()->json($Order_Address);
    }

    public function GetAllUser(Request $request) {
        $user = \App\User::all();
        return response()->json($user);
    }

    public function order() {


        $Order_Address = \App\Order_Address::all();


        return view('adminPanel.order', compact('Order_Address'));
    }
    public function displayAllBrands()
    {

        $category=category::all();
        return view ('HomePage',compact('category'));
    }


}
