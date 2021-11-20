@extends('admin.layouts.master')
@section('title','Kho')
@section('content')
<h1 style="text-align: center;">Báo cáo chi tiết Lab</h1>

<table id="home" class="table table-bordered" style="width: 100%; text-align: center;">

    <thead>

        <tr class="table table-dark">

          
        <th scope="col" style="width: 150px;">Mã báo cáo</th>
            <th scope="col" style="width: 200px;">Tên thiết bị</th>
            <th scope="col">Lỗi</th>
            <th style="width: 100px;">Lab</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($baocaoct as $item)
        <tr>
            <td>{{ $item->id_baocaolab}}</td>
            <td>
                <p>{{$item->name}}</p>
                <img width="200px" src="/{{$item->image}}" alt="image">
            </td>
            
            <td>
                {{$item->tinhtrang2}}
            </td>
            <td>
                {{$item->id_lab==1?'P201':''}}
                {{$item->id_lab==2?'P202':''}}
                {{$item->id_lab==3?'P203':''}}
                {{$item->id_lab==4?'P204':''}}
                {{$item->id_lab==5?'P205':''}}
            </td>
            <!-- <td><a href="{{'xoatb/'.$item->id}}">Xóa</a></td> -->
        </tr>

        @endforeach
    </tbody>
</table>

@endsection


