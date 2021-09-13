<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function __construct()
    {
        $this->middleware('auth.admin');
    }
    function home(){
        
        $users = Admin::home();
        return view('admin.home',['users'=>$users]);
    }
    function thietbi(){
        
        $thietbi = Admin::thietbi();
        return view('admin.thietbi',['thietbi'=>$thietbi]);
    }
    function linhkien(){
        
        $linhkien = Admin::linhkien();
        return view('admin.kho',['linhkien'=>$linhkien]);
    }
    function sua($id){
        $sua = Admin::get($id)[0];
        return view('admin.sua',['sua'=>$sua]);
    }
    // function sua(){
      
    //     return view('admin.sua');
    // }
    function suatk(Request $rq, $id){
      
        $name = $rq->input('name');
        $email=$rq->input('email');
        // $password=$rq->input('password');
        $is_active=$rq->input('is_active');
        $rs = Admin::suatk($id,$name,$email,$is_active);
        if($rs== true){
            return redirect()->route(route:'admin.home')->with('success','Sửa thành công');
        }else{
            return redirect()->route(route:'admin.home')->with('error','Không có gì được thay đổi');
        }
    
    }
  

    
   
   
}
