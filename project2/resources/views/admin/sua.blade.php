@extends('admin.layouts.master')
@section('title','Sửa tài khoản')
@section('content')
<form method="POST" autocomplete="off">
    @csrf

    <table style="margin: auto;">
        <h1 style="color: black ; text-align: center;">Sửa thông tin người dùng</h1>


        <tr>
            <td><input value="{{$sua->name}}" style=" margin-left: 25px; border-radius: 10px;    width: 250px; height: 40px;" type="text" name="name" placeholder="Nhập tên :" required></td>
        </tr>

        <tr>
            <td><input value="{{$sua->email}}" style="margin-left: 25px; border-radius: 10px;    width: 250px; height: 40px;" type="email" name="email" placeholder="Nhập email :" required></td>
        </tr>

        <tr>
            <td><select name="is_active" style="margin-left: 25px; border-radius: 10px;    width: 250px; height: 40px;" class="form-select" aria-label="Default select example">
                    <option value="1" @if ($sua->is_active==1)
                        {{'selected'}}
                        @endif
                        >Hoạt động
                    </option>
                    <option value="0" @if ($sua->is_active==0)
                        {{'selected'}}
                        @endif
                        >Khóa
                    </option>
                </select></td>
        </tr>
        <tr>
            <td><button style="margin-left: 25px; border-radius: 10px;    width: 250px; height: 40px; background-color: #000000;color: #FFFFFF" type="submit" name="btn">Sửa</button><br>


            </td>
        </tr>
    </table>




</form>

@endsection