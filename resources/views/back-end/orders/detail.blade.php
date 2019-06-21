@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="POST" role="form">	
					<input type="hidden" name="_token" value="{{ csrf_token() }}">				
					<div class="panel panel-default">
						
							<!--  -->
						<div class="panel-heading">						 
							Chi tiết sản phẩm trong đơn đặt hàng
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
											<th> Số lượng </th>
											<th>Giá bán</th>
											<th>Trạng thái</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($order_detail as $row)
											<tr>
												<td>{{$row->id}}</td>
												<td> <img src="{!!url('uploads/products/'.$row->anh)!!}" alt="watch" width="50" height="40"></td>
												<td>{{$row->ten_san_pham}}</td>
												<td>{{$row->gioi_thieu}}</td>
												<td>{{$row->soluong_sub}} </td>
												<td>{{ number_format($row->gia_tien) }} Vnđ</td>
												<td>
													
														<span style="color:blue;">Còn hàng</span>
												
														<!-- <span style="color:#27ae60;"> Tạm hết</span> -->
												
												</td>
												<td>
												    <a href="{{route('getorder')}}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">remove</span> </a>
												</td>
											</tr>
										@endforeach			
																
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<button type="submit" onclick="return xacnhan('Xác nhận đơn hàng này ?')"  class="btn btn-danger"> Xác nhận đơn hàng </button>
				</form>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection