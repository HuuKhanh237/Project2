<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-colvis-2.0.0/b-html5-2.0.0/b-print-2.0.0/datatables.min.css" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

  {{-- menu --}}
  <div class="sidebar close">

    <div class="logo-details">
      <a href="{{route('home')}}">
        <i style="color: steelblue;" class='bx bxs-home'></i>
      </a>
      <span class="logo_name">BKMED</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i style="font-size: 30px; color: steelblue;" class='bx bx-happy'></i>
          <span class="link_name">
            @section('tren')
            @if(Auth::guard('user')->user() != null)
            {{Auth::guard('user')->user()->name}}
            @endif
            @show
          </span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#"> @section('tren')
              @if(Auth::guard('user')->user() != null)
              {{Auth::guard('user')->user()->name}}
              @endif
              @show</a></li>
        </ul>

      <li>
        <div class="iocn-link">

          <a href="">
            <span style="font-size: 30px; margin-left: 18px ;" class="iconify" data-icon="flat-ui:pc" data-rotate="180deg" data-flip="horizontal,vertical"></span>

          </a>

          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name">Ph??ng Lab</a></li>
          <li><a href="{{url('themtb')}}">Th??m thi???t b??? ph??ng Lab</a></li>
          <li><a href="{{url('P201')}}">P201</a></li>
          <li><a href="{{url('P202')}}">P202</a></li>
          <li><a href="{{url('P203')}}">P203</a></li>
          <li><a href="{{url('P204')}}">P204</a></li>
          <li><a href="{{url('P205')}}">P205</a></li>

        </ul>
      </li><br>
      <li>
        <div class="iocn-link">
          <a href="">
            <span style="font-size: 35px; margin-left: 20px ;" class="iconify" data-icon="icon-park:cpu" data-rotate="180deg" data-flip="horizontal,vertical"></span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="">Kho</a></li>
          <li><a href="{{url('themlk')}}">Th??m linh ki???n</a></li>
          <li><a href="{{url('Khot3')}}">Kho t???ng 3</a></li>
          <li><a href="{{url('Khot5')}}">Kho t???ng 5</a></li>

        </ul>
      </li><br>
      <li>
        <div class="iocn-link">
          <a href="">
            <span style="font-size: 35px; margin-left: 20px ;" class="iconify" data-icon="icon-park:table-report" data-rotate="180deg" data-flip="horizontal,vertical"></span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">B??o c??o</a></li>
          <!-- <li><a href="{{url('')}}">Th??m linh ki???n</a></li> -->
          <li><a href="{{url('cart/addlabbc')}}">B??o c??o ph??ng lab</a></li>
          <li><a href="{{url('cart1/addlabk')}}">B??o c??o kho</a></li>

        </ul>
      </li>
      <br>
      <li>
        <div class="iocn-link">
          <a href="">
          <span  style="font-size: 35px; margin-left: 20px ;" class="iconify" data-icon="icon-park:notes"></span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">N???i dung b??o c??o</a></li>
          <!-- <li><a href="{{url('')}}">Th??m linh ki???n</a></li> -->
          <li><a href="{{url('/baocaolab')}}">B??o c??o ph??ng lab </a></li>
          <li><a href="{{url('/baocaokho')}}">B??o c??o kho</a></li>

        </ul>
      </li>
      {{-- <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li> --}}
      <br>
      <li>
        <a href="{{route('logout')}}">
          <span style="font-size: 30px; margin-left: 20px;" class="iconify" data-icon="ri:logout-circle-line" data-rotate="180deg" data-flip="horizontal,vertical"></span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Logout</a></li>
        </ul>
  </div>
  </li>
  </ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <img style="margin-top: 50px;" src="{{asset('storage/ll6.gif')}}" alt="">
    </div>
    <br /> <br /> <br />
    @show
    <div class="container">
      @yield('slider')
    </div>
    <div class="content">
      @yield('content')
    </div>
    <div class="container" id="wrap" style="width: 100%;">
      <!-- @section('footer') -->
      <!-- <footer class="container" style="position: absolute;bottom:0"> -->
      <!-- Footer -->
      @yield('footer')
      <!-- Footer -->
      <!-- </footer> -->
      <!-- @show -->
    </div>

  </section>
  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>


  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-colvis-2.0.0/b-html5-2.0.0/b-print-2.0.0/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('#home').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
    });
  </script>
  <script src="{{asset('text/ckeditor/ckeditor.js')}}"></script>
  <script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.replace('ckeditor3');
    CKEDITOR.replace('ckeditor4');
    CKEDITOR.replace('ckeditor5');
    CKEDITOR.replace('ckeditor6');
    CKEDITOR.replace('ckeditor7');
  </script>
</body>

</html>