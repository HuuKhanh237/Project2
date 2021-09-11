<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\DkyController;
use App\Http\Controllers\technicians\LoginController;
use App\Http\Controllers\technicians\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[LoginController::class,'showlogin'])->name('login');
Route::post('/',[LoginController::class,'login']);
Route::get('/home',[UserController::class,'home'])->name('home');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/thietbi',[UserController::class,'thietbi'])->name('thietbi');
Route::get('/themtb',[UserController::class,'showtb'])->name('themtb');
Route::post('/themtb',[UserController::class,'themtb']);
Route::get('/themlk',[UserController::class,'showlk'])->name('themlk');
Route::post('/themtlk',[UserController::class,'themlk']);



Route::get('/admin/login',[AdminLoginController::class,'showlogin'])->name('admin.login');
Route::post('/admin/login',[AdminLoginController::class,'login']);
Route::get('admin',[AdminController::class,'home'])->name('admin.home');
Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');
Route::get('/admin/register',[DkyController::class,'showregister'])->name('register');
Route::post('/admin/register',[DkyController::class,'register']);
Route::get('admin/thietbi',[AdminController::class,'thietbi'])->name('admin.thietbi');
Route::get('admin/linhkien',[AdminController::class,'linhkien'])->name('admin.linkkien');


