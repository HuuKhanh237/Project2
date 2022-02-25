
@extends('technicians.layouts.mau')
@section('title','Báo cáo lab')
@section('content')
<?php

use Gloudemans\Shoppingcart\Facades\Cart;
$content=Cart::content();
// $content = ShoppingcartCart
// echo'<pre>';
// print_r($content);
// echo'</pre>';
?>
   <h1 style="text-align: center;">Báo cáo phòng Lab</h1>
   <div style="float: right; margin-bottom: 0px;">
   @foreach($users as $item)
   <a  href="{{asset('/baocao/check/'.$item->id)}}"><button type="button" class="btn btn-warning">Báo cáo</button></a>
   @endforeach
   &nbsp; &nbsp<a  href="{{asset('/cart/xoa/all')}}"><button type="button" class="btn btn-danger">Xóa tất cả</button></a>
   &nbsp; &nbsp</div>
   <form class="from-horizontal" method="post">
      @csrf
  
   <table id="home" class="table table-bordered" style="text-align: center">

   <!-- @if(Session('success'))<div class="alert alert-success">{{Session::get('success')}}</div>@endif
		@if(Session('error'))<div class="alert alert-success">{{Session::get('error')}}</div>@endif -->
<thead>
    
    <tr class="table-dark">
        <th>STT</th>
        <th style="width :90px">Mã thiết bị</th>
        <th style="width :400px">Tình trạng</th>
        <th>Lab</th>
        <th>Thao tác</th>
    </tr>
</thead>
<tbody style="text-align: center" >
<?php $i =1 ?>
    @forelse ($content as  $item)
        @if($item->options->baocao==1)
            <tr >
            <td><i>{{$i}}</i></td>
                <td>
                    <p> {{ $item->name}}</p>
                    <img id="avatar" width="200px" src="{{asset($item->options->image)}}">
                </td>       
                <td>      
                    {!!$item->options->tinhtrang2!!}    
                </td>
                <td>      
                    {{($item->options->id_lab==1 ? 'P201' : '')}}    
                    {{($item->options->id_lab==2 ? 'P202' : '')}}  
                    {{($item->options->id_lab==3 ? 'P203' : '')}}  
                    {{($item->options->id_lab==4 ? 'P204' : '')}}  
                    {{($item->options->id_lab==5 ? 'P205' : '')}}  
                </td>
                <td>
                
                <a href="{{asset('/cart/xoa/'.$item->rowId)}}"><button type="button" class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>
        @endif
    <?php $i++ ?>
    @empty
    <tr class="table-dark">
        <th colspan="5" class="text-center">Danh sách trống</th>
    </tr>
    @endforelse
</tbody>
</table>

</form>
@endsection