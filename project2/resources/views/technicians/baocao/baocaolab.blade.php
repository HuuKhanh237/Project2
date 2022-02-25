@extends('technicians.layouts.mau')
@section('title','Báo cáo Lab')
@section('content')


<h1 style="text-align: center;">Báo cáo Lab</h1>
<table id="home" class="table table-bordered" style="width: 100%; text-align: center;">

  <thead>

    <tr class="table table-dark">
    <th style="width: 50px;">ID</th>
      <th style="width: 150px;">Ngày giờ</th>
      <th>Nội dung</th>
      <th style="width: 100px;">Trạng thái</th>
      <th style="width: 150px;">Tên nhân viên</th>
      <th style="width: 120px;">Báo cáo chi tiết</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($baocao as $item)
    <tr>
      <td>{{ $item->id}}</td>
      <td>{{ $item->ngaygio}}</td>
      <td>
        <p>{!!$item->noidung!!}</p>
      </td>
      <td>
        @if($item->trangthai==0) 
        <span>Chưa duyệt</span>
        @else
        <span>Đã duyệt</span>
        @endif
      </td>

      <td>{{$item->id_users==1?'Vương Hữu Khánh':''}}
        {{$item->id_users==2?'Hoàng Tuấn Anh':''}}
      </td>
      <td>
        <a class="btn_customer_action js_order_item" href="{{asset('/baocaolab/ct/'.$item->id)}}"><span style="font-size: 40px;" class="iconify" data-icon="tabler:report-analytics"></a>
      </td>


      <!-- <td><a href="{{'xoatb/'.$item->id}}">Xóa</a></td> -->
    </tr>
    @empty
    <tr class="table-dark">
      <th colspan="4">Danh sách trống</th>
    </tr>
    @endforelse
  </tbody>
</table>
<div class="modal" id="myModalOrder" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
