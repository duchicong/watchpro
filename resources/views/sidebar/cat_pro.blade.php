<div class="panel panel-info widget">
	<?php 
		$cate_pro = DB::table('loaisanpham')->get();
		?>
	<div class="panel-heading uppercase">
		<h3 class="panel-title">Danh mục sản phẩm</h3>
	</div>
	<div class="panel-body no-padding">
		<ul class="cate_pro">
		@foreach($cate_pro as $row)
				<li><a href="{!!url($row->slug_loai_san_pham)!!}">{!!$row->ten_loai_san_pham!!}</a></li>
		@endforeach
		</ul>
	</div>
</div>