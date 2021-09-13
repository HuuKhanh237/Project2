<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\DkyController;
use App\Http\Controllers\KhoController;
use App\Http\Controllers\technicians\LoginController;
use App\Http\Controllers\technicians\UserController;
use App\Http\Controllers\ThietbiController;
use Illuminate\Support\Facades\Route;


Route::get('/',[LoginController::class,'showlogin'])->name('login');
Route::post('/',[LoginController::class,'login']);
Route::get('/home',[UserController::class,'home'])->name('home');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
//phonglab
Route::get('/P201',[ThietbiController::class,'P201'])->name('P201');
Route::get('/P202',[ThietbiController::class,'P202'])->name('P202');
Route::get('/P203',[ThietbiController::class,'P203'])->name('P203');
Route::get('/P204',[ThietbiController::class,'P204'])->name('P204');
Route::get('/P205',[ThietbiController::class,'P205'])->name('P205');
Route::get('/themtb',[ThietbiController::class,'showtb'])->name('themtb');
Route::post('/themtb',[ThietbiController::class,'themtb']);
Route::get('/lab',[UserController::class,'showidlab'])->name('idlab');
Route::post('/lab',[UserController::class,'idlab']);
Route::get('/suatb/{id}',[ThietbiController::class,'suathietbi'])->name('suathietbi');
Route::post('/suatb',[ThietbiController::class,'update']);


//Kho
Route::get('/Khot3',[KhoController::class,'Khot3'])->name('Khot3');
Route::get('/Khot5',[KhoController::class,'Khot5'])->name('Khot5');
Route::get('/themlk',[KhoController::class,'showlk'])->name('themlk');
Route::post('/themlk',[KhoController::class,'themlk']);
Route::get('/kho',[KhoController::class,'showidkho'])->name('idkho');
Route::post('/kho',[KhoController::class,'idkho']);




Route::get('/admin/login',[AdminLoginController::class,'showlogin'])->name('admin.login');
Route::post('/admin/login',[AdminLoginController::class,'login']);
Route::get('admin',[AdminController::class,'home'])->name('admin.home');
Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');
Route::get('/admin/register',[DkyController::class,'showregister'])->name('register');
Route::post('/admin/register',[DkyController::class,'register']);
Route::get('admin/thietbi',[AdminController::class,'thietbi'])->name('admin.thietbi');
Route::get('admin/linhkien',[AdminController::class,'linhkien'])->name('admin.linkkien');
Route::get('/admin/sua/{id}',[AdminController::class,'sua'])->name('admin.sua');
Route::post('/admin/sua/{id}',[AdminController::class,'suatk']);


