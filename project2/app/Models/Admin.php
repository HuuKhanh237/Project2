<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Echo_;

class Admin extends Authenticatable
{
  use HasFactory;
  protected $fillable = [
    'name',
    'email',
    'password',
];
protected $hidden = [
    'password',
    
];

    
    static function home(){
        $sql = "SELECT * FROM users";
       $result=DB::select($sql);
       return $result;
    }
    static function thietbi(){
        $sql = "SELECT * FROM thietbi";
       $result=DB::select($sql);
       return $result;
    }
    static function linhkien(){
        $sql = "SELECT * FROM linhkien";
       $result=DB::select($sql);
       return $result;
    }
   
}
