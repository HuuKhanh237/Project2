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
  

    
   
   
}
