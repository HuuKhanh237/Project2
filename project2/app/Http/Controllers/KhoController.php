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
        $id_kho = $request->input('id_kho');
        $rs = KhoModel::themlk($name,$mota,$soluong,$id_kho);
        if ($rs == false) {
            return "Thêm Thất Bại";
        } else {
            return redirect()->route(route:'themlk')->with('success','Thêm thành công');
        }
    }
}
