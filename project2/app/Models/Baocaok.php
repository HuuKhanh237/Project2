<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Baocaok extends Model
{
    protected $table = 'baocaokho';
    static function iduser(){
        $sql = "SELECT * FROM users";
       $result=DB::select($sql);
       return $result;
    }
}