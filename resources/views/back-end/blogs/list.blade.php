@extends('back-end.layouts.master')
@section('title_tag_admin','Danh sách blogs')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh sách bài viết</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Danh sách bài viết
						<a href="{!!url('admin/blog/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới bài viết</button></a>
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
						        {!! Session::get('flash_massage') !!}
						    </div>
						@endif
					<div class="panel-body">
						<div class="table-responsive">
							@if(count($data)>0)
							<table class="table table-hover">
								<thead>
									<tr>
										<th>STT</th>
										<th>Ảnh đại diện</th>
										<th>Tên bài viết</th>
										<th>Danh mục</th>
										<th>Trạng thái</th>
										<th>Hành động</th>
									</tr>
								</thead>
								<tbody>
									<?php $stt=0; ?>
									@foreach($data as $row)
									<?php $stt++; ?>
									<tr>
										<td>{{ $stt }}</td>
										<td>
											@if($row->link_anh)
											<img src="{{ url('public/uploads/blogs/'.$row->link_anh) }}" alt="" width="60" height="60">
											@else
											Cập nhật ảnh đại diện!
											@endif
										</td>
										<td>
											@if($row->danh_muc_id==1)
												<a href="{!! url('/page/'.$row->slug) !!}" target="_blank">{!! $row->chu_de !!}</a>
											@else
												<a href="{!! url('/tin-tuc/'.$row->slug) !!}" target="_blank">{!! $row->chu_de !!}</a>
											@endif
										</td>
										<td>{!! $row->ten_danh_muc !!}</td>
										<td>
											@if(($row->trang_thai)==1)
											Hiển thị
											@else
											<span style="color:red;">Riêng tư</span> 
											@endif
										</td>
										<td>
											<a href="blog/edit/{{$row->id}}" class="btn btn-success">Chỉnh sửa</a>
											<a href="blog/del/{{$row->id}}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">Xóa</a>
										</td>
									</tr>				
									@endforeach				
								</tbody>
							</table>
							@else
							<div class="alert alert-success">
								Bạn chưa tạo bài viết nào!
							</div>
							@endif	
						</div>
					</div>
					{!! $data->render() !!}
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection