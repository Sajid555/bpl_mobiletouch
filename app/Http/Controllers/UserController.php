<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Redirect;
use App\User;
use Auth;
use Hash;
use Session;
use DB;
class UserController extends Controller
{
     public static function processSignup() {
        $inputs = Input::except('_token');
        $validate = Validator::make($inputs, User::$signup_rules);
        if ($validate->fails()) {
            return Redirect::back()->with('error_message', $validate->errors()->first());
        }
        $inputs['password']=Hash::make($inputs['password']);
        $response= User::create($inputs);
        if($response){
            return Redirect()->to('adminlogin')->with('success_message', 'You have successfully signup');
           }
           
        }


      public static function processLogin(Request $request) {
        $inputs = Input::except('_token');
        $validate = Validator::make($inputs, User::$login_rules);
        if ($validate->fails()) {
            return Redirect::back()->withInput(Input::except('password'))->with('error_message', $validate->errors()->first());
        }
        $credemtial = [
            'email' => $inputs['email'],
            'password' => $inputs['password'],
        ];
        if (Auth::attempt($credemtial)) { 
            $user =User::where('email', $request->email)->first();
            if($user ->is_admin())
            {
                $request->session()->put('userType','1');
                return redirect()->route('dashboard');
            }
            else
            {

                $request->session()->put('userType','0');
               
                return redirect()->route('show');
            }
            
        }
            
        

        return Redirect::back()->withInput(Input::except('password'))->with('error_message', 'Invalid login detail');
    }
     public function SignOut() {
        session::flush();
        auth::attempt();
        
        return Redirect()->to('adminlogin')->with('success_message', 'You have successfully SignOut');
    }
     public function changePassword(){
        $data=User::get();
        
        
        return view('adminPanel.changePassword',compact('data'));

    }
    public function updatePassword(){
         $data=User::find(Auth::user()->id);
         if(Auth::check(Input::get('passwordold'),$data['password']) && Input::get('password')==Input::get('confirm_password')){
            $data->password=bcrypt(Input::get('password'));
            $data->save();
            return back()->with('success_message','Password changed');
         }
 else 
    {
        return back()->with('error_message','Password not changed');
    }
        
    }
   
       
}
