<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Báo cáo Lab</title>
    <style>
        body{
            background-color: black;
        }
    </style>
</head>
<body>
    
<?php

use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;

$content = Cart::content();
// echo'<pre>';
// print_r($content);
// echo'</pre>';
?>

<h1 style="text-align: center; margin-top: 100px;">Checkout Báo cáo Kho</h1>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<a style="font-size: 60px; margin-left: 50px;" href="{{url('/cart1/addlabk')}}"><span class="iconify" data-icon="noto-v1:back-arrow"></span></a>
<div class="container wrapper">
    <div class="row cart-head">
        <div class="container">
            <div class="row">
                <p></p>
            </div>

            <div class="row">
                <p></p>
            </div>
        </div>
    </div>
    <div class="row cart-body">
        <form class="form-horizontal" method="post" action="">
            @csrf
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <!--REVIEW ORDER-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Review Order <div class="pull-right"><small><a class="afix-1" href="{{asset('cart/addlabk')}}">Báo cáo Kho</a></small></div>
                    </div>
                    <div class="panel-body">
                        @foreach($content as $item)
                        
                        <div class="form-group">
                            <div class="col-sm-3 col-xs-3">
                                <img id="avatar" class="img-responsive" src="{{asset($item->options->image)}}">

                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-xs-12">{{$item->name}}</div>
                                <div class="col-xs-12">{{$item->options->tinhtrang1==1?'Tốt':'Hỏng'}}</div>
                            </div>
                            <div class="col-sm-3 col-xs-3 text-right">
                                {{($item->options->id_kho==1 ? 'Kho Tầng 3' : '')}}
                                {{($item->options->id_lab==2 ? 'Kho Tầng 5' : '')}}
                               
                            </div>
                        </div>
                        
                        @endforeach
                        <div class="form-group">
                            <hr />
                        </div>
                        <div class="form-group">
                            <h3 style="text-align: center;">Các thiết bị đã báo cáo : {{Cart::count()}}</h3>
                        </div>

                    </div>
                </div>
                <!--REVIEW ORDER END-->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                <!--SHIPPING METHOD-->
                <div class="panel panel-info">
                    <div class="panel-heading">Thông tin báo cáo</div>
                    <div class="panel-body">
                        @foreach($users as $item)
                        <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                                <strong>Họ tên :</strong>
                                <input type="text" name="name" class="form-control" value="{{$item->name}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">
                                <strong>Email</strong>
                                <input type="text" name="email" class="form-control" value="{{$item->email}}" />
                            </div>
                        </div>

                        <div class="form-floating">
                            <span>Nội dung báo cáo :</span>
                            <textarea name="noidung" class="form-control" placeholder="Leave a comment here" id="ckeditor5" style="border-radius: 10px;height: 150px" required></textarea>

                        </div><br>
                        @endforeach
                        <div style="text-align: center;" class="form-group">
                            <button type="submit" class="btn btn-success">Xác nhận thông tin báo cáo</button>
                        </div>
                    </div>
                </div>

                <!--SHIPPING METHOD END-->
                <!--CREDIT CART PAYMENT-->
                </from>

            </div>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
           
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
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
