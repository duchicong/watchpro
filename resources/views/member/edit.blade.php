@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h3>Cập nhật thông tin khách hàng : {!!Auth::user()->name !!}</h3>
				<form action="" method="POST" role="form">
		      		{{ csrf_field() }}
		      		<div class="form-group">
		      			<label for="input-id">Tên Khách hàng</label>
		      			<input type="text" name="txtName" id="inputTxtName" class="form-control" value="{!!Auth::user()->name!!}" required="required">
		      		</div>
		      		<div class="form-group">
		      			<label for="input-id">Địa chỉ</label>
		      			<input type="text" name="txtAddress" id="inputTxtAddress" class="form-control" value="{!!Auth::user()->address!!}" required="required">
		      		</div>
		      		<div class="form-group">
		      			<label for="input-id">Số điện thoại</label>
		      			<input type="text" name="txtPhone" id="inputTxtphone" class="form-control" value="{!!Auth::user()->phone !!}" required="required">
		      		</div>
		      		<div class="form-group">
		      			<label for="input-id">Email</label>
		      			<input type="email" name="txtEmail" id="inputTxtEmail" class="form-control" value="{!!Auth::user()->email!!}" required="required">
		      		</div>
		      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Cập nhập" class="button" />
		      	</form>				
				
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
				
			</div>
		</div>
	</div>
@endsection
