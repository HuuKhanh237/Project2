@extends('technicians.layouts.mau')
@section('title','Phòng 201')
@section('content')
   <h1 style="text-align: center;">Phòng 201</h1>
   <table id="home" class="table table-bordered" style="text-align: center;">

   @if(Session('success'))<div class="alert alert-success">{{Session::get('success')}}</div>@endif
		@if(Session('error'))<div class="alert alert-success">{{Session::get('error')}}</div>@endif
<thead>
    
    <tr class="table-dark">
        {{-- <th>Id</th> --}}
        <th>Mã thiết bị</th>
        
        <th>Tình trạng</th>
        <th>Mô tả</th>
        <th>Hành Động</th>
    </tr>
</thead>
<tbody style="text-align: center" >
    @forelse ($P201 as $item)
    <tr >
        {{-- <td>{{ $item->id}}</td> --}}
        <td>
            <p> {{ $item->name}}</p>
            <img src="{{ $item->image}}" width="150px">
        </td>
        
        <td>{{ $item->tinhtrang1==1?'Tốt':'Hỏng'}}</td>
        <td>{{ $item->mota}}</td>
        <td>
            <a href="{{'suatb/'.$item->id}}">Sửa</a>
            <a href="{{'xoatb/'.$item->id}}">Xóa</a>
        </td>
        
        

    </tr>
    @empty
    <tr class="table-dark">
        <th colspan="5" class="text-center">Danh sách trống</th>
    </tr>
    @endforelse
</tbody>
</table>
@endsection