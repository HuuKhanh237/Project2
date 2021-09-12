@extends('technicians.layouts.mau')
@section('title','Phòng 202')
@section('content')
   <h1 style="text-align: center;">Phòng 202</h1>
   <table id="home" class="table table-bordered" style="text-align: center;">

<thead>
    
    <tr class="table-dark">
        
        <th>Mã thiết bị</th>
        <th>Tình trạng</th>
        <th>Mô tả</th>
        
    </tr>
</thead>
<tbody>
    @forelse ($P202 as $item)
    <tr>
        
        <td>{{ $item->name}}</td>
        <td>{{ $item->tinhtrang1==1?'Tốt':'Hỏng'}}</td>
        <td>{{ $item->mota}}</td>
        
    </tr>
    @empty
    <tr class="table-dark">
        <th colspan="4">Danh sách trống</th>
    </tr>
    @endforelse
</tbody>
</table>
@endsection