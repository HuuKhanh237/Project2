
@extends('technicians.layouts.mau')
@section('title','Báo cáo Kho')
@section('content')
<?php
use Gloudemans\Shoppingcart\Facades\Cart;
// $content=Cart::content()->where(Cart::content()->options['baocao'],1);
 $content=Cart::content();

// echo'<pre>';
// print_r($content);
// echo'</pre>';
?>
   <h1 style="text-align: center;">Báo cáo Kho</h1>
   @foreach($users as $item)
   <a style="float: right;" href="{{asset('/baocaok/check/'.$item->id)}}"><button type="button" class="btn btn-warning">Báo cáo</button></a>
   @endforeach
   <a style="float: right;" href="{{asset('/cart1/xoak/all')}}"><button type="button" class="btn btn-danger">Xóa tất cả</button></a>
  <form class="from-horizontal" method="post">
      @csrf
  
   <table id="home" class="table table-bordered" style="text-align: center;">

   <!-- @if(Session('success'))<div class="alert alert-success">{{Session::get('success')}}</div>@endif
		@if(Session('error'))<div class="alert alert-success">{{Session::get('error')}}</div>@endif -->
<thead>
    
    <tr class="table-dark">
        <th>STT</th>
        <th style="width :90px">Linh kiện</th>
        <th style="width :400px">Tình trạng</th>
        <th>Kho</th>
        <th>Thao tác</th>
    </tr>
</thead>
<tbody style="text-align: center" >
<?php $i =1 ?>
    @forelse ($content as  $item)
        @if($item->options->baocao == 0)
            <tr >
            <td><i>{{$i}}</i></td>
                <td>
                    <p> {{$item->name}}</p>
                    <img id="avatar" width="200px" src="{{asset($item->options->image)}}">
                </td>       
                <td>      
                    {{$item->options->tinhtrang1==1 ? 'Tốt' : 'Hỏng'}}    
                </td>
                <td>      
                    {{($item->options->id_kho==1 ? 'Kho Tầng 3' : '')}}    
                    {{($item->options->id_kho==2 ? 'Kho Tầng 5' : '')}}  
                
                </td>
                <td>
                
                <a href="{{asset('/cart1/xoak/'.$item->rowId)}}"><button type="button" class="btn btn-danger">Xóa</button></a>
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