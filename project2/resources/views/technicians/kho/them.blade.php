@extends('technicians.layouts.mau')
@section('title','Thêm linh kiện')
@section('content')
<h1 style="text-align: center;">Thêm linh kiện trong kho</h1>
@extends('technicians.layouts.mau')
@section('title','Thêm thiết bị')
@section('content')

<h1 style="text-align: center;">Thêm thiết bị phòng Lab</h1>
<div class="container">

    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>
        
        <button type="button" class="btn btn-outline-dark">Dark</button>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </form>
</div>

@endsection
@endsection