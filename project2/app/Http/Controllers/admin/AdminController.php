<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function __construct()
    {
        $this->middleware('auth.admin');
    }
    function home(){
        
        $thietbi = Admin::home();
        return view('admin.home',['thietbi'=>$thietbi]);
    }
    
   
}
