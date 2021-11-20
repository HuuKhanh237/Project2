<?php

namespace App\Http\Controllers;

use App\Models\Baocaoctk;
use App\Models\Baocaok;
use App\Models\KhoModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class BaocaoKhoController extends Controller
{
    function __construct()
    {
        $this->middleware('auth.user');
    }

    public function showk(Request $request, $id)
    {



        $baocao = KhoModel::find($id);

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
            'options' => ['image' => $baocao->image, 'tinhtrang1' => $baocao->tinhtrang1, 'id_kho' => $baocao->id_kho,'baocao'=>0],
        ]);
        return back();
        // $data = Cart::content();
        // dd($data);
    }
    public function showlistk()
    {
        $users = User::userss();
        return view('technicians.baocao.showk',['users'=>$users]);
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
        return view('technicians.baocao.baocaok');
    }

    public function luubaocao(Request $request){
       
        $baocaoId = Baocaok::insertGetId([
            'ngaygio'=>Carbon::now(),
             'noidung'=>$request->noidung,
             'trangthai'=>'0',
            //  'id_kho'=>'1',
             'id_users'=>session('userId'),
             
        ]);
        
        if($baocaoId){
            $baocao= \Cart::content();
            foreach($baocao as $item){
                Baocaoctk::insert([
                    'id_baocaokho'=>$baocaoId,
                    'id_linhkien'=>$item->id,
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
        return view('technicians.baocao.baocaok', ['users' => $users]);
    }
}
