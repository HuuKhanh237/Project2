@extends('admin.layouts.master')
@section('title','Thiết bị')
@section('content')


<h1 style="text-align: center;">Danh sách thiết bị</h1>
<table id="home" class="table table-bordered">

    <thead>

        <tr class="table table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Mô tả</th>
            <th>Lab</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($thietbi as $item)   
        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->mota}}</td>
            <td>{{($item->id_lab==1 ? 'P201' : '')}}
            {{($item->id_lab==2 ? 'P202' : '')}}
            {{($item->id_lab==3 ? 'P203' : '')}}
            {{($item->id_lab==4 ? 'P204' : '')}}
            {{($item->id_lab==5 ? 'P205' : '')}}
            </td>
            <td><a href="{{'xoatb/'.$item->id}}">Xóa</a></td>
        </tr>
        @empty
        <tr class="table-dark">
            <th colspan="4">Danh sách trống</th>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection