<?php

namespace App\Http\Controllers;

use App\Models\KhoModel;
use App\Models\User;
use Illuminate\Http\Request;

class KhoController extends Controller
{
    
    function __construct()
    {
        $this->middleware('auth.user');
    }
    function Khot3()
    {
        $Khot3 = User::Khot3();
        return view('technicians.kho.khot3', ['Khot3' => $Khot3]);
    }
    function Khot5()
    {
        $Khot5 = User::Khot5();
        return view('technicians.kho.khot5', ['Khot5' => $Khot5]);
    }
    function showlk()
    {
        $data['kho'] = KhoModel::idkho();
        return view('technicians.kho.them',$data);
    }
   
    function themlk(Request $request)
    {
        $name = $request->input('name');
        // $tinhtrang1=$request->input('tinhtrang1');
        // $tinhtrang2=$request->input('tinhtrang2');
        $mota = $request->input('mota');
        $soluong= $request->input('soluong');
        $imageName = time().'.'.$request->file('image')->extension();
        $path = 'storage/'. $imageName;
        $request->file('image')->storeAs('public',$imageName);
        $id_kho = $request->input('id_kho');
        $rs = KhoModel::themlk($name,$mota,$soluong,$path,$id_kho);
        if ($rs == false) {
            return "Thêm Thất Bại";
        } else {
            return redirect()->route(route:'themlk')->with('success','Thêm thành công');
        }
    }
    function deletelinhkien($id){
        $rs = KhoModel::deletelinhkien($id);
        if($rs != 0) return redirect()->route(route: 'Khot3');
        

    }
    function sualinhkien($id)
    {

        $dulieu = KhoModel::linhkien($id);
        return view('technicians.kho.sua', ['dulieuthietbi' => $dulieu]);
        // print_r($dulieu);

    }
    function update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $tinhtrang1 = $request->input('tinhtrang1');
        $mota = $request->input('mota');
        $soluong = $request->input('soluong');
        $path="";
        if(!empty($request->file('image'))){
            $imageName = time().'.'.$request->file('image')->extension();
            $path = 'storage/'. $imageName;
            $request->file('image')->storeAs('public',$imageName);
        }
        $id_kho = $request->input('id_kho');
        $rs = KhoModel::sualk($id, $name, $tinhtrang1, $mota,$soluong,$path, $id_kho);
        if ($id_kho == 1) {
            return redirect()->route(route: 'Khot3')->with('success', 'Sửa thành công');
        } else 
        if ($rs == false && $id_kho == 1) {
            return redirect()->route(route: 'Khot3')->with('error', 'Không có thông tin nào đc thay đổi');
        }
        if ($id_kho == 2) {
            return redirect()->route(route: 'Khot5')->with('success', 'Sửa thành công');
        } else 
        if ($rs == false && $id_kho == 2) {
            return redirect()->route(route: 'Khot5')->with('error', 'Không có thông tin nào đc thay đổi');
        }
        
    }
}
