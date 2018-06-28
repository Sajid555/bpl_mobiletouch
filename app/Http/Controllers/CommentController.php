<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\comment;
use Illuminate\Support\Facades\Input;

class CommentController extends Controller
{
    public function saveComment(){
    	
    	$input=Input::except('_token');
    	comment::create($input);
    	return redirect()->route('showComment');
    	// dd($input);
    }
    public function showComment(){

    	$data=comment::all();
    	return view('ans',compact('data'));
    	// dd($input);
    }
}
