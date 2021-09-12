@extends('admin.layouts.master')
@section('title','Sửa tài khoản')
@section('content')
<form method="POST" autocomplete="off">
    @csrf

    <table style="margin: auto;">
        <h1 style="color: black ; text-align: center;">Sửa thông tin người dùng</h1>


        <tr>
            <td><input value="{{$sua->name}}" style=" margin-left: 25px; border-radius: 10px;    width: 250px; height: 40px;	" type="text" name="name" placeholder="Nhập tên :" required></td>
        </tr>

        <tr>
            <td><input value="{{$sua->email}}" style="margin-left: 25px; border-radius: 10px;    width: 250px; height: 40px;" type="email" name="email" placeholder="Nhập email :" required></td>
        </tr>
        <tr>
                    <td><input value="{{$sua->password}}" style="margin-left: 25px; border-radius: 10px;    width: 250px; height: 40px;" type="password" name="password" placeholder="Password" required></td>
                </tr>
        <tr>
            <td><select value="{{$sua->is_active}}"style="margin-left: 25px; border-radius: 10px;    width: 250px; height: 40px;" class="form-select" aria-label="Default select example">
                    <option selected>Trạng thái</option>
                    <option value="{{$sua->is_active==1}}">Hoạt động</option>
                    <option value="{{$sua->is_active==0}}">Khóa</option>
                    
                </select></td>
        </tr>
        <tr>
            <td><button style="margin-left: 25px; border-radius: 10px;    width: 250px; height: 40px; background-color: #000000;color: #FFFFFF" type="submit" name="btn">Đăng kí</button><br>


            </td>
        </tr>
    </table>




</form>

@endsection