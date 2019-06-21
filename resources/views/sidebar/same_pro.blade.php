<div class="panel panel-info widget">
	<div class="panel-heading">
		<h3 class="panel-title uppercase">Sản phẩm cùng loại</h3>
	</div>
	<div class="panel-body no-padding">
	<?php 
	$catid = $data->id_danhmucsanpham;
	$proid_hientai = $data->id;
	$other_pro = DB::table('sanpham')
	->join('loaisanpham', 'sanpham.id_danhmucsanpham', '=', 'loaisanpham.id')
	->where([['id_danhmucsanpham','=',$catid], ['sanpham.id','!=',$proid_hientai]])
	->select('sanpham.*','loaisanpham.slug_loai_san_pham')->limit(3)->get();

	?>
	@foreach($other_pro as $row)
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
		<div class="item pro_other">              
			<div class="product-thumb transition">
				<div class="image product-imageblock">
					<a href="{!!url($row->slug_loai_san_pham.'/'.$row->slug)!!}">
						<img class="img-responsive" src="{!!url('public/uploads/products/'.$row->anh)!!}" alt="{!!$row->ten_san_pham!!}"  class="img-responsive"></a>
					</div>
					<div class="caption product-detail">
						<h4 class="product-name text-center"><a href="{!!url($data->slug_loai_san_pham.'/'.$row->slug)!!}" title="{!!$row->ten_san_pham!!}">{!!$row->ten_san_pham!!}</a></h4>
					</div>
					@if($row->khuyen_mai)
					<div class="sale">
						@php
						$sale=100 - ($row->khuyen_mai / $row->gia_tien)*100;
						echo floor($sale)."%";
						@endphp
					</div>
					@endif
					<!-- /div bt -->
					<div class="ct">
						<a href="{!!url($data->slug_loai_san_pham.'/'.$row->slug)!!}" title="Chi tiết">
							<li><strong>Thương hiệu</strong> : <i> {!!$row->thuong_hieu!!}</i></li>
							<li><strong>Hãng sản xuất</strong> : <i>{!!$row->hang_san_xuat!!} </i></li> 
							<li><strong>Kiểu dáng</strong> : <i>{!!$row->kieu_dang!!} </i></li> 
							<li><strong>Năng lượng sử dụng</strong> : <i>{!!$row->nang_luong_su_dung!!} </i></li> 
							<li><strong>Độ chịu nước</strong> : <i>{!!$row->do_chiu_nuoc!!} </i></li> 
							<li><strong>Đường kính mặt</strong> : <i>{!!$row->duong_kinh_mat!!} </i></li> 
							<li><strong>Chất liệu dây</strong> : <i>{!!$row->chat_lieu_day!!} </i></li> 
							<li><strong>Chất liệu mặt</strong> : <i>{!!$row->chat_lieu_mat!!} </i></li> 
							<li><strong>Chất liệu vỏ</strong> : <i>{!!$row->chat_lieu_vo!!} </i></li> 
							<li><strong>Bảo hành</strong> : <i>{!!$row->bao_hanh!!} </i></li> 
						</a>
					</div>
					<div class="price">  
						<span class="btn btn-info btn-block ">
							@if($row->khuyen_mai)
							<strong>{!!number_format($row->khuyen_mai,0)!!}</strong>đ
							@else
							<strong>{!!number_format($row->gia_tien,0)!!}</strong>đ
							@endif
						</span>   
						<a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="btn btn-success btn-block">Thêm vào giỏ</a> 
					</div>
				</div> 
			</div> <!-- / div thumbnail -->
		</div>  <!-- /div col-4 -->
		@endforeach
	</div>
</div>   