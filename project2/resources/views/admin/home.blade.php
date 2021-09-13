@extends('admin.layouts.master')
@section('title','Admin')
@section('content')
<div style="text-align: center;">
    <h1>Tài khoản kỹ thuật viên</h1><br><br>
</div>
<div>@if(Session('success'))<div class="alert alert-success">{{Session::get('success')}}</div>@endif
@if(Session('error'))<div class="alert alert-success">{{Session::get('error')}}</div>@endif</div>

<table id="home" class="table">
    <div style="color: black;"><a href="{{url('/admin/register')}}" class="nav-link">Thêm tài khoản</div>
    <thead>

        <tr class="table-dark">
            <th>ID</th>
            <th>Họ và tên</th>
            <th>Email</th>
            <th>Trạng thái</th>
            <th>Quản lí</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $item)
        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->is_active==1?'Hoạt động' : 'Khóa' }}</td>
            <td><a href="{{url('/admin/sua/'.$item->id)}}">Sửa</a></td>
            
           
        </tr>
        @empty
        <tr class="table-dark">
            <th colspan="5">Danh sách trống</th>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection