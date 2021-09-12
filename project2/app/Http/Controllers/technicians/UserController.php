<?php

namespace App\Http\Controllers\technicians;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  function __construct()
  {
      $this->middleware('auth.user');
  }
  function home(){
    return view('technicians.home');
  }
  
 
}
