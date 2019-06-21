@extends('back-end.layouts.master')
@section('title_tag_admin')
Danh mục sản phẩm
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
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh sách loại sản phẩm 
						<a href="{!!url('admin/danh-muc-loai-san-pham/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới danh mục</button></a>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Ảnh đại diện</th>
										<th>Tên danh mục</th>
										<th>Miêu tả</th>
										<th>Hành động</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=0; ?>
									@foreach($cat_list as $cl)
									<?php $i++; ?>
									<tr>
										<td >{{$cl -> id}}</td>
										<td >
											@if($cl->anh)
											<img src="{!!url('public/uploads/products/'.$cl->anh)!!}" width="50" height="40">
											@else
											Chưa có ảnh đại diện
											@endif
										</td>
										<td >{{$cl -> ten_loai_san_pham}}</td>
										<td >{!!str_limit($cl->gioi_thieu, 120)!!}</td>
										<td ><a href="{!!url('admin/danh-muc-loai-san-pham/edit/'.$cl->id)!!}">Edit</a> / <a href="{!!url('admin/danh-muc-loai-san-pham')!!}" title="" onclick="alert('Bạn không thể xóa danh mục')">Delete</a></td>
									</tr>
									@endforeach				
								</tbody>
								<thead>
									<tr>										
										<th colspan="5">Tổng: {{$i}} Danh mục sản phẩm</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection