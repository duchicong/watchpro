
@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Khách hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Sửa thông tin khách hàng</small></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body">
						
						<form action="" method="POST" role="form">
				      		{{ csrf_field() }}
				      		<div class="form-group">
				      			<label for="input-id">Tên Khách hàng</label>
				      			<input type="text" name="txtName" id="inputTxtName" class="form-control" value="{{$edit_user->ten_khach_hang}}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Địa chỉ</label>
				      			<input type="text" name="txtAddress" id="inputTxtAddress" class="form-control" value="{{$edit_user->dia_chi_khach_hang}}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Số điện thoại</label>
				      			<input type="text" name="txtPhone" id="inputTxtphone" class="form-control" value="{{$edit_user->sdt_khach_hang}}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Email</label>
				      			<input type="email" name="txtEmail" id="inputTxtEmail" class="form-control" value="{{$edit_user->email_khach_hang}}" required="required">
				      		</div>
				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Cập nhập" class="button" />
				      	</form>					      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection