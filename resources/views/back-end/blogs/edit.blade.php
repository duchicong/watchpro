@extends('back-end.layouts.master')
@section('title_tag_admin')
Chỉnh sửa: {{$data->chu_de}}
@stop
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{ route('home') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">{{$data->chu_de}}</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel panel-default">
			<div class="panel-heading">
				Chỉnh sửa: {{ $data->chu_de }}
				<a href="{!!url('admin/blog/del/'.$data->id)!!}" title=""><button type="button" class="btn btn-danger pull-right">Xóa bài viết này</button></a>
				<a href="{!!url('admin/blog/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới bài viết</button></a>
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
				      			<label for="input-id">Tên bài viết</label>
				      			<input type="text" name="txtChuDe" id="inputTxtChuDe" class="form-control" value="{!! old('txtChuDe', isset($data['chu_de']) ? $data['chu_de'] : null)!!}" required="required">
				      		</div>
				      		<div class="form-group">
			      				<label for="input-id">Miêu tả bài viết</label>
			      				<textarea name="txtMieuTa" id="txtMieuTa" class="form-control trimBlank" rows="2">
				      				{!! old('txtMieuTa', isset($data['mieu_ta']) ? $data['mieu_ta'] : null)!!}
				      			</textarea>
			      			</div>
			      			<div class="form-group">
			      				<label for="input-id">Nội dung chi tiết</label>
			      				<textarea name="txtNoiDung" id="txtNoiDung" class="form-control" value="" rows="2">
			      					{!! old('txtNoiDung', isset($data['noi_dung']) ? $data['noi_dung'] : null)!!}
			      				</textarea>
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
		      				<input type="text" name="txtTacGia" id="inputTxtTacGia" class="form-control" value="{!! old('txtTacGia', isset($data['tac_gia']) ? $data['tac_gia'] : null)!!}">
		      			</div>
						<div class="form-group">
		      				<label for="input-id">Ảnh đại diện</label>
		      				<input type="file" name="txtAnh" id="inputTxtAnh" class="form-control"  value="{!! old('txtAnh', isset($data['link_anh']) ? $data['link_anh'] : null)!!}">
		      				@if($data['link_anh'])
		      					<p style="height: 20px;"></p>
								<img src="{{ url('public/uploads/blogs/'.$data['link_anh']) }}" style="max-width: 200px;max-height: 200px;">
		      				@else
								<p>Cập nhật ảnh đại diện cho bài viết này!</p>
		      				@endif
						</div>
						<div class="form-group">
		      				<label for="input-id">Trạng thái</label>
		      				<select name="sltTrangThai" class="form-control">
								<option value="1" {!! old('sltTrangThai', ($data['trang_thai']==1) ? 'selected' : null)!!}>Công khai</option>
								<option value="0" {!! old('sltTrangThai', ($data['trang_thai']==0) ? 'selected' : null)!!}>Riêng tư</option>
							</select>
		      			</div>
		      			<div class="form-group">
		      				<label for="input-id">Danh mục</label>
		      				@if(count($cat) > 0)
		      				<select name="sltDanhMuc" class="form-control">
		      					@foreach($cat as $cats)
		      					@if($data['danh_muc_id']==$cats['id'])
									<option value="{{$cats['id']}}" selected>{{$cats['ten_danh_muc']}}</option>
		      					@else
								<option value="{{$cats['id']}}">{{$cats['ten_danh_muc']}}</option>
								@endif
								@endforeach
							</select>
							@else
								<a href="{!!url('admin/danh-muc-blog/add')!!}" title="">
									<button type="button" class="btn btn-primary">Tạo Danh mục</button>
								</a>
							@endif
		      			</div>
		      			<input type="submit" name="btnCateAdd" class="pull-right btn btn-success" value="Cập nhật" class="button" />
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		</form>		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection