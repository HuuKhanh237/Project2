<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Baocaoctk extends Model
{
    protected $table = 'baocaoctkho';
    static function bcctkho($id) {
        // $sql = "SELECT * FROM baocaoctlab";
        // $result=DB::select($sql);
        // return $result;
        return DB::table('baocaoctkho')
        ->join('baocaokho','baocaoctkho.id_baocaokho','=','baocaokho.id')
        ->join('linhkien','baocaoctkho.id_linhkien','=','linhkien.id')
         // where cái j = $id đi
        ->select('baocaoctkho.*','baocaokho.*','linhkien.*')
        ->where('baocaokho.id',$id)
        ->get();
    }
}
