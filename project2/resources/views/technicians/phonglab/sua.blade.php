@extends('technicians.layouts.mau')
@section('title','Sửa thiết bị')
@section('content')



<div class="col-xs-4 col-xs-offset-4">
	<center><h4>Sửa thiết bị</h4></center>
	<form method="post" action="/suatb">
        @csrf
		@foreach ($dulieuthietbi as $item)
			
		
		<input type="hidden" id="id" name="id" value="{{ $item->id}}" />
		<input type="hidden" id="id" name="id_lab" value="{{ $item->id_lab}}" />
		{{-- <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" /> --}}
		{{-- <input type="hidden" id="id" name="id" value="{{ $dulieuthietbi->id}}" /> --}}
		<div class="form-group">
			<label for="tenhocsinh">Tên thiết bị</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Tên thiết bị" maxlength="255" value="{{$item->name}}" required />
		</div>
		
		 <div class="col-auto">
			<label  for="autoSizingSelect">Tình Trạng 1</label>
			<select class="form-select" name="tinhtrang1" id="autoSizingSelect"  >
			  <option value="1"
			  @if ($item->tinhtrang1 == 1)
				  {{'selected'}}
			  @endif
			  >Tốt</option>
			  <option value="0"
			  @if ($item->tinhtrang1 == 0)
			  {{'selected'}}
		  @endif
			  >Hỏng</option>
			</select>
		  </div>
		<div class="form-group">
			<label for="sodienthoai">Tình Trạng 2</label>
			<input type="text" class="form-control" id="tinhtrang2" name="tinhtrang2" placeholder="Tình Trạng 2" maxlength="255" value="{{$item->tinhtrang2}}" required />
		</div>
		
		  <br>
		  <div class="form-floating">
            <textarea name="mota" class="form-control" placeholder="" id="floatingTextarea2" style="border-radius: 10px;height: 150px" value="" >{{ $item->mota}}</textarea>
            <label for="floatingTextarea2">Mô tả</label>
        </div>
		@endforeach
		<center><button type="submit" class="btn btn-primary">Sửa lại</button></center>
	</form>
</div>


@endsection