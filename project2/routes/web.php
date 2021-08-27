<?php

use Illuminate\Support\Facades\Route;



Route::get('admin/login',function(){
    return view('admin.login');
});
Route::get('technicians/login', function(){
    return view('technicians.login');
    
});
Route::get('admin/home',function(){
    return view('admin.home');
});