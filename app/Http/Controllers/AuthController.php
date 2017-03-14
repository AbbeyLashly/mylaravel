<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
      if(!Auth::check()){
        return view('auth.login');
      }
      return view('auth.main');
    }

    public function register(){
      return view('auth.register');
    }

    public function register_check(Request $request){

    }


}
