<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ThietbiModel extends Model
{
    use HasFactory;
    // static function themtb($name,$tinhtrang1,$tinhtrang2,$mota,$id_lab){
    //     $sql = "INSERT INTO thietbi VALUES (NULL,'$name','$tinhtrang1','$tinhtrang2','$mota','$id_lab')";
    //     $rs = DB::insert($sql);
    //     return $rs;
    // }
    static function thietbi($id){
       $sql = "SELECT * FROM thietbi WHERE id = '$id'";
       $result=DB::select($sql);
       return $result;
    }
    static function themtb($name,$mota,$id_lab){
        return DB::table('thietbi')->insert([
            'name'=>$name,
            // 'tinhtrang1'=>$tinhtrang1,
            // 'tinhtrang2'=>$tinhtrang2,
            'mota'=>$mota,
            'id_lab'=>$id_lab
            
        ]);
    }
    static function suatb($id,$name,$tinhtrang1,$tinhtrang2,$mota,$id_lab){
        return DB::table('thietbi')->where('id',$id)->update([
            'name'=>$name,
            'tinhtrang1'=>$tinhtrang1,
            'tinhtrang2'=>$tinhtrang2,
            'mota'=>$mota,
            'id_lab'=>$id_lab
            
        ]);
    }

}