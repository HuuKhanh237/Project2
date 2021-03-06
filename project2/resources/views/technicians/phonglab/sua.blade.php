@extends('technicians.layouts.mau')
@section('title','Sửa thiết bị')
@section('content')



<div class="col-xs-4 col-xs-offset-4" style="width: 600px; margin:auto">
	<center>
		<h4>Sửa thiết bị</h4>
	</center>
	<form method="post" action="/suatb" enctype="multipart/form-data">
		@csrf
		@foreach ($dulieuthietbi as $item)


		<input type="hidden" id="id" name="id" value="{{ $item->id}}" />
		<input type="hidden" id="id" name="id_lab" value="{{ $item->id_lab}}" />
		<!-- <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
		<input type="hidden" id="id" name="id" value="{{ $item->id}}" /> -->
		<div class="form-group">
			<label for="tenhocsinh">Tên thiết bị</label>
			<input style="border-radius: 10px; height: 50px;" type="text" class="form-control" id="name" name="name" placeholder="Tên thiết bị" maxlength="255" value="{{$item->name}}" required />
		</div>

		<div class="col-auto">
			<label for="autoSizingSelect">Tình Trạng</label>
			<select style="border-radius: 10px; height: 50px;" class="form-select" name="tinhtrang1" id="autoSizingSelect">
				<option value="1" @if ($item->tinhtrang1 == 1)
					{{'selected'}}
					@endif
					>Tốt
				</option>
				<option value="0" @if ($item->tinhtrang1 == 0)
					{{'selected'}}
					@endif
					>Hỏng
				</option>
			</select>
		</div><br>
		<div class="form-floating">
			<span>Lỗi</span>
			<textarea name="tinhtrang2" class="form-control" placeholder="" id="ckeditor2" style="border-radius: 10px;height: 150px" value="{{$item->tinhtrang2}}">{{$item->tinhtrang2}}</textarea>
			
		</div><br>
		<!-- <div class="form-floating">
	<textarea name="mota" class="form-control" placeholder="" id="floatingTextarea2" style="border-radius: 10px;height: 150px" value="{{$item->tinhtrang2}}">{{$item->tinhtrang2}}</textarea>
	<label for="floatingTextarea2">Báo lỗi</label>
</div> -->

		<br>
		<div class="form-floating">
			<span>Mô tả</span>
			<textarea name="mota" style="resize:none" class="form-control" placeholder="" id="ckeditor1" style="border-radius: 10px;height: 150px" value="{{$item->mota}}">{{$item->mota}}</textarea>
			
		</div><br>
		<div class="col-md-4">
			<label for="validationDefault01" class="form-label">Image</label>
			<input name="img" type="file" class="form-control" id="validationDefault01">
			<img id="avatar" width="200px" src="{{asset($item->image)}}">
		</div>

		@endforeach
		<center><button style="height: 40px ; width: 300px;margin-top: 50px; margin-bottom: 50px" type="submit" class="btn btn-dark">Sửa lại</button></center>
	</form>
</div>


@endsection