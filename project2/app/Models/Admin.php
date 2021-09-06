<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class Admin extends Authenticatable
{
    use HasFactory;
    static function home(){
        $sql = "SELECT * FROM thietbi";
       $result=DB::select($sql);
       return $result;
    }
}
