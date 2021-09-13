@extends('technicians.layouts.mau')
@section('title','Phòng 201')
@section('content')
   <h1 style="text-align: center;">Phòng 201</h1>
   <table id="home" class="table table-bordered" style="text-align: center;">

<thead>
    
    <tr class="table-dark">
        <th>Id</th>
        <th>Mã thiết bị</th>
        <th>Tình trạng</th>
        <th>Mô tả</th>
        <th>Hành Động</th>
    </tr>
</thead>
<tbody>
    @forelse ($P201 as $item)
    <tr>
        <td>{{ $item->id}}</td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->tinhtrang1==1?'Tốt':'Hỏng'}}</td>
        <td>{{ $item->mota}}</td>
        <td>
            <a href="{{'/suatb/'.$item->id}}">Sửa</a>
            <a href="">Xóa</a>
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