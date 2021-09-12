<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KhoModel extends Model
{
    use HasFactory;
    static function idkho(){
        $sql = "SELECT * FROM kho";
       $result=DB::select($sql);
       return $result;
    }
    static function themlk($name,$mota,$soluong,$id_kho){
        return DB::table('linhkien')->insert([
            'name'=>$name,
            // 'tinhtrang1'=>$tinhtrang1,
            // 'tinhtrang2'=>$tinhtrang2,
            'mota'=>$mota,
            'soluong'=>$soluong,
            'id_kho'=>$id_kho
            
        ]);
    }
}
