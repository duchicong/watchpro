@extends('back-end.layouts.master')
@section('title_tag_admin','Thêm sản phẩm mới')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div><!--/.row-->
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
					<h1 class="page-header"><small>Thêm sản phẩm: </small></h1>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<select name="txtTinhtrang" id="inputSltTinhtrang" class="form-control page-header">
	      				<option value="1" selected="selected" >Còn hàng</option>
	      				<option value="0" >Hết hàng</option>
		      		</select>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<select name="txttrangthai" id="inputSlttrangthai" class="form-control page-header">
	      				<option value="1" selected="selected" >Công khai</option>
	      				<option value="0" >Riêng tư</option>
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
					      			<option value="">--Loại sản phẩm--</option>
				      				@foreach($cate as $cat)
				      					<option value="{{$cat -> id}}" >{{$cat->ten_loai_san_pham}}</option> 	
				      				@endforeach
					      		</select>
				      	
					      		<div class="form-group">
					      			<label for="input-id">Tên sản phẩm</label>
					      			<input type="text" name="txtname" id="inputTxtname" class="form-control" value="" required="required" >
					      		</div>
				      		</div>
				      		<div class="form-group">
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Thẻ liên kết:</label>
						      			<input type="text" name="txttags" id="inputTxttags" class="form-control" value="" placeholder="Thẻ sản phẩm cách nhau bởi dấu phẩy." >
					      			</div>
					      		
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Thương hiệu</label>
						      			<input type="text" name="inputTxtThuonghieu" id="inputTxtThuonghieu" class="form-control" value=""  >
						      		</div>
						      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Xuất xứ</label>
						      			<input type="text" name="txtHangsx" id="txtHangsx" class="form-control" value="">
						      		</div>

						      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Giá tiền</label>
						      			<input type="text" name="txtGiatien" id="txtGiatien" value="" class="form-control" required="required">
						      		</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
						      			<label for="input-id">Khuyến mãi</label>
						      			<input type="text" name="txtkhuyen_mai" id="txtkhuyen_mai" value="" class="form-control">
						      		</div>

						      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Chiết khấu</label>
						      			<input type="text" name="txtChietkhau" id="txtChietkhau" value="" class="form-control" >
						      		</div>

						      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						      			<label for="input-id">Bảo hành</label>
						      			<input type="text" name="txtBaohanh" id="txtBaohanh" value="10 năm" class="form-control" >
						      		</div>
						      	</div>
						    </div>
				      		<div class="form-group">
				      			<label for="input-id"> Chi tiết thông số kĩ thuật sản phẩm</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Kiểu dáng : <input type="text" name="txtKieudang" id="txtKieudang" value="" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Năng lượng : <input type="text" name="txtNangluong" id="txtNangluong" value="" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Độ chịu nước : <input type="text" name="txtDochiunuoc" id="txtDochiunuoc" value="" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">	
					      				Đường kính mặt	<input type="text" name="txtDkmat" id="txtDkmat" value="" class="form-control">
					      			</div>
					      		</div>
					      		<div class="row">
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Chất liệu dây : <input type="text" name="txtclDay" id="txtclDay" value="" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Chất liệu vỏ : <input type="text" name="txtclVo" id="txtclVo" value="" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Chất liệu mặt : <input type="text" name="txtclMat" id="txtclMat" value="" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Kích thước <input type="text" name="txtkichthuoc" id="txtkichthuoc" value="" class="form-control" >
					      			</div>
					      		</div>
					      				      			
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Ảnh đại diện : <input type="file" name="txtimg" accept="image/png, image/jpg" id="inputtxtimg" class="form-control">
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Ảnh chi tiết sản phẩm</label>
				      			<div class="row">
					      			@for( $i=1; $i<=4; $i++)
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					      				Hình ảnh {!!$i!!} : <input type="file" name="txtdetail_img[]" value="" accept="image/png, image/jpg" id="inputtxtdetail_img" class="form-control">
					      			</div>
					      			@endfor
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Đánh giá chi tiết sản phẩm</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id">Tóm tắt đánh giá</label>
					      				<textarea name="txtre_Intro" id="inputTxtre_Intro" class="form-control" value="" rows="2"></textarea>
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
					      				<textarea name="txtReview" id="inputtxtReview" class="form-control" rows="4" value=""></textarea>
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
				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm sản phẩm" class="button" />
				      			      	
						</div>
					</div>
				</div>
			</div><!--/.row-->	
		</form>		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection