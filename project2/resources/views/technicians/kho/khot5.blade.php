@extends('technicians.layouts.mau')
@section('title','Kho tầng 5')
@section('content')
<h1 style="text-align: center;">Kho Tầng 5</h1>
<table id="home" class="table table-bordered" style="text-align: center;">

    <thead>

        <tr class="table-dark">

            <th>Tên linh kiện</th>
            <th>Tình trạng</th>
            <th>Mô tả</th>
            <th>Số lượng</th>
            <th>Sửa</th>
            <th>Báo cáo</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($Khot5 as $item)
        <tr>

            <td>
                <p> {{ $item->name}}

                </p>
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