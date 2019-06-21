@extends('back-end.layouts.master')
@section('title_tag_admin','Danh mục tin tức')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh mục bài viết</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh mục tin tức
						<a href="{!!url('admin/danh-muc-blog/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới danh mục</button></a>
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
					    	<div class="alert alert-success">
						        <ul>
						            {!! Session::get('flash_massage') !!}	
						        </ul>
						    </div>
						@endif
					<div class="panel-body">
						<div class="table-responsive">
							@if(count($data)>0)
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Tên danh mục</th>										
										<th>Miêu tả</th>
										<th>Hành động</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
									<tr>
										<td>{{$row->id}}</td>
										<td>{{$row->ten_danh_muc}}</td>
										<td>{!! str_limit($row->mieu_ta,200)!!}</td>
										<td>
											<a href="danh-muc-blog/edit/{{$row->id}}" class="btn btn-success">Chỉnh sửa</a>
											<a href="danh-muc-blog/del/{{$row->id}}" class="btn btn-link-danger">Xóa</a>
										</td>
									</tr>				
									@endforeach				
								</tbody>
							</table>
							@else
							<div class="alert alert-success">
								Không có danh mục nào
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