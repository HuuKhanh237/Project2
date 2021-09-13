<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    static function P201(){
        $sql = "SELECT * FROM thietbi WHERE id_lab=1";
       $result=DB::select($sql);
       return $result;
    }
    static function P202(){
        $sql = "SELECT * FROM thietbi WHERE id_lab=2";
       $result=DB::select($sql);
       return $result;
    }
    static function P203(){
        $sql = "SELECT * FROM thietbi WHERE id_lab=3";
       $result=DB::select($sql);
       return $result;
    }
    static function P204(){
        $sql = "SELECT * FROM thietbi WHERE id_lab=4";
       $result=DB::select($sql);
       return $result;
    }
    static function P205(){
        $sql = "SELECT * FROM thietbi WHERE id_lab=5";
       $result=DB::select($sql);
       return $result;
    }
    
    static function idlab(){
        $sql = "SELECT * FROM lab";
       $result=DB::select($sql);
       return $result;
    }
    static function Khot3(){
        $sql = "SELECT * FROM linhkien WHERE id_kho=1";
       $result=DB::select($sql);
       return $result;
    }
    static function Khot5(){
        $sql = "SELECT * FROM linhkien WHERE id_kho=2";
       $result=DB::select($sql);
       return $result;
    }
    
}
