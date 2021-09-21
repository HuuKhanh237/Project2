@extends('technicians.layouts.mau')
@section('title','Phòng 201')
@section('content')
   <h1 style="text-align: center;">Phòng 201</h1>
   <table id="home" class="table table-bordered" style="text-align: center;">

   @if(Session('success'))<div class="alert alert-success">{{Session::get('success')}}</div>@endif
		@if(Session('error'))<div class="alert alert-success">{{Session::get('error')}}</div>@endif
<thead>
    
    <tr class="table-dark">
        <th style="width :90px">Mã thiết bị</th>
        <th style="width :400px">Tình trạng</th>
        <th>Mô tả</th>
        <th style="width :150px">Hành Động</th>
        <th style="width :90px">Báo cáo</th>
    </tr>
</thead>
<tbody style="text-align: center" >
    @forelse ($P201 as $item)
    <tr >
       
        <td>
            <p> {{ $item->name}}</p>
            <img src="{{$item->image}}" width="250px">   
        </td>       
        <td>
            <!-- {{ $item->tinhtrang1==1?'Tốt':'Hỏng'}} -->
            @if($item->tinhtrang1==1) <h4>Tốt</h4>
            @elseif($item->tinhtrang1==0) <h4 style="color: red;">Hỏng</h4>
            {{$item->tinhtrang2}}
            @endif
        </td>
        <td>{{ $item->mota}}
        </td>
        <td>
        <a href="{{'suatb/'.$item->id}}"><button type="button" class="btn btn-outline-dark">Sửa</button></a>
           
            <a href="{{'xoatb/'.$item->id}}">Xóa</a>
        </td>
        <td>
        <a href=""><button type="button" class="btn btn-outline-dark">Báo cáo</button></a>
           
            
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