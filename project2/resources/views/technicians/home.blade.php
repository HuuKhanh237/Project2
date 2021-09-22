@extends('technicians.layouts.mau')
@section('title','Trang chủ')
@section('content')
<div style="height: 50px; background-color: black; color:white">
    <marquee direction="right" behavior="alternate">
        
        <h3 style="margin-top:7px;">Nhân viên kiểm tra linh kiện kho và các thiết bị phòng lab tối thiểu lần/tuần</h3>
    </marquee>
</div>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
  <div class="carousel-inner" style="height: 600px;">
    <div class="carousel-item active">
      <img src="{{asset('/storage/anh1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('/storage/anh2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('/storage/anh3.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('/storage/anh4.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


@endsection