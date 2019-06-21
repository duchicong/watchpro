@extends('back-end.layouts.master')
@section('content')

<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10"><div class="form-group">
								<label for="inputLoai" class="col-sm-3 control-label"><strong> Tìm kiếm sản phẩm </strong></label>
								<div class="col-md-3">
									
								</div>
								<div class="col-md-6" >
									<div class="searchsp" style="margin-top: -10px;">
										  <form role="search" class="navbar-form navbar-left" method="get" action="{{route('timkiem')}}">
									        <div class="form-group">
									          <input type="text" class="form-control" name="key" placeholder="Tìm kiếm sản phẩm" style="width: 250px;" />
									        </div>
									        <button style="margin-top: -93px; margin-left: 250px;" type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
									      </form>	
									</div>
											
								</div>
							</div>
								
								
							</div>
							<div class="col-md-2">
								
									<a href="{!! route('getaddpro') !!}" title=""><button type="button" class="btn btn-primary pull-right" >Thêm Mới Sản Phẩm</button></a>
								
							</div>
						</div> 
						
					</div>
					
					<div class="panel-body" style="font-size: 12px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Hình ảnh</th>
										<th>Tên sản phẩm</th>
										<th>Tóm tắt chức năng</th>
										<th>Thương hiệu</th>
										<th>Giá bán</th>
										<th>Trạng thái</th>
										<th>Hành động</th>
									</tr>
								</thead>
								<tbody>
										@foreach($product as $pro)
										<tr>
											<td>{{$pro ->id}}</td>
											<td><img src="{{url('public/uploads/products/'.$pro->anh)}}" alt="watch" width="50" height="40"></td>
											<td>{{$pro -> ten_san_pham}}</td>
											<td>{!!$pro -> gioi_thieu!!}</td>
											<td>{{$pro -> thuong_hieu}}</td>
											<td>{{$pro -> gia_tien}} đ</td>
											<td>
											@if($pro->trang_thai == 1)	
												<span style="color:blue;">Còn hàng</span>
											@else
												<span style="color:red;">Hết hàng</span>
											@endif
											</td>
											<td>
											    <a href="{!!url('admin/san-pham/edit/'.$pro->id)!!}" title="Sửa"><span class="glyphicon glyphicon-edit">Edit</span> </a>
											    <a href="{!!url('admin/san-pham/del/'.$pro->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">Remove</span> </a>
											</td>
										</tr>
										@endforeach
								</tbody>
							</table>
						</div>
					
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->

<!-- =====================================main content - noi dung chinh trong chu -->
@endsection