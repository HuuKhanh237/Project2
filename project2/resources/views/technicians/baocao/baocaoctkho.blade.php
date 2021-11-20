@extends('technicians.layouts.mau')
@section('title','Báo cáo chi tiết Kho')
@section('content')

<h1 style="text-align: center;">Báo cáo chi tiết kho</h1>

<table id="home" class="table table-bordered" style="width: 100%; text-align: center;">

    <thead>

        <tr class="table table-dark">

          
        <th scope="col" style="width: 150px;">Mã báo cáo</th>
            <th scope="col" style="width: 200px;">Tên linh kiện</th>
            <th scope="col">Lỗi</th>
            <th style="width: 200px;">Kho</th>
            
            
        </tr>
    </thead>
    <tbody>
        @foreach ($baocaoct as $item)
        <tr>
            <td>{{ $item->id_baocaokho}}</td>
            <td>
                <p>{{$item->name}}</p>
                <img width="200px" src="/{{$item->image}}" alt="image">
            </td>
            
            <td>
                {{$item->tinhtrang1==1?'Tốt':'Hỏng'}}
            </td>
            <td>
                {{$item->id_kho==1?'Kho tầng 3':'Kho tầng 5'}}
               
            </td>
            <!-- <td><a href="{{'xoatb/'.$item->id}}">Xóa</a></td> -->
        </tr>

        @endforeach
    </tbody>
</table>

@endsection


