<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-colvis-2.0.0/b-html5-2.0.0/b-print-2.0.0/datatables.min.css" />
    <style type="text/css">
        body {
            width: 100%;
           
            color: whitesmoke;
        }
    </style>
</head>

<body>
    <!-- Site wrapper -->

    
    <div class="wrapper" style="width: 100%;">
        <!-- Navbar -->


        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <div name="header">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link"><i style="font-size: 20px;" class="fas fa-home"></i></a>
                    </li>
                   
                    <!-- Messages Dropdown Menu -->


                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <!-- <a href="../../index3.html" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">BKAMED</span>
            </a> -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image" style="font-size: 20px; color: white; margin-top : 5px">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="info" style="font-size: 20px;">
                        
                            @section('tren')
                            @if(Auth::guard('admin')->user() != null)
                            {{Auth::guard('admin')->user()->name}}
                            @endif
                            @show
                        
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                            <a href="{{url('/admin')}}" class="nav-link">
                            <i class="fas fa-warehouse"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <p>
                                    Quản lý tài khoản

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/thietbi')}}" class="nav-link">
                            <i class="fas fa-warehouse"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <p>
                                    Thiết bị phòng Lab

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/linhkien')}}" class="nav-link">
                            <i class="fas fa-warehouse"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <p>
                                    Kho

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../widgets.html" class="nav-link">
                            <i class="fas fa-warehouse"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <p>
                                    Quản lý báo cáo

                                </p>
                            </a>
                        </li>
                    </ul>




                </nav>
                <div style=" padding-right: 5px;">
                    <a href="{{route('admin.logout')}}"><button type="button" class="btn btn-outline-danger" style="float: right"><i class="fas fa-sign-out-alt" style="font-size: 30px;"></i></button></a>
                </div>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="color: black;">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <!-- <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
            <!-- 
                        </div>
                    </div>
                </div>
            </section>  -->
            
                @yield('content')
           
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">

            <strong>KITEE</strong>.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-colvis-2.0.0/b-html5-2.0.0/b-print-2.0.0/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script>$(document).ready( function () {
    $('#home').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
} );</script>
</body>

</html>