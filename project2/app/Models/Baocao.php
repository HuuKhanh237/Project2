<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Baocao extends Model
{
    protected $table = 'baocaolab';
    static function index(){
        $sql = "SELECT * FROM baocaolab ORDER BY trangthai DESC ";
       $result=DB::select($sql);
       return $result;
    }
    static function iduser(){
        $sql = "SELECT * FROM users ";
       $result=DB::select($sql);
       return $result;
    }
}
