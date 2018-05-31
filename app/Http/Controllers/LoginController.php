<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\User;
use auth;
use Redirect;
class LoginController extends Controller
{
    
    public function login(Request $request)
    {
    	
    	if(auth::attempt([

    		'email' =>$request->email,
    		'password' => $request ->password,

    	]))
    	{ 
    		$user =User::where('email', $request->email)->first();
    		if($user ->is_admin())
    		{
    			//session()->set('userType', '1');
    			//Session::set('userType','1');
    			$request->session()->put('userType','1');
    			return redirect()->route('dashboard');
    		}
    		else
    		{

    			$request->session()->put('userType','0');
    			//session()->set('userType', '0');
    			//Session::set('userType','0');
    			return redirect()->route('home');
    		}
    		dd('aa');
    		return redirect()->back();
    	}
    }
}
