<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ThietbiModel extends Model
{
    use HasFactory;
    public $table='thietbi';
    static function thietbi($id)
    {
        // session()->put('baocao','name')
        $sql = "SELECT * FROM thietbi WHERE id = '$id'";
        $result = DB::select($sql);
        return $result;
    }
    // static function thietbibc()
    // {
    //     // session()->put('baocao','name')
    //     $sql = "SELECT * FROM thietbi WHERE id_lab = 1 OR id_lab=2";
    //     $result = DB::select($sql);
    //     return $result;
    // }
    // static function showbc($id,$name,$tinhtrang2,$id_lab,$path)
    // {
    //     DB::table('thietbi')->where('id',$id)->select([
    //         'name'=>$name,
    //         'tinhtrang2'=>$tinhtrang2,
    //         'id_lab'=>$id_lab,
    //         'image'=>$path
    //     ]);
    // }
    static function themtb($name, $mota,$id_lab,$path)
    {
        return DB::table('thietbi')->insert([
            'name' => $name,
            // 'tinhtrang1'=>$tinhtrang1,
            // 'tinhtrang2'=>$tinhtrang2,
            'mota' => $mota,
            'image' => $path,
            'id_lab' => $id_lab,

        ]);
    }
    // static function suatb($id,$name,$tinhtrang1,$tinhtrang2,$mota,$id_lab,$path){
       
    //     return DB::table('thietbi')->where('id',$id)->update([
    //         'name'=>$name,
    //         'tinhtrang1'=>$tinhtrang1,
    //         'tinhtrang2'=>$tinhtrang2,
    //         'mota'=>$mota,         
    //         'id_lab'=>$id_lab

    //     ]);  
    //         return DB::table('thietbi')->where('id',$id)->update([
    //             'name'=>$name,
    //             'tinhtrang1'=>$tinhtrang1,
    //             'tinhtrang2'=>$tinhtrang2,
    //             'mota'=>$mota,
    //             'id_lab'=>$id_lab,
    //             'image'=>$path
    //     ]);}
  

    // static function suatb($id, $name, $tinhtrang1, $tinhtrang2, $mota, $id_lab ,$path)
    // {
    //     if (empty($path)) {
    //         $sql = "UPDATE thietbi SET name='$name',
    //                  tinhtrang1='$tinhtrang1',
    //               tinhtrang2='$tinhtrang2',
    //                 mota='$mota',
            
    //                id_lab='$id_lab' WHERE id='$id'";
    //     } else {
    //         $sql = "UPDATE thietbi SET name='$name',
    //         tinhtrang1='$tinhtrang1',
    //        tinhtrang2='$tinhtrang2',
    //        mota='$mota',
    //       id_lab='$id_lab',image='$path' WHERE id='$id'";
    //     }
    //     return DB::update($sql);
    // }
    static function suatb($id,$name,$tinhtrang1,$tinhtrang2,$mota,$id_lab,$path){
        if($path == ""){
            return DB::table('thietbi')->where('id',$id)->update([
                'name'=>$name,
                'tinhtrang1'=>$tinhtrang1,
                'tinhtrang2'=>$tinhtrang2,
                'mota'=>$mota,
                'id_lab'=>$id_lab
            ]);
        }
        return DB::table('thietbi')->where('id',$id)->update([
            'name'=>$name,
            'tinhtrang1'=>$tinhtrang1,
            'tinhtrang2'=>$tinhtrang2,
            'mota'=>$mota,
            'id_lab'=>$id_lab,
            'image'=>$path
        ]);
    }
    // static function deletethietbi($id)
    // {
    //     $sql = "DELETE FROM thietbi WHERE id='$id'";
    //     $rs = DB::delete($sql);
    //     return $rs;
    // }
}
