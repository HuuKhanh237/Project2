<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Baocaoct extends Model
{
    protected $table = 'baocaoctlab';
    static function bcctlab($id) {
        // $sql = "SELECT * FROM baocaoctlab";
        // $result=DB::select($sql);
        // return $result;
        return DB::table('baocaoctlab')
        ->join('baocaolab','baocaoctlab.id_baocaolab','=','baocaolab.id')
        ->join('thietbi','baocaoctlab.id_thietbi','=','thietbi.id')
         // where cái j = $id đi
        ->select('baocaoctlab.*','baocaolab.*','thietbi.*')
        ->where('baocaolab.id',$id)
        ->get();
    }
}
