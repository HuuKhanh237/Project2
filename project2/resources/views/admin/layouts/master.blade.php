<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">

</head>
<body>
     <div class="container" id="wrap">
        <header>
        @section('header')
			 <div class="header">
				<img src="/storage/ll2.gif" alt="">
                
			</div> 
            <div class="sidebar close">
                <div class="logo-details">
                  <i class='bx bxl-c-plus-plus'></i>
                  <span class="logo_name">CodingLab</span>
                </div>
                <ul class="nav-links">
                  <li>
                    <a href="#">
                      <i class='bx bx-grid-alt' ></i>
                      <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                      <li><a class="link_name" href="#">Category</a></li>
                    </ul>
                  </li>
                  <li>
                    <div class="iocn-link">
                      <a href="#">
                        <i class='bx bx-collection' ></i>
                        <span class="link_name">Category</span>
                      </a>
                      <i class='bx bxs-chevron-down arrow' ></i>
                    </div>
                    <ul class="sub-menu">
                      <li><a class="link_name" href="#">Category</a></li>
                      <li><a href="#">HTML & CSS</a></li>
                      <li><a href="#">JavaScript</a></li>
                      <li><a href="#">PHP & MySQL</a></li>
                    </ul>
                  </li>
                  <li>
                    <div class="iocn-link">
                      <a href="#">
                        <i class='bx bx-book-alt' ></i>
                        <span class="link_name">Posts</span>
                      </a>
                      <i class='bx bxs-chevron-down arrow' ></i>
                    </div>
                    <ul class="sub-menu">
                      <li><a class="link_name" href="#">Posts</a></li>
                      <li><a href="#">Web Design</a></li>
                      <li><a href="#">Login Form</a></li>
                      <li><a href="#">Card Design</a></li>
                    </ul>
                  </li>
                  <li>
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
                  </li>
                  
            </ul>
              </div>
              <section class="home-section">
                <div class="home-content">
                  <i class='bx bx-menu' ></i>
                  <span class="text">Drop Down Sidebar</span>
                </div>
              </section>
              <script>
              let arrow = document.querySelectorAll(".arrow");
              for (var i = 0; i < arrow.length; i++) {
                arrow[i].addEventListener("click", (e)=>{
               let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
               arrowParent.classList.toggle("showMenu");
                });
              }
              let sidebar = document.querySelector(".sidebar");
              let sidebarBtn = document.querySelector(".bx-menu");
              console.log(sidebarBtn);
              sidebarBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("close");
              });
              </script>
        

			{{-- <div class="headermenu">
				<ul>
					<li><a class="active" href="#home">Home</a></li>
					<li><a  href="#news">Phòng lab</a></li>
					<li><a  href="#contact">Storage</a></li>
					<li style="float:right"><a class="logout" href="#about">Logout</a></li>
					<li style="float:right padding-right:10px" ><a  href="#news">Tên</a></li>
					
				  </ul>
				  
			</div> --}}
            
        
                    
            @show
        </header>
<div class="container">
    @yield('slider')
    

</div>
<div class="content">
   
    @yield('content')
</div>
@section('footer')
<footer class="bg-light text-center text-lg-start">
    <div class="container" style="position: absolute;bottom:0" style="background-color: rgba(0, 0, 0, 0.2);">
		© 2020 Copyright:
		<a class="text-dark" href="https://www.google.com/">KITEE</a>
    </div>
</footer>
@show

     </div> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>  
</body>
</html>