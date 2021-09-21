@extends('technicians.layouts.mau')
@section('title','Kho tầng 3')
@section('content')
   <h1 style="text-align: center;">Kho Tầng 3</h1>
   <table id="home" class="table table-bordered" style="text-align: center;">

<thead>
    
    <tr class="table-dark">
        
        <th>Tên linh kiện</th>
        <th>Tình trạng</th>
        <th>Mô tả</th>
        <th>Số lượng</th>
        <th>Hành động</th>
    </tr>
</thead>
<tbody>
    @forelse ($Khot3 as $item)
    <tr>
        
        <td>
            <p> {{ $item->name}}</p>
            <img src="{{ $item->image}}" width="150px">
        </td>
        <td>{{ $item->tinhtrang1==1?'Tốt':'Hỏng'}}</td>
        <td>{{ $item->mota}}</td>
        <td>{{ $item->soluong}}</td>
        <td>
            <a href="{{'/sualk/'.$item->id}}">Sửa</a>
            <a href="{{'xoalk/'.$item->id}}">Xóa</a>
        </td>
        
    </tr>
    @empty
    <tr class="table-dark">
        <th colspan="5">Danh sách trống</th>
    </tr>
    @endforelse
</tbody>
</table>
@endsection