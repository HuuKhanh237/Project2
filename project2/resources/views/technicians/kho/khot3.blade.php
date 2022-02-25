@extends('technicians.layouts.mau')
@section('title','Kho tầng 3')
@section('content')
<h1 style="text-align: center;">Kho Tầng 3</h1>
<table id="home" class="table table-bordered" style="text-align: center; width: 100%;">

    <thead>

        <tr class="table-dark">

            <th style="width: 10%">Tên linh kiện</th>
            <th style="width: 10%">Tình trạng</th>
            <th style="width: 50%">Mô tả</th>
            <th style="width: 10%">Số lượng</th>
            <th style="width: 10%">Sửa</th>
            <th style="width: 10%">Báo cáo</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($Khot3 as $item)
        <tr>
        <td>
            <p> {{ $item->name}}</p>
            <img src="{{$item->image}}" width="250px">   
        </td>      
            <td>{{ $item->tinhtrang1==1?'Tốt':'Hỏng'}}</td>
            <td>{!!$item->mota!!}</td>
            <td>{{ $item->soluong}}</td>
            <td>
                <a href="{{'sualk/'.$item->id}}"><span style="font-size: 40px;" class="iconify" data-icon="icon-park:edit-two"></span></a>
                <!-- <a href="{{'xoalk/'.$item->id}}">Xóa</a> -->
            </td>
            <td><a class="add_to_cart" href="{{'cart1/addkho/'.$item->id}}"><span style="font-size: 40px;"  class="iconify" data-icon="icon-park:report"></span></a></td>
        </tr>
        @empty
        <tr class="table-dark">
            <th colspan="5">Danh sách trống</th>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection