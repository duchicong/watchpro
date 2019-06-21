@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Khách hàng</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-heading">
					Danh sách khách hàng					
				</div>
				<div class="panel panel-default">					
					
					<div class="panel-body" style="font-size: 13px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>
										<th>Tên khách hàng</th>
										<th>Địa chỉ</th>
										<th>Điện thoại</th>
										<th>Email</th>
										<th>Ngày đăng ký</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@if(count($cs)>0)
									@foreach($cs as $us)
										<tr>
											<td>{{$us->id}}</td>
											<td>{{$us->ten_khach_hang}}</td>
											<td>{{$us->dia_chi_khach_hang}}</td>
											<td>{{$us->sdt_khach_hang}}</td>
											<td>{{$us->email_khach_hang}}</td>											
											<td>{{$us->created_at}}</td>
											<td>
											    <a href="{!!url('admin/khach-hang/edit/'.$us->id)!!}" title="Chi tiết" class=" glyphicon glyphicon-refresh "></a> &nbsp;
											    <a href="{!!url('admin/khach-hang/del/'.$us->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')" class="glyphicon glyphicon-trash"></a>
											</td>
										</tr>
									@endforeach
									@else
									<tr><td colspan="8">Không có khách hàng!</td></tr>
									@endif			
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