@extends('back-end.layouts.master')
@section('title_tag_admin','Danh mục bài viết')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh mục bài viết</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Chỉnh sửa: {{ $data['ten_danh_muc'] }}</small></h1>
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
						        <ul>
						            {!! Session::get('flash_massage') !!}	
						        </ul>
						    </div>
						@endif
						<form action="" method="POST" role="form">
				      		{{ csrf_field() }}
				      		<div class="form-group">
				      			<label for="input-id">Tên danh mục</label>
				      			<input type="text" name="txtCateName" id="inputTxtCateName" class="form-control" value="{!! old('txtCateName', isset($data['ten_danh_muc']) ? $data['ten_danh_muc'] : null)!!}" required="required">
				      		</div>

				      		<div class="form-group">
			      				<label for="input-id">Miêu tả danh mục</label>
			      				<textarea name="txtMieuTa" id="txtMieuTa" class="form-control" rows="2" >
			      					{!! old('txtMieuTa', isset($data['mieu_ta']) ? $data['mieu_ta'] : null) !!}
			      				</textarea>
			      				<script type="text/javascript">
									var editor = CKEDITOR.replace('txtMieuTa',{
										language:'vi',
										filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
										filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
										filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
										filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
									});
								</script>
				      		</div>
				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Cập nhật" class="button" />
				      	</form>					      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection