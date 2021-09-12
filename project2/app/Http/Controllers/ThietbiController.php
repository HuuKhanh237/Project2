<?php

namespace App\Http\Controllers;

use App\Models\ThietbiModel;
use App\Models\User;
use Illuminate\Http\Request;

class ThietbiController extends Controller
{
    function __construct()
    {
        $this->middleware('auth.user');
    }
    function P201()
    {
        $P201 = User::P201();
        return view('technicians.phonglab.p201', ['P201' => $P201]);
    }
    function P202()
    {
        $P202 = User::P202();
        return view('technicians.phonglab.p202', ['P202' => $P202]);
    }
    function P203()
    {
        $P203 = User::P203();
        return view('technicians.phonglab.p203', ['P203' => $P203]);
    }
    function P204()
    {
        $P204 = User::P204();
        return view('technicians.phonglab.p204', ['P204' => $P204]);
    }
    function P205()
    {
        $P205 = User::P205();
        return view('technicians.phonglab.p205', ['P205' => $P205]);
    }
    function showtb()
    {
        $data['lab'] = User::idlab();
        return view('technicians.phonglab.them', $data);
    }
    function themtb(Request $request)
    {
        $name = $request->input('name');
        // $tinhtrang1=$request->input('tinhtrang1');
        // $tinhtrang2=$request->input('tinhtrang2');
        $mota = $request->input('mota');
        $id_lab = $request->input('id_lab');
        $rs = ThietbiModel::themtb($name,$mota,$id_lab);
        if ($rs == false) {
            return "Thêm Thất Bại";
        } else {
            return redirect()->route(route:'themtb')->with('success','Thêm thành công');
        }
    }
   
}
