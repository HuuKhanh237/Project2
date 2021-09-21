@extends('technicians.layouts.mau')
@section('title','Phòng 203')
@section('content')
   <h1 style="text-align: center;">Phòng 203</h1>
   <table id="home" class="table table-bordered" style="text-align: center;">

   @if(Session('success'))<div class="alert alert-success">{{Session::get('success')}}</div>@endif
   @if(Session('error'))<div class="alert alert-success">{{Session::get('error')}}</div>@endif
<thead>
    
    <tr class="table-dark">
    <th style="width :90px">Mã thiết bị</th>
        <th style="width :90px">Tình trạng</th>
        <th>Mô tả</th>
        <th style="width :150px">Hành Động</th>
        <th style="width :90px">Báo cáo</th>
    </tr>
</thead>
<tbody>
    @forelse ($P203 as $item)
    <tr>
       
        <td>
            <p> {{ $item->name}}
            <img src="{{$item->image}}" width="250px">  
            </p>
           
        </td>
        <td>{{ $item->tinhtrang1==1?'Tốt':'Hỏng'}}</td>
        <td>{{ $item->mota}}</td>
        <td>
            <a href="{{'/suatb/'.$item->id}}">Sửa</a>
            <a href="{{'/xoatb/{id}'.$item->id}}">Xóa</a>
        </td>
    </tr>
    @empty
    <tr class="table-dark">
        <th colspan="4">Danh sách trống</th>
    </tr>
    @endforelse
</tbody>
</table>
@endsection