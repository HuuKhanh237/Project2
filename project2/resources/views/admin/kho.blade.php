@extends('admin.layouts.master')
@section('title','Linh kiện')
@section('content')


<h1 style="text-align: center;">Danh sách linh kiện</h1>
<table id="home" class="table table-bordered">

    <thead>
        
        <tr class="table table-dark">
            <th>ID</th>
            <th>Tên thiết bị</th>
            <th>Mô tả</th>
            <th>Số lượng</th>
            <th>Kho</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($linhkien as $item)
        <tr>
            <td>{{ $item->id}}</td>
            <td>
                <p> {{ $item->name}}</p>
                <img src="{{asset('storage/'. $item->image)}}" width="150px">
            </td>
            <td>{{ $item->mota}}</td>
            <td>{{ $item->soluong}}</td>
            <td>{{ $item->id_kho==1?'Kho tầng 3':'Kho tầng 5'}}</td>
        </tr>
        @empty
        <tr class="table-dark">
            <th colspan="4">Danh sách trống</th>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection