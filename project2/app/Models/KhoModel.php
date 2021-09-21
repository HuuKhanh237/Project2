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
    static function linhkien(){
        $sql = "SELECT * FROM linhkien";
       $result=DB::select($sql);
       return $result;
    }
    static function themlk($name,$mota,$soluong,$path,$id_kho){
        return DB::table('linhkien')->insert([
            'name'=>$name,
            // 'tinhtrang1'=>$tinhtrang1,
            // 'tinhtrang2'=>$tinhtrang2,
            'mota'=>$mota,
            'soluong'=>$soluong,
            'image'=>$path,
            'id_kho'=>$id_kho
            
        ]);
    }
    static function deletelinhkien($id){
        $sql = "DELETE FROM linhkien WHERE id='$id'";
        $rs = DB::delete($sql);
        return $rs;

    }
    static function sualk($id,$name,$tinhtrang1,$mota,$soluong,$path,$id_kho){
        return DB::table('linhkien')->where('id',$id)->update([
            'name'=>$name,
            'tinhtrang1'=>$tinhtrang1,
            'mota'=>$mota,
            'soluong'=>$soluong,
            'image'=>$path,
            'id_kho'=>$id_kho
            
        ]);
    }
}
