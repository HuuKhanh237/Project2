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

<footer class="text-center text-lg-start bg-light text-black">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <h2><span>Các thông tin về website :</span></h2>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/Bkacad" class="me-4 text-reset">
      <span style="font-size: 30px;" class="iconify" data-icon="icon-park:facebook" data-rotate="180deg" data-flip="horizontal,vertical"></span>
      </a>
      <a href="" class="me-4 text-reset">
      <span style="font-size: 30px;" class="iconify" data-icon="icon-park:twitter" data-rotate="180deg" data-flip="horizontal,vertical"></span>
      </a>
      <a href="" class="me-4 text-reset">
      <span style="font-size: 30px;" class="iconify" data-icon="simple-icons:zalo" data-rotate="180deg" data-flip="horizontal,vertical"></span>
      </a>
      <a href="" class="me-4 text-reset">
      <span style="font-size: 30px;" class="iconify" data-icon="logos:instagram-icon" data-rotate="180deg" data-flip="horizontal,vertical"></span>
      </a>
     
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h2 class="text-uppercase fw-bold mb-4">
          <span class="iconify" data-icon="emojione-v1:diamond-with-a-dot" data-rotate="180deg" data-flip="horizontal,vertical"></span> BKMED
          </h2>
          
          <p>
          <span style="font-size: 25px;" class="iconify" data-icon="ic:sharp-diamond" data-rotate="180deg" data-flip="horizontal,vertical"></span>
           MANAGE ELECTRONIC DEVICE : Phần mềm quản lý trang thiết bị phòng lab và các linh kiện kho của Học Viện CNTT BKACAD
          </p>
          <p>
          <span style="font-size: 25px;" class="iconify" data-icon="openmoji:location-indicator" data-rotate="180deg" data-flip="horizontal,vertical"></span>
          Địa chỉ : tòa nhà A17, phố Tạ Quang Bửu , Hai Bà Trưng , Hà Nội 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h4 class="text-uppercase fw-bold mb-4">
          <span class="iconify" data-icon="flat-ui:pc" data-rotate="180deg" data-flip="horizontal,vertical"></span> Phòng Lab
          </h4>
          <p>
            <a href="{{url('P201')}}" class="text-reset">P201</a>
          </p>
          <p>
            <a href="{{url('P202')}}" class="text-reset">P202</a>
          </p>
          <p>
            <a href="{{url('P203')}}"  class="text-reset">P203</a>
          </p>
          <p>
            <a href="{{url('P204')}}"  class="text-reset">P204</a>
          </p>
          <p>
            <a href="{{url('P205')}}" class="text-reset">P205</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h4 class="text-uppercase fw-bold mb-4">
          <span class="iconify" data-icon="icon-park:cpu" data-rotate="180deg" data-flip="horizontal,vertical"></span> Kho
          </h4>
          <p>
            <a href="{{url('Khot3')}}" class="text-reset">Kho tầng 3</a>
          </p>
          <p>
            <a href="{{url('Khot5')}}" class="text-reset">Kho tầng 5</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h4 class="text-uppercase fw-bold mb-4">
          <span style="font-size: 40px;" class="iconify" data-icon="flat-color-icons:business-contact" data-rotate="180deg" data-flip="horizontal,vertical"></span> Liên hệ quản lý
          </h4>
          <p><span  style="font-size: 30px;" class="iconify" data-icon="icon-park:avatar"></span>: Vương Hữu Khánh</p>
          <p style="margin-left: 5px;">
          <span class="iconify" data-icon="logos:google-gmail" data-rotate="180deg" data-flip="horizontal,vertical"></span> : vuongkhanh40@gmail.com 
          </p>
          <p><span style="font-size: 30px;" class="iconify" data-icon="emojione:mobile-phone" data-rotate="180deg" data-flip="horizontal,vertical"></span>:0981025274</p>
          <p><span  style="font-size: 30px;" class="iconify" data-icon="icon-park:avatar"></span> :Hoàng Tuấn Anh</p>
          <p style="margin-left: 5px;">
          <span class="iconify" data-icon="logos:google-gmail" data-rotate="180deg" data-flip="horizontal,vertical"></span> : tuananhhoanga4151001@gmail.com
          </p>
          
          <p><span style="font-size: 30px;" class="iconify" data-icon="emojione:mobile-phone" data-rotate="180deg" data-flip="horizontal,vertical"></span>:0981025274</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  
  <!-- Copyright -->
</footer>


@endsection