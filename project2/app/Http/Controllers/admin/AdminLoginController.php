<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    function showlogin(){
        return view('admin.auth.login');
    }
    function login(Request $request){
      if(Auth::guard('admin')->attempt([
          'email'=>$request->input('email'),
          'password'=>$request->input('password')
      ])){
          return redirect()->route('admin.home');
      }
          else{
              return redirect()->back()->with('error','Truy cập không thành công');
          }
      
    }
    function logout(){
          Auth::guard('admin')->logout();
          return redirect()->route('admin.login');
    }
    
      
}
