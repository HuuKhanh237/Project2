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
        
    </tr>
</thead>
<tbody>
    @forelse ($Khot5 as $item)
    <tr>
        
        <td>{{ $item->name}}</td>
        <td>{{ $item->tinhtrang1==1?'Tốt':'Hỏng'}}</td>
        <td>{{ $item->mota}}</td>
        <td>{{ $item->soluong}}</td>
        
    </tr>
    @empty
    <tr class="table-dark">
        <th colspan="4">Danh sách trống</th>
    </tr>
    @endforelse
</tbody>
</table>
@endsection