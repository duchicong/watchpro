@extends('back-end.layouts.master')
@section('title_tag_admin','Thêm bài viết mới')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="route('home')"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Thêm bài viết mới</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Thêm bài viết mới</small></h1>
			</div>
		</div><!--/.row-->
		<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">					
					<div class="panel-body">
						@if (count($errors) > 0)
						    <div class="alert alert-danger">
					            @foreach ($errors->all() as $error)
					               {{ $error }}
					            @endforeach
						    </div>
					    @elseif (Session()->has('flash_level'))
					    	<div class="alert alert-success">
						        {!! Session::get('flash_massage') !!}
						    </div>
						@endif
						
				      		{{ csrf_field() }}
				      		<div class="form-group">
				      			<label for="input-id">Tên bài viết</label>
				      			<input type="text" name="txtChuDe" id="inputTxtChuDe" class="form-control" value="" required="required">
				      		</div>
				      		<div class="form-group">
			      				<label for="input-id">Miêu tả danh mục</label>
			      				<textarea name="txtMieuTa" id="txtMieuTa" class="form-control" value="" rows="2"></textarea>
			      			</div>
			      			<div class="form-group">
			      				<label for="input-id">Nội dung chi tiết</label>
			      				<textarea name="txtNoiDung" id="txtNoiDung" class="form-control" value="" rows="2"></textarea>
			      				<script type="text/javascript">
									var editor = CKEDITOR.replace('txtNoiDung',{
										language:'vi',
										filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
										filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
										filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
										filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
									});
								</script>
				      		</div>	      	
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="form-group">
		      				<label for="input-id">Tác giả bài viết</label>
		      				<input type="text" name="txtTacGia" id="inputTxtTacGia" class="form-control">
		      			</div>
						<div class="form-group">
		      				<label for="input-id">Ảnh đại diện</label>
		      				<input type="file" name="txtAnh" id="inputTxtAnh" class="form-control">
						</div>
						<div class="form-group">
		      				<label for="input-id">Trạng thái</label>
		      				<select name="sltTrangThai" class="form-control">
								<option value="1">Công khai</option>
								<option value="0">Riêng tư</option>
							</select>
		      			</div>
		      			<div class="form-group">
		      				<label for="input-id">Danh mục</label>
		      				@if(count($cat) > 0)
		      				<select name="sltDanhMuc" class="form-control">
		      					@foreach($cat as $cats)
								<option value="{{$cats['id']}}">{{$cats['ten_danh_muc']}}</option>
								@endforeach
							</select>
							@else
								<a href="{!!url('admin/danh-muc-blog/add')!!}" title="">
									<button type="button" class="btn btn-primary">Tạo Danh mục</button>
								</a>
							@endif
		      			</div>
		      			<input type="submit" name="btnCateAdd" class="pull-right btn btn-success" value="Đăng bài viết" class="button" />
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		</form>		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection