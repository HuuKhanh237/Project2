@extends('admin.layouts.mau')
@section('title','Admin')
@section('content')
<h1>Hello</h1>
<table id="home" class="table table-bordered">
    <thead>
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Mô tả</th>
            <th>Lab</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($thietbi as $item)
        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->mota}}</td>
            <td>{{ $item->id_lab}}</td>
        </tr>
        @empty
        <tr class="table-dark">
            <th colspan="4">Danh sách trống</th>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection