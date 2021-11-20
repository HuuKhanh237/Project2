<?php

namespace App\Http\Controllers;

use App\Models\Baocao;
use App\Models\Baocaoct;
use App\Models\ThietbiModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class BaocaoLabController extends Controller
{
    function __construct()
    {
        $this->middleware('auth.user');
    }

    public function showbc(Request $request, $id)
    {



        $baocao = ThietbiModel::find($id);

        // Cart::add(['id' =>$id , 'name' => $baocao-> name,
        //  'qty' => 1, 
        //  'tinhtrang2'=>$baocao-> tinhtrang2,
        //   'id_lab'=>$baocao-> id_lab, 'options' => ['image' =>$baocao->  image]]);
        Cart::add([
            'id' => $id,
            'name' => $baocao->name,
            'qty' => 1,
            'price' => 0,
            'weight' => 1,
            'options' => ['image' => $baocao->image, 'tinhtrang2' => $baocao->tinhtrang2, 'id_lab' => $baocao->id_lab,'baocao'=>1],
        ]);
        return back()->with('success', 'Báo cáo thành công');
        // $data = Cart::content();
        // dd($data);
    }
    public function showlistbc()
    {
        // $dulieu = ThietbiModel::thietbibc();
        $users = User::userss();
        return view('technicians.baocao.show',['users'=>$users]);
    }
    public function xoa($rowId)
    {
        if ($rowId == 'all') {
            Cart::destroy();
        } else {
            Cart::remove($rowId);
        }
        return back();
    }
    public function baocao()
    {
        return view('technicians.baocao.baocao');
    }

    public function luubaocao(Request $request){
       
        $baocaoId = Baocao::insertGetId([
            'ngaygio'=>Carbon::now(),
             'noidung'=>$request->noidung,
             'trangthai'=>'0',
            //  'id_lab'=>'1',
             'id_users'=>session('userId'),
             
        ]);
        
        if($baocaoId){
            $baocao= \Cart::content();
            foreach($baocao as $item){
                Baocaoct::insert([
                    'id_baocaolab'=>$baocaoId,
                    'id_thietbi'=>$item->id,
                    'soluong'=>$item->qty,
                    

                ]);
            }
        }
        \Cart::destroy();
        return redirect('/home');
    }
    public function users($id)
    {

        $users = User::users($id);
        return view('technicians.baocao.baocao', ['users' => $users]);
    }
    
}
