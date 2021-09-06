<?php

namespace App\Http\Controllers\technicians;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function showlogin(){
        return view('technicians.login');
    }
    function login(Request $request){
           $email = $request -> input('email');
           $password = $request -> input('password');
           if(Auth::attempt(['email' => $email, 'password' => $password])){
               return redirect()->route('home');
           }
           else{
               return redirect()->back()->with('error','Thông tin đăng nhập không chính xác');
           }
    }
    function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
