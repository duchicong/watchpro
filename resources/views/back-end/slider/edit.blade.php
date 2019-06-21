@extends('back-end.layouts.master')
@section('title_tag_admin','Chỉnh sửa banner')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{ url('/admin') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Chỉnh sửa banner</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-body">
					<span>Chỉnh sửa banner</span>
					<a href="{!!url('admin/slider/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm Banner mới</button></a>
				</div>
			</div>
		</div><!--/.row-->
		<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-8">
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
						
			      		{{ csrf_field() }}
			      		<div class="form-group">
			      			<label for="input-id">Tên chủ đề</label>
			      			<input type="text" name="txtChuDe" id="inputTxtChuDe" class="form-control" value="{!! old('txtChuDe', isset($data['chu_de']) ? $data['chu_de'] : null)!!}" required="required">
			      		</div>  
			      		<div class="form-group">
		      				<label for="inputTxtAnh">Ảnh đại diện</label>
		      				<input type="file" name="txtAnh" id="inputTxtAnh" value="{!! old('txtAnh', isset($data['anh']) ? $data['anh'] : null)!!}" class="form-control" {!! old('txtAnh', isset($data['anh']) ? "" : "required='required'")!!} />
						 
						@if($data['anh'])
	      					<p style="height: 20px;"></p>
							<img src="{{ url('public/uploads/banners/'.$data['anh']) }}" style="max-width: 200px;max-height: 200px;">
	      				@else
							<p>Bắt buộc phải có banner ở đây!</p>
	      				@endif
	      				</div>
						<input type="submit" name="btnslideAdd" class="pull-right btn btn-success" value="Cập nhật" class="button" /> 	
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		</form>		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection