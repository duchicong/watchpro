@extends('back-end.layouts.master')
@section('title_tag_admin','Thêm Banner mới')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{ url('/admin') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Thêm banner</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Thêm banner mới</small></h1>
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
			      			<input type="text" name="txtChuDe" id="inputTxtChuDe" class="form-control" value="" required="required">
			      		</div>  
			      		<div class="form-group">
		      				<label for="input-id">Ảnh đại diện</label>
		      				<input type="file" name="txtAnh" id="inputTxtAnh" class="form-control">
						</div> 
						<input type="submit" name="btnslideAdd" class="pull-right btn btn-success" value="Thêm slider" class="button" /> 	
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		</form>		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection