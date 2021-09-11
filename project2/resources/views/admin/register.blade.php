@extends('admin.layouts.master')
@section('title','Admin')
@section('content')
        <form action="{{route('register')}}" method="POST" autocomplete="off">
            @csrf

            <table style="margin: auto;">
                <h1 style="color: black ; text-align: center;">Register User</h1>
                @if(count($errors)>0)
                <div class="alert alert-danger">@foreach($errors->all() as $err)
                    {{$err}}
                    @endforeach
                </div>
                @endif
                <tr>
                    <td><input style=" margin-left: 40px; border-radius: 10px;    width: 250px; height: 40px;	" type="text" name="name" placeholder="Nhập tên :" required></td>
                </tr>

                <tr>
                    <td><input style="margin-left: 40px; border-radius: 10px;    width: 250px; height: 40px;" type="email" name="email" placeholder="Nhập email :" required></td>
                </tr>
                <tr>
                    <td><input style="margin-left: 40px; border-radius: 10px;    width: 250px; height: 40px;" type="password" name="password" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td><button style="margin-left: 40px; border-radius: 10px;    width: 250px; height: 40px; background-color: #000000;color: #FFFFFF" type="submit" name="btn">Đăng kí</button><br>

                        
                    </td>
                </tr>
            </table>




        </form>
  
@endsection