@extends('layouts.new-master')
@section('title_tag')
{!!$data->ten_san_pham!!}
@stop
@section('add_style')
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
<style>
  /* CSS used here will be applied after bootstrap.css */
  .carousel {
    margin-top: 20px;
  }
  .item .thumb {
    max-height: 120px;
    width: 25%;
    cursor: pointer;
    float: left;
  }
  .item .thumb img {
    width: 100%;
    margin: 2px;
  }
  .item img {
    width: 100%;  
  }
  .item.active {max-height: 420px;}
  .carousel-inner > .item > img{max-height: 420px;width: auto;margin: 0 auto;}
</style>
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
		<ul class="breadcrumb">
			<li><a href="{!!url('/')!!}"><i class="fa fa-home"></i>Trang Chủ</a></li>
			<li><a href="{!!url('/'.$data->slug_loai_san_pham)!!}">{!!$data->ten_loai_san_pham!!}</a></li>
			<li><a href="javascript:void(0)">{!!$data->ten_san_pham!!}</a></li>
		</ul>
	</div>
</div>

<!-- 2 column  -->
<div class="product-detail col-xs-12 col-sm-12 col-md-12 col-lg-12">     
	<div class="hidden-xs col-sm-3 col-md-3 col-lg-3 no-padding">  
		@include('sidebar.cat_pro')
		<!-- panel inffo 1 -->
		@include('sidebar.same_pro')   
		</div> 
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding">
	<div class="panel panel-success">
		<div class="panel-body">
			<div class="row">
				<!-- hot new content -->
				<div class="col-sm-6">
					<?php
						$pro_id = $data->id;
						$detailImgs = DB::table('detail_imgs')
						->join('sanpham', 'detail_imgs.pro_id', '=', 'sanpham.id')
		                ->where('pro_id',$pro_id)
		                ->select('detail_imgs.*')
		                ->get();
					?>
					<div id="carousel" class="carousel slide" data-ride="carousel">
					    <div class="carousel-inner">
					      <div class="item active" data-thumb="0">
					        <img src="{!!url('public/uploads/products/'.$data->anh)!!}">
					      </div>
					      @foreach($detailImgs as $item)
					      <div class="item" data-thumb="0">
					        <img src="{{ url('public/uploads/products/details/'.$item->imgs) }}">
					      </div>
					      @endforeach
					    </div>
					  </div> 
					  <div class="clearfix">
					  	@if(count($detailImgs)>0)
					    <div id="thumbcarousel" class="carousel slide" data-interval="false">
					      <div class="carousel-inner">
					        <div class="item active">
					          <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{!!url('public/uploads/products/'.$data->anh)!!}"></div>
					          @foreach($detailImgs as $item)
					          <div data-target="#carousel" data-slide-to="{{$item->id}}" class="thumb"><img src="{{ url('public/uploads/products/details/'.$item->imgs) }}"></div>
					          @endforeach
					        </div><!-- /item -->
					      </div><!-- /carousel-inner -->
					      <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
					        <span class="glyphicon glyphicon-chevron-left"></span>
					      </a>
					      <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
					        <span class="glyphicon glyphicon-chevron-right"></span>
					      </a>
					    </div> <!-- /thumbcarousel -->
					    @endif
					  </div><!-- /clearfix -->
					
				</div>
				<div class="col-sm-6">
					<h1 class="productpage-title">{!!$data->ten_san_pham!!}</h1>
					<ul class="list-unstyled productinfo-details-top">
						<li>
							<h2 class="productpage-price">
								@if(!empty($data->khuyen_mai))
									<div class="gia-cu">Giá cũ: <del>{!!number_format($data->gia_tien)!!} Vnđ</del></div>
									Giá mới: <span class="gia-moi">{!!number_format($data->khuyen_mai)!!} Vnđ
									</span>
								@else
								Giá: {!!number_format($data->gia_tien)!!} Vnđ
								@endif
							</h2>
						</li>
					</ul>
					<hr>
					<div class="config-mota">
						<div class="tab-pane">
							<div class="table-responsive">
								<table class="table table-hover mo-ta-sp">
									<thead>
										<tr>
											<th colspan="2">CẤU HÌNH NỔI BẬT</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Thương hiệu</td>
											<td>{!!$data->thuong_hieu!!}</td>
										</tr>
										<tr>
											<td>Kiểu dáng</td>
											<td>{!!$data->kieu_dang!!}</td>
										</tr>
										<tr>
											<td>Năng lượng sử dụng</td>
											<td>{!!$data->nang_luong_su_dung!!}</td>
										</tr>
										<tr>
											<td>Chống chịu nước</td>
											<td>{!!$data->do_chiu_nuoc!!}</td>
										</tr>
										<tr>
											<td>Bảo hành</td>
											<td>{!!$data->bao_hanh!!}</td>
										</tr>
										<tr>
											<td>Trạng thái</td>
											<td>
												@if($data->trang_thai==1)
													Còn hàng
												@else
													Hết hàng
												@endif
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<hr>
					<div class="box-sale">
						<h3 class="panel-title">Khuyễn mãi</h3>
						<div class="chinhsach">
							<li><i class="fa fa-hand-point-right"></i> Bảo hành chính hãng: 10 năm</li>
							<li><i class="fa fa-hand-point-right"></i> Giao hàng tận nơi miễn phí trong 1 ngày</li>
							<li><i class="fa fa-hand-point-right"></i> 1 đổi 1 trong 1 tháng với sản phẩm lỗi</li>
						</div>
					</div>
					<hr>
					<div id="product">
						<div class="form-group">
							<input type="hidden" name="product_{{ $data->id }}" value="48" />
							<div class="btn-group">
								@if($data->trang_thai==1)
								<a href="{!!url('gio-hang/addcart/'.$data->id)!!}" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block addtocart">Đặt hàng ngay</a>
								@else
								<a href="" title="" class="btn btn-large btn-block btn-primary disabled" style="font-size: 20px;">Tạm hết hàng</a>
								@endif
							</div>
						</div>
						@if(!empty($data->tags))
						<div class="tags_product">
							Thẻ sản phẩm: {!! $data->tags !!}
						</div>
						@endif
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="productinfo-tab">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab-description" data-toggle="tab" aria-expanded="true">Chi tiết</a></li>
						<li class=""><a href="#tab-review" data-toggle="tab" aria-expanded="false">Cấu hình</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab-description">
							<div class="cpt_product_description ">
								<div class="table-responsive">
									<div class="panel panel-default">
										<div class="accordion-group">
											<div class="accordion-heading">
												<p class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
													<p class="content">
														<div class="description">
															{!!$data->gioi_thieu!!}
														</div>
													{!!$data->noi_dung!!}
													</p>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- cpt_container_end --></div>
							<div class="tab-pane" id="tab-review">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th colspan="2">CẤU HÌNH CHI TIẾT SẢN PHẨM</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Hãng sản xuất</td>
												<td>{!!$data->hang_san_xuat!!}</td>
											</tr>
											<tr>
												<td>Thương hiệu</td>
												<td>{!!$data->thuong_hieu!!}</td>
											</tr>
											<tr>
												<td>Kiểu dáng</td>
												<td>{!!$data->kieu_dang!!}</td>
											</tr>
											<tr>
												<td>Năng lượng sử dụng</td>
												<td>{!!$data->nang_luong_su_dung!!}</td>
											</tr>
											<tr>
												<td>Chống chịu nước</td>
												<td>{!!$data->do_chiu_nuoc!!}</td>
											</tr>
											<tr>
												<td>Đường kính mặt</td>
												<td>{!!$data->duong_kinh_mat!!}</td>
											</tr>
											<tr>
												<td>Chất liệu dây</td>
												<td>{!!$data->chat_lieu_day!!}</td>
											</tr>
											<tr>
												<td>Chất liệu mặt</td>
												<td>{!!$data->chat_lieu_mat!!}</td>
											</tr>
											<tr>
												<td>Chất liệu vỏ</td>
												<td>{!!$data->chat_lieu_vo!!}</td>
											</tr>
											<tr>
												<td>Bảo hành</td>
												<td>{!!$data->bao_hanh!!}</td>
											</tr>
											<tr>
												<td>Trạng thái</td>
												<td>
													@if($data->trang_thai==1)
														Còn hàng
													@else
														Hết hàng
													@endif
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<hr>
					<h2 style="padding-left: 20px;">Tin tức</h2>
					<hr>
					@include('modules.tin-tuc')  
				</div><!-- /row -->
			</div>   
		</div>
	</div>
@endsection
@section('add_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script>
  (function($){
    $('#thumbcarousel').carousel(0);
    var $thumbItems = $('#thumbcarousel .item');
    $('#carousel').on('slide.bs.carousel', function (event) {
     var $slide = $(event.relatedTarget);
     var thumbIndex = $slide.data('thumb');
     var curThumbIndex = $thumbItems.index($('#thumbcarousel .item.active').get(0));
     if (curThumbIndex>thumbIndex) {
      $('#thumbcarousel').one('slid.bs.carousel', function (event) {
        $('#thumbcarousel').carousel(thumbIndex);
      });
      if (curThumbIndex === ($thumbItems.length-1)) {
        $('#thumbcarousel').carousel('next');
      } else {
        $('#thumbcarousel').carousel(numThumbItems-1);
      }
    } else {
      $('#thumbcarousel').carousel(thumbIndex);
    }
  });
  })(jQuery);
</script>
@stop