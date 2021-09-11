@extends('technicians.layouts.mau')
@section('title','Thêm thiết bị')
@section('content')

<h1 style="text-align: center; ">Thêm thiết bị phòng Lab</h1>
<div class="container" style="width: 600px; padding-top: 30px;">

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
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <button type="button" class="btn btn-outline-dark">Dark</button>

    </form>
</div>

@endsection