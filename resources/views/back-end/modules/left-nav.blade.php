<!-- left menu - menu ben  trai	 -->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div style="margin-top:10px;"></div>
		@if(Auth::user()->status == 1)
		<ul class="nav menu backend">
			<li class="active"><a href="{!!url('admin/trang-chu')!!}"><svg class="glyph stroked app-window"><use xlink:href="#stroked-line-graph"></use></svg> Trang chủ</a></li>

			<li id="danhmuc"><a href="{!!url('admin/danh-muc-loai-san-pham')!!}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Danh mục sản phẩm</a></li>

			<li id="sanpham"><a href="{{route('getpro')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Sản phẩm </a></li>
			
			<li id="danhmucblog"><a href="{!!url('admin/danh-muc-blog')!!}"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> Danh mục bài viết</a></li>
			
			<!-- The End: BlogCategory -->

			<!-- Begin: Blogs -->
			<li id="blogs"><a href="{!!url('admin/blog')!!}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>Bài viết</a></li>
			
			<!-- The End: Blogs -->

			<!-- Begin: Blogs -->
			<li id="sliders"><a href="{!!url('admin/slider')!!}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Sliders</a></li>
			<!-- The End: BlogCategory -->

			{{-- <li><a href=""><svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg> Nhập hàng</a></li> --}}

			<li><a href="{{route('getorder')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Đơn đặt hàng</a></li>

			<li><a href="{!!url('admin/khach-hang')!!}"><svg class="glyph stroked female user" style="color: red;"><use xlink:href="#stroked-female-user"/></svg>  Khách hàng</a></li>
			

			<li><a href="{!!url('admin/nhan-vien')!!}"><svg class="glyph stroked female user" style="color: blue;"><use xlink:href="#stroked-female-user"/></svg> Nhân Viên</a></li>			
			
			<li role="presentation" class="divider"></li>
		
		</ul>
		@else
			<ul class="nav menu backend">
			<li class="active"><a href="{!!url('admin/trang-chu')!!}"><svg class="glyph stroked app-window"><use xlink:href="#stroked-line-graph"></use></svg> Trang chủ</a></li>

			<li id="danhmuc"><a href="{!!url('admin/danh-muc-loai-san-pham')!!}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Danh mục sản phẩm</a></li>

			<li id="sanpham"><a href="{{route('getpro')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Sản phẩm </a></li>
			
			<li id="danhmucblog"><a href="{!!url('admin/danh-muc-blog')!!}"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> Danh mục bài viết</a></li>
			
			<!-- The End: BlogCategory -->

			<!-- Begin: Blogs -->
			<li id="blogs"><a href="{!!url('admin/blog')!!}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>Bài viết</a></li>
			
			<!-- The End: Blogs -->

			<!-- Begin: Blogs -->
			<li id="sliders"><a href="{!!url('admin/slider')!!}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Sliders</a></li>
			<!-- The End: BlogCategory -->

			{{-- <li><a href=""><svg class="glyph stroked download"><use xlink:href="#stroked-download"/></svg> Nhập hàng</a></li> --}}

			<li><a href="{{route('getorder')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Đơn đặt hàng</a></li>

			<li><a href="{!!url('admin/khach-hang')!!}"><svg class="glyph stroked female user" style="color: red;"><use xlink:href="#stroked-female-user"/></svg>  Khách hàng</a></li>	
			
			<li role="presentation" class="divider"></li>
		
		</ul>
		@endif

	</div><!--/.sidebar-->
<!-- /left menu - menu ben  trai	 -->