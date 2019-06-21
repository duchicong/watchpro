@extends('back-end.layouts.master')
@section('title_tag_admin')
Chỉnh sửa: {!!$edit_pro -> ten_san_pham!!}
@stop
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{route('home')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">{!!$edit_pro -> ten_san_pham!!}</li>
			</ol>
		</div><!--/.row-->
		<div style="margin-top: 10px;"></div>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
				<a href="{{route('getaddpro')}}" class="btn btn-success">Thêm sản phẩm mới</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-right">
				<span>Xem chi tiết sản phẩm </span><a href="{!!url($link->slug_loai_san_pham.'/'.$link->slug)!!}" target="_blank">tại đây.</a>
			</div>
		</div>
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
					<h1 class="page-header"><small>Chỉnh sửa: {!!$edit_pro -> ten_san_pham!!}</small></h1>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<select name="txtTinhtrang" id="inputSltTinhtrang" class="form-control page-header">
	      				<option value="1" {{ ($edit_pro->tinh_trang==1)? 'selected="selected"' : null }}>Còn hàng</option>
	      				<option value="0" {{ ($edit_pro->tinh_trang==0)? 'selected="selected"' : null }}>Hết hàng</option>
		      		</select>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<select name="txttrangthai" id="inputSlttrangthai" required class="form-control page-header">
	      				<option value="1" {{ ($edit_pro->trang_thai==1)? 'selected="selected"' : '' }}  >Công khai</option>
	      				<option value="0" {{ ($edit_pro->trang_thai==0)? 'selected="selected"' : '' }} >Riêng tư</option>
		      		</select>
				</div>
			</div><!--/.row-->		
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">					
						<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
						
							<input type="hidden" name="_token" value="{{csrf_token()}}">
				      		<div class="form-group">
					      		<label for="input-id">Chọn danh mục</label>
					      		<select name="sltCate" id="inputSltCate" required class="form-control">
					      			@foreach($cate as $cat)
				      					@if($cat->id==$edit_pro->id_danhmucsanpham)
				      						<option value="{{$cat->id}}" selected="selected">{{$cat->ten_loai_san_pham}}</option>
										@else
											<option value="{{$cat->id}}" >{{$cat->ten_loai_san_pham}}</option>
				      					@endif 	
				      				@endforeach
					      		</select>
				      	
					      		<div class="form-group">
					      			<label for="input-id">Tên sản phẩm</label>
					      			<input type="text" name="txtname" id="inputTxtname" class="form-control" value="{!! old('txtname', isset($edit_pro['ten_san_pham']) ? $edit_pro['ten_san_pham'] : null)!!}" required="required" >
					      		</div>
				      		</div>
				      		<div class="form-group">
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Thẻ liên kết:</label>
						      			<input type="text" name="txttags" id="inputTxttags" class="form-control" value="{!! old('txttags', isset($edit_pro['tags']) ? $edit_pro['tags'] : null)!!}" placeholder="Thẻ sản phẩm cách nhau bởi dấu phẩy." >
					      			</div>
					      		
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Thương hiệu</label>
						      			<input type="text" name="inputTxtThuonghieu" id="inputTxtThuonghieu" class="form-control" value="{!! old('inputTxtThuonghieu', isset($edit_pro['thuong_hieu']) ? $edit_pro['thuong_hieu'] : null)!!}"  >
						      		</div>
						      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Xuất xứ</label>
						      			<input type="text" name="txtHangsx" id="txtHangsx" class="form-control" value="{!! old('txtHangsx', isset($edit_pro['hang_san_xuat']) ? $edit_pro['hang_san_xuat'] : null)!!}">
						      		</div>

						      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Giá tiền</label>
						      			<input type="text" name="txtGiatien" id="txtGiatien" value="{!! old('txtGiatien', isset($edit_pro['gia_tien']) ? $edit_pro['gia_tien'] : null)!!}" class="form-control" required="required">
						      		</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
						      			<label for="input-id">Khuyến mãi</label>
						      			<input type="text" name="txtkhuyen_mai" id="txtkhuyen_mai" value="{!! old('txtkhuyen_mai', isset($edit_pro['khuyen_mai']) ? $edit_pro['khuyen_mai'] : null)!!}" class="form-control">
						      		</div>

						      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Chiết khấu</label>
						      			<input type="text" name="txtChietkhau" id="txtChietkhau" value="{!! old('txtChietkhau', isset($edit_pro['chiet_khau']) ? $edit_pro['chiet_khau'] : null)!!}" class="form-control" >
						      		</div>

						      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Bảo hành</label>
						      			<input type="text" name="txtBaohanh" id="txtBaohanh" value="{!! old('txtBaohanh', isset($edit_pro['bao_hanh']) ? $edit_pro['bao_hanh'] : null)!!}" class="form-control" >
						      		</div>
						      	</div>
						    </div>
				      		<div class="form-group">
				      			<label for="input-id"> Chi tiết thông số kĩ thuật sản phẩm</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Kiểu dáng : <input type="text" name="txtKieudang" id="txtKieudang" value="{!! old('txtKieudang', isset($edit_pro['kieu_dang']) ? $edit_pro['kieu_dang'] : null)!!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Năng lượng : <input type="text" name="txtNangluong" id="txtNangluong" value="{!! old('txtNangluong', isset($edit_pro['nang_luong_su_dung']) ? $edit_pro['nang_luong_su_dung'] : null)!!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Độ chịu nước : <input type="text" name="txtDochiunuoc" id="txtDochiunuoc" value="{!! old('txtDochiunuoc', isset($edit_pro['do_chiu_nuoc']) ? $edit_pro['do_chiu_nuoc'] : null)!!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">	
					      				Đường kính mặt	<input type="text" name="txtDkmat" id="txtDkmat" value="{!! old('txtDkmat', isset($edit_pro['duong_kinh_mat']) ? $edit_pro['duong_kinh_mat'] : null)!!}" class="form-control">
					      			</div>
					      		</div>
					      		<div class="row">
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Chất liệu dây : <input type="text" name="txtclDay" id="txtclDay" value="{!! old('txtclDay', isset($edit_pro['chat_lieu_day']) ? $edit_pro['chat_lieu_day'] : null)!!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Chất liệu vỏ : <input type="text" name="txtclVo" id="txtclVo" value="{!! old('txtclVo', isset($edit_pro['chat_lieu_vo']) ? $edit_pro['chat_lieu_vo'] : null)!!}" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Chất liệu mặt : <input type="text" name="txtclMat" id="txtclMat" value="{!! old('txtclMat', isset($edit_pro['chat_lieu_mat']) ? $edit_pro['chat_lieu_mat'] : null)!!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Kích thước <input type="text" name="txtkichthuoc" id="txtkichthuoc" value="{!! old('txtkichthuoc', isset($edit_pro['kich_thuoc']) ? $edit_pro['kich_thuoc'] : null)!!}" class="form-control" >
					      			</div>
					      		</div>
					      				      			
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Ảnh đại diện : <input type="file" name="txtimg" accept="image/png, image/jpg" id="inputtxtimg" value="{!! old('txtimg', isset($edit_pro['anh']) ? $edit_pro['anh'] : null)!!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Ảnh cũ: <img src="{!!url('public/uploads/products/'.$edit_pro->anh)!!}" alt="{!!$edit_pro->chu_de!!}" width="auto" height="100" alt="" class="thumbnail" style="margin-top:10px;">
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Ảnh chi tiết sản phẩm</label>
				      			<div class="row">
					      			@for( $i=1; $i<=4; $i++)
						      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						      				Hình ảnh {{$i}} : <input type="file" name="txtdetail_img[]" value="{!! old('txtdetail_img', isset($detail_img['imgs']) ? $detail_img['imgs'] : null)!!}" accept="image/png, image/jpg" id="inputtxtdetail_img" class="form-control">
						      			</div>
					      			@endfor
					      			<div class="col-md-12">
					      			@if(count($detail_img)>0)
										<div style="display: inline-flex;">
											@foreach($detail_img as $img)
											<img src="{!!url('public/uploads/products/details/'.$img->imgs)!!}" width="auto" height="100" class="thumbnail" style="margin-top:10px;">
											@endforeach
										</div>
					      			@endif
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Đánh giá chi tiết sản phẩm</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Tóm tắt đánh giá</label>
					      				<textarea name="txtre_Intro" id="inputTxtre_Intro" class="form-control" value="" rows="2">
					      					{!! old('txtre_Intro', isset($edit_pro['gioi_thieu']) ? $edit_pro['gioi_thieu'] : null)!!}
					      				</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtre_Intro',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Bài đánh giá chi tiết</label>
					      				<textarea name="txtReview" id="inputtxtReview" class="form-control" rows="4" value="">
					      					{!! old('txtReview', isset($edit_pro['noi_dung']) ? $edit_pro['noi_dung'] : null)!!}
					      				</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtReview',{
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
				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Cập nhật" class="button" />
				      			      	
						</div>
					</div>
				</div>
			</div><!--/.row-->	
		</form>		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection