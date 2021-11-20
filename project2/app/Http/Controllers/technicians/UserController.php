<?php

namespace App\Http\Controllers\technicians;

use App\Http\Controllers\Controller;
use App\Models\Baocao;
use App\Models\Baocaoct;
use App\Models\Baocaoctk;
use App\Models\Baocaok;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  function __construct()
  {
      $this->middleware('auth.user');
  }
  function home(){
    return view('technicians.home');
  }
  public function indexuser(){
    $data['iduser'] = Baocao::iduser();
    $baocao = Baocao::get();
    $viewData = [
        'baocao'=>$baocao
    ];
    return view('technicians.baocao.baocaolab',$viewData,$data);

}
public function bcctlabuser($id){
    
    $order_by_id = Baocaoct::bcctlab($id);
//    dd($order_by_id);
  return view('technicians.baocao.baocaoctlab',['baocaoct'=>$order_by_id]);
}

public function indexkuser(){
    $data['iduser'] = Baocaok::iduser();
    $baocao = Baocaok::get();
    $viewData = [
        'baocao'=>$baocao
    ];
    return view('technicians.baocao.baocaokho',$viewData,$data);

}
public function bcctkhouser($id){
    
    $order_by_id = Baocaoctk::bcctkho($id);
//    dd($order_by_id);
  return view('technicians.baocao.baocaoctkho',['baocaoct'=>$order_by_id]);
}


  
 
}
