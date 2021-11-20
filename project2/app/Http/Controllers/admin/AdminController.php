<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Baocao;
use App\Models\Baocaoct;
use App\Models\Baocaoctk;
use App\Models\Baocaok;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function __construct()
    {
        $this->middleware('auth.admin');
    }
    function home(){
        
        $users = Admin::home();
        return view('admin.home',['users'=>$users]);
    }
    function thietbi(){
        
        $thietbi = Admin::thietbi();
        return view('admin.thietbi',['thietbi'=>$thietbi]);
    }
    function linhkien(){
        
        $linhkien = Admin::linhkien();
        return view('admin.kho',['linhkien'=>$linhkien]);
    }
    function sua($id){
        $sua = Admin::get($id)[0];
        return view('admin.sua',['sua'=>$sua]);
    }
    // function sua(){
      
    //     return view('admin.sua');
    // }
    function suatk(Request $rq, $id){
      
        $name = $rq->input('name');
        $email=$rq->input('email');
        // $password=$rq->input('password');
        $is_active=$rq->input('is_active');
        $rs = Admin::suatk($id,$name,$email,$is_active);
        if($rs== true){
            return redirect()->route(route:'admin.home')->with('success','Sửa thành công');
        }else{
            return redirect()->route(route:'admin.home')->with('error','Không có gì được thay đổi');
        }
    
    }
    function deletethietbi($id){
        $rs = Admin::deletethietbi($id);
        if($rs != 0) return redirect()->route(route: 'admin.thietbi');
        

    }
    function deletelinhkien($id){
        $rs = Admin::deletelinhkien($id);
        if($rs != 0) return redirect('users:id,name')->route(route: 'admin.linkkien');
        

    }
    public function index(){
        $data['iduser'] = Baocao::iduser();
        $baocao = Baocao::index();
        $viewData = [
            'baocao'=>$baocao
        ];
        return view('admin.baocaolab',$viewData,$data);

    }
    public function bcctlab($id){
        
        $order_by_id = Baocaoct::bcctlab($id);
    //    dd($order_by_id);
      return view('admin.baocaoctlab',['baocaoct'=>$order_by_id]);
    }
    public function duyetbc($id){
        DB::table('baocaolab')->where('id',$id)->update(['trangthai'=>1]);
        return redirect()->back();
    }
    public function indexk(){
      
        $baocao = Baocaok::get();
        $viewData = [
            'baocao'=>$baocao
        ];
        return view('admin.baocaokho',$viewData);

    }
    public function bcctkho($id){
        
        $order_by_id = Baocaoctk::bcctkho($id);
    //    dd($order_by_id);
      return view('admin.baocaoctkho',['baocaoct'=>$order_by_id]);
    }
    public function duyetbck($id){
        DB::table('baocaokho')->where('id',$id)->update(['trangthai'=>1]);
        return redirect()->back();
    }

    
   
    // public function bcctkho(){
        
    //     $baocaoct=Baocaoctk::bcctkho();
      
    //   return view('admin.baocaoctkho',['baocaoct'=>$baocaoct]);
    // }
  

  

    
   
   
}
