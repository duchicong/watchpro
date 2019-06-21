@extends('back-end.layouts.master')
@section('title_tag_admin')
Thêm sản phẩm
@stop
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Thêm mới danh mục</small></h1>
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
						<form action="" method="POST" role="form" enctype="multipart/form-data">
				      		<input type="hidden" name="_token" value="{{csrf_token()}}">
				      		<div class="form-group">
				      			<label for="input-id">Tên danh mục</label>
				      			<input type="text" name="txtCateName" id="inputTxtCateName" class="form-control" value="" required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Giới thiệu</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<textarea name="txtre_intro" id="txtre_intro" class="form-control"  rows="2"></textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtre_intro',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      		</div>				      			
				      		</div>	
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Hình ảnh : <input type="file" name="txtimg" accept="image/png, image/jpg" id="inputtxtimg" value="" class="form-control">
					      			</div>
					      		</div>				      			
				      		</div>
				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm danh mục" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection