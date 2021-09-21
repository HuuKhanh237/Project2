@extends('technicians.layouts.mau')
@section('title','Thêm thiết bị')
@section('content')

<h1 style="text-align: center; ">Thêm thiết bị phòng Lab</h1>
<div class="container" style="width: 600px; padding-top: 30px;">

    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div>@if(Session('success'))<div class="alert alert-success">{{Session::get('success')}}</div>@endif</div>
        <div class="input-group mb-3">

            <input style=" border-radius: 10px; width: 600px;  height: 50px;" type="text" name="name" placeholder="Nhập mã thiết bị" required>
        </div>
        <!-- <div class="form-check">
            <input name="tinhtrang1" value = "1"class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Tôt 
            </label>
        </div> -->
        <div class="form-floating">
            <textarea name="mota" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="border-radius: 10px;height: 150px" required></textarea>
            <label for="floatingTextarea2">Chi tiết</label>
        </div><br>
        <!-- <div class="form-floating">
            <textarea name="tinhtrang2" class="form-control" type="date" placeholder="Leave a comment here" id="floatingTextarea3" style="border-radius: 10px;height: 150px"></textarea>
            <label for="floatingTextarea2">Tinh trạng</label>
        </div><br> -->

        <select name="id_lab" class="form-select" aria-label="Default select example" required>
            
            @foreach($lab as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Image</label>
            <input name="image" type="file" class="form-control" id="validationDefault01"  required>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-dark" style="width: 300px; margin-left: 150px;">Thêm</button>

    </form>
</div>

@endsection