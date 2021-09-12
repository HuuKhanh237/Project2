@extends('technicians.layouts.mau')
@section('title','Phòng 201')
@section('content')
   <h1 style="text-align: center;">Phòng 201</h1>
   <table id="home" class="table table-bordered" style="text-align: center;">

<thead>
    
    <tr class="table-dark">
        
        <th>Mã thiết bị</th>
        <th>Tình trạng</th>
        <th>Mô tả</th>
<<<<<<< HEAD
        
=======
        <th>Lab</th>
        <th>Tình Trạng</th>
>>>>>>> c1bebc9618703779fac180a24203b9f2d71b102b
    </tr>
</thead>
<tbody>
    @forelse ($P201 as $item)
    <tr>
        
        <td>{{ $item->name}}</td>
        <td>{{ $item->tinhtrang1==1?'Tốt':'Hỏng'}}</td>
        <td>{{ $item->mota}}</td>
<<<<<<< HEAD
        
=======
        <td>{{ $item->id_lab}}</td>
        <td>{{ $item->tinhtrang1==1? 'hiển thị tình trạng 1':'hiển thị tình trạng 2'}}</td>
>>>>>>> c1bebc9618703779fac180a24203b9f2d71b102b
    </tr>
    @empty
    <tr class="table-dark">
        <th colspan="4">Danh sách trống</th>
    </tr>
    @endforelse
</tbody>
</table>
@endsection