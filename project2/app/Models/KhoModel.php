<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KhoModel extends Model
{
    use HasFactory;
    public $table='linhkien';
    static function idkho(){
        $sql = "SELECT * FROM kho";
       $result=DB::select($sql);
       return $result;
    }
    static function linhkien($id){
        $sql = "SELECT * FROM linhkien WHERE id = '$id'";
       $result=DB::select($sql);
       return $result;
    }
    static function themlk($name,$mota,$soluong,$id_kho,$path){
        return DB::table('linhkien')->insert([
            'name'=>$name,
            // 'tinhtrang1'=>$tinhtrang1,
            // 'tinhtrang2'=>$tinhtrang2,
            'mota'=>$mota,
            'soluong'=>$soluong,
            'id_kho'=>$id_kho,
            'image'=>$path
            
        ]);
    }
    static function sualk($id,$name,$tinhtrang1,$mota,$soluong,$id_kho,$path){
        if($path == ""){
            return DB::table('linhkien')->where('id',$id)->update([
                'name'=>$name,
                'tinhtrang1'=>$tinhtrang1,
                'mota'=>$mota,
                'soluong'=>$soluong,
                'id_kho'=>$id_kho
                
            ]);
        }
        return DB::table('linhkien')->where('id',$id)->update([
            'name'=>$name,
            'tinhtrang1'=>$tinhtrang1,
            'mota'=>$mota,
            'soluong'=>$soluong,
            'id_kho'=>$id_kho,
            'image'=>$path
        ]);
    }
    // static function deletelinhkien($id){
    //     $sql = "DELETE FROM linhkien WHERE id='$id'";
    //     $rs = DB::delete($sql);
    //     return $rs;

    // }
    
}
