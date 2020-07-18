<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
   $userID = \Auth::user()->id;
   $email = \Auth::user()->email;
   $cEnrolled= \DB::table('enrolled')->where('email', '=', ''.$email.'')->paginate(3);
   return view('/user/dashboard')->with('userID', $userID)->with('email', $email)->with('cEnrolled', $cEnrolled);
    }
}
