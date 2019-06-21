@extends('layouts.new-master')
@section('title_tag','Tin tức - Khuyến mãi')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
		<ul class="breadcrumb">
			<li><a href="{!!url('/')!!}"><i class="fa fa-home"></i> Trang Chủ</a></li>
			<li><a href="javascript:void(0)">Tin tức</a></li>
		</ul>
	</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
	<div class="hidden-xs col-sm-3 col-md-3 col-lg-3 no-padding"> 
		@include('sidebar.cat_pro')
    	@include('sidebar.new_pro')
	</div>           
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-success margin-left">
					<div class="panel-body">
						@foreach($catnews as $data)
						<div class="blog1 blog">
							<?php $showanh = ($data->link_anh) ? $data->link_anh : 'no-img.jpg' ?>
							<div class="blog_img">
								<a class="u-url" href="{!!url('tin-tuc/'.$data->slug)!!}">
								<img src="{!!url('public/uploads/blogs/'.$showanh)!!}" alt="{!!$data->chu_de!!}" title="{!!$data->chu_de!!}" />
								</a>
							</div>
							<h4 class="p-name"><a href="{!!url('tin-tuc/'.$data->slug)!!}">{!!$data->chu_de!!}</a></h4>
							<ul class="blog-meta">
								<li><i class="fa fa-clock-o"></i><span class="dt-published">{!!$data->updated_at!!}</span></li>
								@if($data->tac_gia)
								<li><i class="fa fa-user"></i><span>{!!$data->tac_gia!!}</span></li>
								@endif
							</ul>
							<p class="p-summary">{!!str_limit($data->mieu_ta,200)!!}</p>
						</div>
						@endforeach
						</div>
					</div>   
				</div>
			</div>     
		</div> 
	</div>
	<!-- ===================================================================================/news ============================== -->
	@endsection