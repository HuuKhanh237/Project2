<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\BaocaoKhoController;
use App\Http\Controllers\BaocaoLabController;
use App\Http\Controllers\DkyController;
use App\Http\Controllers\KhoController;
use App\Http\Controllers\technicians\LoginController;
use App\Http\Controllers\technicians\UserController;
use App\Http\Controllers\ThietbiController;
use App\Models\User;
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
Route::post('/suatb',[ThietbiController::class,'suatb']);
// Route::get('/xoatb/{id}',[ThietbiController::class,'deletethietbi'])->name('xoathietbi');


//Kho
Route::get('/Khot3',[KhoController::class,'Khot3'])->name('Khot3');
Route::get('/Khot5',[KhoController::class,'Khot5'])->name('Khot5');
Route::get('/themlk',[KhoController::class,'showlk'])->name('themlk');
Route::post('/themlk',[KhoController::class,'themlk']);
Route::get('/kho',[KhoController::class,'showidkho'])->name('idkho');
Route::post('/kho',[KhoController::class,'idkho']);
// Route::get('/xoalk/{id}',[KhoController::class,'deletelinhkien'])->name('deletelinhkien');
Route::get('/sualk/{id}',[KhoController::class,'sualinhkien'])->name('sualinhkien');
Route::post('/sualk',[KhoController::class,'sualk']);
//baocao
Route::get('/baocaolab',[UserController::class,'indexuser'])->name('baocaolab');
Route::get('/baocaolab/ct/{id}',[UserController::class,'bcctlabuser'])->name('bcctlab');
Route::get('/baocaokho',[UserController::class,'indexkuser'])->name('baocaokho');
Route::get('/baocaokho/ctk/{id}',[UserController::class,'bcctkhouser'])->name('bcctkho');

//Baocao
Route::prefix('cart')->group(function () {
    Route::get('/addlab/{id}',[BaocaoLabController::class,'showbc'])->name('showbc');
    Route::get('/addlabbc',[BaocaoLabController::class,'showlistbc'])->name('showlistbc');
    Route::get('/xoa/{rowId}',[BaocaoLabController::class,'xoa'])->name('xoa'); 
    //kho 
});
Route::prefix('cart1')->group(function () {
    //kho
    Route::get('/addkho/{id}',[BaocaoKhoController::class,'showk'])->name('showk');
    Route::get('/addlabk',[BaocaoKhoController::class,'showlistk'])->name('showlistk');
    Route::get('/xoak/{rowId}',[BaocaoKhoController::class,'xoa'])->name('xoa'); 
    
});
Route::prefix('baocao')->group(function () {
    Route::get('/check',[BaocaoLabController::class,'baocao'])->name('baocao');
    Route::post('/check/{id}',[BaocaoLabController::class,'luubaocao']);
    Route::get('/check/{id}',[BaocaoLabController::class,'users'])->name('users');
    
});
Route::prefix('baocaok')->group(function () {
    Route::get('/check',[BaocaoKhoController::class,'baocaok'])->name('baocao');
    Route::post('/check/{id}',[BaocaoKhoController::class,'luubaocao']);
    Route::get('/check/{id}',[BaocaoKhoController::class,'users'])->name('users');
    
});
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
Route::get('/admin/xoatb/{id}',[AdminController::class,'deletethietbi'])->name('xoathietbi');
Route::get('/admin/xoalk/{id}',[AdminController::class,'deletelinhkien'])->name('xoalinhkien');
//baocao
Route::get('/admin/baocaolab',[AdminController::class,'index'])->name('admin.baocaolab');
Route::get('/admin/baocaolab/ct/{id}',[AdminController::class,'bcctlab'])->name('admin.bcctlab');
Route::get('/admin/baocaokho',[AdminController::class,'indexk'])->name('admin.baocaokho');
Route::get('/admin/baocaokho/ctk/{id}',[AdminController::class,'bcctkho'])->name('admin.bcctkho');
Route::get('/admin/baocaolab/duyet/{id}',[AdminController::class,'duyetbc'])->name('duyet');
Route::get('/admin/baocaokho/duyet/{id}',[AdminController::class,'duyetbck'])->name('duyetk');




