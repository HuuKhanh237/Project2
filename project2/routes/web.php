<?php

use Illuminate\Support\Facades\Route;



Route::get('admin/login',function(){
    return view('admin.login');
});
Route::get('login', function(){
    return view('technicians.login');
    
});