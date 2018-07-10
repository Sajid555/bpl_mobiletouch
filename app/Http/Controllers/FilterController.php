<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use App\Product;
class FilterController extends Controller
{
    public function getFilters(Request $request){
    	$inputs = Input::get();
    	$data = Product::where( function($sql) use($inputs){
    			if(isset($inputs['cat_id'])){
    				$sql->whereIn('cat_id', $inputs['cat_id']);
    			}
    	})->get();
<<<<<<< HEAD

    	
=======
    	// $data=Product::where(function($sql) use ($param)
>>>>>>> 0dc3cf5999eb44dd1364ef35837efbd8e5542490
    	// 	if (isset($param['cat_id']) && !empty($param['cat_id'])) {
     //            $sql->where('cat_id', $param['cat_id']);
     //            );
    	dd($data);
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