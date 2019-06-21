<!-- menu top  - menu phia tren cung-->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href=""><span>Trang Quản Trị</span> SHOP </a>
				<a href="{{route('index')}}" target="_blank" class="btn btn-primary" style="margin-top: 8px;">Giao diện người dùng</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						@if(Auth::check())
						<svg class="glyph stroked male-user" style="color: white;"><use xlink:href="#stroked-male-user"></use></svg><strong style="color: #fff;">Xin chao {{Auth::user()->name}}</strong><a href="#" class="dropdown-toggle" data-toggle="dropdown">
							
                           <span class="caret"></span></a>
                         
						<ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('dangxuat')}}"><i class="fa fa-btn fa-sign-out"></i>Đăng xuất</a></li>
						</ul>
						@endif
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
<!-- /menu top  - menu phia tren cung-->