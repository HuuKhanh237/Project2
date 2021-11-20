<?php

namespace App\Http\Controllers;

use App\Models\ThietbiModel;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
        $imageName = time().'.'.$request->file('image')->extension();
        $path = 'storage/'. $imageName;
        $request->file('image')->storeAs('public',$imageName);
        $id_lab = $request->input('id_lab');
        $rs = ThietbiModel::themtb($name, $mota,$id_lab,$path);
        if ($rs == false) {
            return "Thêm Thất Bại";
        } else {
            return redirect()->route(route: 'themtb')->with('success', 'Thêm thành công');
        }
    }
    function suathietbi($id)
    {
        
        $dulieu = ThietbiModel::thietbi($id);
        return view('technicians.phonglab.sua', ['dulieuthietbi' => $dulieu]);
        // print_r($dulieu);

    }
    function suatb(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $tinhtrang1 = $request->input('tinhtrang1');
        $tinhtrang2 = $request->input('tinhtrang2');
        $mota = $request->input('mota');
        $id_lab = $request->input('id_lab');
        // $path="";
        // if(!empty($request->file('image'))){
        //     $image = time().'.'.$request->file('image')->extension();
        //     $request->file('image')->storeAs('public/thietbi',$image);
        //     $path = 'storage/thietbi'. $image;
        // }
        // $path = '';
        // if($request->hasFile('image')){
        //     $image = $request->file('image');
        //     $path = time().'.'.$image->getClientOriginalName();
        //     $destinationPath = public_path('public');
        //     $image->move($destinationPath, $path);
        // }
        $path="";
        if(file_exists($request->file('img'))){
            $imageName = time().'.'.$request->file('img')->extension();
            $path = 'storage/'. $imageName;
            $request->file('img')->storeAs('public',$imageName);
        }
        //Store Image
    
        $rs = ThietbiModel::suatb($id, $name, $tinhtrang1, $tinhtrang2, $mota, $id_lab,$path);
        if ($id_lab == 1) {
            return redirect()->route(route: 'P201')->with('success', 'Sửa thành công');
        } else 
        if ($rs == false && $id_lab == 1) {
            return redirect()->route(route: 'P201')->with('error', 'Không có thông tin nào đc thay đổi');
        }
        if ($id_lab == 2) {
            return redirect()->route(route: 'P202')->with('success', 'Sửa thành công');
        } else 
        if ($rs == false && $id_lab == 2) {
            return redirect()->route(route: 'P202')->with('error', 'Không có thông tin nào đc thay đổi');
        }
        if ($id_lab == 3) {
            return redirect()->route(route: 'P203')->with('success', 'Sửa thành công');
        } else
         if ($rs == false && $id_lab == 3) {
            return redirect()->route(route: 'P203')->with('error', 'Không có thông tin nào đc thay đổi');
        }
        if ($id_lab == 4) {
            return redirect()->route(route: 'P204')->with('success', 'Sửa thành công');
        } else if ($rs == false && $id_lab == 4) {
            return redirect()->route(route: 'P204')->with('error', 'Không có thông tin nào đc thay đổi');
        }
        if ($id_lab == 5) {
            return redirect()->route(route: 'P205')->with('success', 'Sửa thành công');
        } else
         if ($rs == false && $id_lab == 5) {
            return redirect()->route(route: 'P205')->with('error', 'Không có thông tin nào đc thay đổi');
        }
    }

    // function deletethietbi($id){
    //     $rs = ThietbiModel::deletethietbi($id);
    //     if($rs != 0) return redirect()->route(route: 'P201');
        

    // }
    // function suatb(Request $request,$id){
    //     $data = array();
        
    //     $data['name']= $request->name;
    //     $data['tinhtrang1']=$request->tinhtrang1;
    //     $data['tinhtrang2']=$request->tinhtrang2;
    //     $data['mota']=$request->mota;
    //     $data['id_lab'] = $request->id_lab;
    //     $getimage= $request->file('image');
    //     if($getimage){
    //         $getimages= $getimage->getClientOriginalName();
    //         $nameimg= current(explode('.',$getimages));
    //         $new= $nameimg.rand(0,99).'.'. $getimage->getClientOriginalExtension();
    //         $getimage->move('public',$new);
    //         $data['image']=$new;
    //         DB::table('thietbi')->where('id',$id)->update($data);
           
    //         return Redirect::to('suathietbi');
    //     }
    //     DB::table('thietbi')->where('id',$id)->update($data);
        
    //         return Redirect::to('P201');
    // }
}
