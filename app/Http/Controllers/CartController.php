<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use Session;
use Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Order;
use App\Order_Address;
use App\Order_Product;

class CartController extends Controller {

    public function addToCart($id) {
        Session::start();
        if (Session::has('Products')) {
            $products = Session::get('Products');
            foreach ($products as $key => $in_product) {
                if ($in_product == $id) {
                    return Redirect::back()->with('error_message', 'Product already in the cart!');
                }
            }
            array_push($products, $id);
            Session::put('Products', $products);
        } else {
            $products = [];
            array_push($products, $id);
            Session::put('Products', $products);
        }
        Session::save();
        $this->updateCartTotal();
        $this->updateCartCount();
        return Redirect::back()->with('success_message', 'Product added to cart!');
    }

    public function updateCartTotal() {
        Session::start();
        $cartTotal = 0;
        if (Session::has('Products')) {
            $products = Session::get('Products');
            $products_data = Product::whereIn('id', $products)->get();
            foreach ($products_data as $item) {

                $cartTotal = $cartTotal + ($item->price);
            }
        }
        Session::put('Total', $cartTotal);
        Session::save();
        return Session::get('Total');
    }

    public function updateCartCount() {
        Session::start();
        $cartCount = 0;
        if (Session::has('Products')) {
            $poducts = Session::get('Products');
            $cartCount = count($poducts);
        }
        Session::put('Count', $cartCount);
        Session::save();
        return Session::get('Count');
    }

    public function getCart() {

        $cart_existance = Session::get('Products');
        if($cart_existance != null){
                $data = array(
                'success' => true,
                'Products' => Product::whereIn('id', Session::get('Products'))->get(),
                'Total' => Session::get('Total'),
                'Count' => Session::get('Count'),
            );
        }else{
            $data = [];
        }
        return view('cart', compact('data'));
    }

    public function clearCart() {
        Session::start();
        Session::forget('Products');
        Session::forget('Total');
        Session::forget('Count');
        Session::save();
        return Redirect::to('/')->with('success_message', 'Cart cleared successfully');
    }

    public function checkout() {
        return view('checkout');
    }

    public function checkoutProcess() {
        $rules = [
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ];
        $card_rules = [
            'card_no' => 'required',
            'cvv' => 'required',
            'email' => 'required',
            'month' => 'required',
            'year' => 'required',
        ];
        $request_params = Input::all();
//        $validator = Validator::make($request_params['billing'], $rules);
//        if ($validator->fails()) {
//            return Redirect::back()->with('error_message', $validator->errors()->first());
//        }
//        $validator = Validator::make($request_params['shipping'], $rules);
//        if ($validator->fails()) {
//            return Redirect::back()->with('error_message', $validator->errors()->first());
//        }
//        $validator = Validator::make($request_params['card'], $card_rules);
//        if ($validator->fails()) {
//            return Redirect::back()->with('error_message', $validator->errors()->first());
//        }
        $order_data = [];
        $order_products = [];
        $order_data['total_amount'] = Session::get('Total');
        $order_data['transaction_id'] = $request_params['stripeToken'];
        $order_data['user_id'] = Auth::user()->id;
        $save_order = Order::create($order_data);
        if ($save_order) {
            $poducts = Session::get('Products');
            foreach ($poducts as $key => $product) {
                $order_products['order_id'] = $save_order->id;
                $order_products['product_id'] = $product;
                Order_Product::create($order_products);
            }
            $request_params['shipping']['order_id'] = $save_order->id;
            $request_params['shipping']['address_type'] = 'shippig';
            $request_params['billing']['order_id'] = $save_order->id;
            $request_params['billing']['address_type'] = 'billing';
            $save_shiping = Order_Address::insert($request_params['shipping']);
            $save_billing = Order_Address::insert($request_params['billing']);
            if ($save_shiping && $save_billing) {
                Session::start();
                Session::forget('Products');
                Session::forget('Total');
                Session::forget('Count');
                Session::save();
                return Redirect::to('/')->with('success_message', 'Order placed successfully');
            }
        }
    }

}
