@extends('technicians.layouts.mau')
@section('title','Phòng 201')
@section('content')
   <h1>Phòng 201</h1>
   <table id="home" class="table table-bordered">

<thead>
    
    <tr class="table-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Mô tả</th>
        <th>Lab</th>
        <th>Tình Trạng</th>
    </tr>
</thead>
<tbody>
    @forelse ($thietbi as $item)
    <tr>
        <td>{{ $item->id}}</td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->mota}}</td>
        <td>{{ $item->id_lab}}</td>
        <td>{{ $item->tinhtrang1==1? 'hiển thị tình trạng 1':'hiển thị tình trạng 2'}}</td>
    </tr>
    @empty
    <tr class="table-dark">
        <th colspan="4">Danh sách trống</th>
    </tr>
    @endforelse
</tbody>
</table>
@endsection