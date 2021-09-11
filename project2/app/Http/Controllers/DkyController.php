<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DkyController extends Controller
{
    function __construct()
    {
        $this->middleware('auth.admin');
    }
    function showregister(){
        return view('admin.register');
    }
    function register(Request $request){
        $this->validate($request,
            [
                
                'email'=>'unique:users,email',
                'password'=>'required|min:4|max:10'
            ],
            [
                'email.unique'=>'Email đã có người sử dụng',
                'password.min'=>'Mật khẩu ít nhất 4 kí tự'
            ]
        );
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
        return redirect()->route(route:'admin.home')->with('success','Đăng ký thành công');
    }
}
