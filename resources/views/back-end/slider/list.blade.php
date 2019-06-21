@extends('back-end.layouts.master')
@section('title_tag_admin','Danh sách Banners')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh sách Banners</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh sách Banners
						<a href="{!!url('admin/slider/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm Banner mới</button></a>
					</div>
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					    @elseif (Session()->has('flash_level'))
						    {!! Session::get('flash_massage') !!}
						@endif
					<div class="panel-body">
						<div class="table-responsive">
							@if(count($data)>0)
							<table class="table table-hover">
								<thead>
									<tr>
										<th>STT</th>
										<th>Banner</th>
										<th>Tên banner</th>
										<th>Hành động</th>
									</tr>
								</thead>
								<tbody>
									<?php $stt=1; ?>
									@foreach($data as $row)
									<tr>
										<td>{{ $stt++ }}</td>
										<td>
											@if($row->anh)
											<img src="{{ url('public/uploads/banners/'.$row->anh) }}" alt="{{ $row->chu_de }}" width="60" height="60">
											@else
											Cập nhật ảnh đại diện!
											@endif
										</td>
										<td>{!! $row->chu_de !!}</td>
										<td>
											<a href="slider/edit/{{$row->id}}" class="btn btn-success">Chỉnh sửa</a>
											<a href="slider/del/{{$row->id}}" class="btn btn-danger">Xóa</a>
										</td>
									</tr>				
									@endforeach				
								</tbody>
							</table>
							@else
							<div class="alert alert-success">
								Chưa có banner slider nào!
							</div>
							@endif	
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection