@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Quản trị thành viên</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-heading">
					Danh sách thành viên
					<a href="{!!url('admin/nhan-vien/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới thành viên</button></a>					
				</div>
				<div class="panel panel-default">					
					
					   <!--  <div class="alert alert-danger">
					        <ul>
					            
					                <li>asfsdfgsd</li>
					          
					        </ul>
					    </div>
					  
					    	<div class="alert alert-success">
						        <ul>
						          agdfh
						        </ul>
						    </div> -->
						
					<div class="panel-body" style="font-size: 13px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Tên nhân viên</th>
										<th>Email</th>
										<th>Quyền</th>
										<th>Ngày đăng ký</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($ad as $admin)
										@if($admin->status == 1 || $admin->status == 2 )
										<tr>
											<td>{{$admin->id}}</td>
											<td>{{$admin->name}}</td>
											<td>{{$admin->email}}</td>

											<td>
												@if($admin->status == 1)
													<span style="color:#d35400;">Quản trị hệ thống</span>
												@else
													<span style="color:#27ae60;">Nhân viên</span>
												@endif
											</td>
											<td>{{$admin->created_at}}</td>										
																						
											<td>
											    <a href="{!!url('admin/nhan-vien/edit/'.$admin->id)!!}" title="Chi tiết"> Cập nhật</a> &nbsp;
											    <a href="{!!url('admin/nhan-vien/del/'.$admin->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')">Xóa bỏ</a>
											</td>
										</tr>
										@endif
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