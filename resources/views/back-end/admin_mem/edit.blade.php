@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sửa thông tin thành viên</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Sửa thông tin thành viên</small></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body">
						@if (count($errors) > 0)
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
					    @elseif (Session()->has('flash_level'))
					    	<div class="alert alert-success">
						        {!! Session::get('flash_massage') !!}
						    </div>
						@endif
						<form action="" method="POST" role="form">
				      		{{ csrf_field() }}
				      		<div class="form-group">
					      		<label for="input-id"> Chọn Quyền </label>
					      		<select name="sltCate" id="inputSltCate" class="form-control">
					      		@if($edit_ad->level == 1)
					      			<option value="1">- Quản trị --</option>
					      		@else 	
					      			<option value="2">- Nhân viên --</option> 		
					      		@endif
					      		</select>
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Tên thành viên</label>
				      			<input type="text" name="txtName" id="inputTxtName" class="form-control" value="{{$edit_ad->name}}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="">Email</label>
				      			<input type="email" name="txtEmail" id="inputTxtEmail" class="form-control" value="{{$edit_ad->email}}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="">Số điện thoại</label>
				      			<input type="text" name="txtPhone" id="txtPhone" class="form-control" value="{{$edit_ad->phone}}" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="">Địa chỉ</label>
				      			<input type="text" name="txtAddress" id="txtAddress" class="form-control" value="{{$edit_ad->address}}" required="required">
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