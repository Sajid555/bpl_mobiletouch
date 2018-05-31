<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */



Route::get('/slider', function () {
    return view('test');
});
Route::get('/AddCategory', function () {
    return view('AddCategory');
});
Route::get('/AddBrand', function () {
    return view('AddBrand');
});
Route::get('/AddModel', function () {
    return view('AddModel');
});
Route::get('/addproduct', function () {
    return view('AddProduct');
});
Route::get('/Main', function () {
    return view('layouts.Main');
});
Route::get('/check', function () {
    return view('check');
});

Route::get('/main/{id}', 'MainController@showProductsWithCategory');
Route::post('/AddCategory', 'MainController@addcategory');
Route::post('/AddBrand', 'MainController@addbrand');
Route::post('/addmodel', 'MainController@addmodel');
Route::get('/', 'MainController@show')->name('show');
Route::get('/addToCart/{id}', 'CartController@addToCart')->name('addToCart');
Route::get('/cart', 'CartController@getCart')->name('getCart');
Route::get('/cart/clear', 'CartController@clearCart')->name('clearCart');
Route::get('/cart/checkout', 'CartController@checkout')->name('checkout');
Route::post('/cart/checkoutProcess', 'CartController@checkoutProcess')->name('checkoutProcess');

Route::get('details/{id}', 'MainController@details')->name('details');
Route::get('ShopingCart', function() {
    return view('Shopping_Cart');
});
Route::get('/kash', function() {
    return view('master');
});
Route::get('/insert', function() {
    return view('insert');
});
Route::post('/imageStore', 'MainController@imageStore')->name('imageStore');
Route::get('/getSubCategory/', 'MainController@index');

Route::get('/getmodel/', 'MainController@model');

// Route::post('/addproduct', 'MainController@addproduct');
Route::post('/insert', 'MainController@File');
Route::post('/filter', 'MainController@filter');

// Route::filter('scan', function()
// {
//     if (Input::get('price') >= 2000)
//     {
//         return Redirect::to('Main');
//     }
// });
// Route::get('/show', 'MainController@search');

Route::get('/adminlogin', function () {
    return view('adminPanel.login');
});

Route::get('/adminSignup', function () {
    return view('adminPanel.signup');
});
Auth::routes();
Route::get('/viewtable', 'AdminController@table')->name('viewtable');
Route::get('delete/{id}', 'AdminController@delete')->name('delete');
Route::get('update/{id}', 'AdminController@update')->name('update');
Route::post('save', 'AdminController@saveUpatedData')->name('saveData');
Auth::routes();
Route::post('/login/custom', [
    'uses' => 'LoginController@login',
    'as' => 'login.custom'
]);
Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', function() {

        return view('home');
    })->name('home');
    Route::get('/dashboard', function(Request $request) {
        return view('adminPanel.dashboard');
    })->name('dashboard')->middleware('CheckPermissions');
    Route::get('/addproduct', function(Request $request) {
        return view('addProduct');
    })->name('dashboard')->middleware('CheckPermissions');
});
Route::get('/admindashboard', function () {
    return view('adminPanel.dashboard');
});
Route::get('products', function () {
    return view('adminPanel.product');
});
Route::get('/brands', function () {
    return view('adminPanel.brand');
});
Route::get('/addproducts', function () {
    return view('adminPanel.addProduct');
});
Route::post('/addproducts', 'MainController@addproduct');

Route::get('/addbrand', function () {
    return view('adminPanel.addBrand');
});
Route::post('/addbrand', 'MainController@addcategory');

Route::get('/addmodel', function () {
    return view('adminPanel.addModel');
});
Route::post('/addmodel', 'MainController@addbrand');
Route::get('/GetAllProducts', 'MainController@GetAllProducts');
Route::get('GetAllBrands', 'MainController@GetAllCategory');
Route::get('GetAllModels', 'MainController@GetAllBrands');
Route::get('GetSubCategoryMobNames/{id}', 'MainController@GetSubCategoryMobNames');
Route::get('GetProductsByBrand/{id}', 'MainController@GetProductsByCategory');
Route::get('GetProductsByPrice/{min}/{max}', 'MainController@GetProductsByPrice');
Route::get('GetProductsByPriceAndCategoryFilter/{min}/{max}/{id}', 'MainController@GetProductsByPriceAndCategoryFilter');
Route::get('GetSpecificProduct/{id}', 'MainController@GetSpecificProduct');
Route::get('/apis', 'MainController@apis');
Route::get('products/{id}', 'MainController@showProductsWithCategory')->name('products');
Route::get('/orders', function () {
    return view('adminPanel.order');
});
Route::post('processSignup', 'UserController@processSignup')->name('processSignup');
Route::post('processLogin', 'UserController@processLogin')->name('processLogin');

Route::get('/SignOut', 'UserController@SignOut')->name('SignOut')->name('SignOut');
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});


Route::get('GetOrderAddress','MainController@GetOrderAddress');

Route::get('GetAllUser','MainController@GetAllUser');
Route::get('/orders','MainController@order');