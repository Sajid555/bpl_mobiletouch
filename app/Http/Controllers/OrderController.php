<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
use Redirect;
class OrderController extends Controller
{
	public function getUserOrders(){

		$orders = Order::all();
		if(!empty($orders)){
			$data = self::prepareOrderData($orders);
			return self::jsonSuccessResponse($data, 'Order foumd successfully');
		}
		return self::jsonErrorResponse('Order not found');
	}

	public function prepareOrderData($orders){
		
		$response = [];
		foreach ($orders as $key => $order) {
			$response[$key]['id'] = $order->id;
			$response[$key]['total_amount'] = $order->total_amount;
			$response[$key]['user_id'] = $order->user_id;
		}
		return $response;	

	}
	public static function jsonSuccessResponse($data , $message){
		$response = [];
		$response['success'] = true;
		$response['data'] = $data;
		$response['message'] = $message;
		 return response()->json($response);
	}
	public static function jsonErrorResponse( $message){
		$response = [];
		$response['success'] = false;
		$response['message'] = $message;
		 return response()->json($response);
	}
	public static function jsonSuccessResponseWithoutData( $message){
		$response = [];
		$response['success'] = true;
		$response['message'] = $message;
		 return response()->json($response);
	}

}