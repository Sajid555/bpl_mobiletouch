<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class FilterController extends Controller
{
    public function getFilters(Request $request){

		$orders = Product::where(function($sql) use($request)
		{
			if (isset($request['Primary']) && !empty($request['Primary'])) {
                        $sql->where('Primary', '=', $request['Primary']);
                    }
		});
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
			$response[$key]['Primary'] = $order->Primary;
			$response[$key]['cat_id'] = $order->cat_id;
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
