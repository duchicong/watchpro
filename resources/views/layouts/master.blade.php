@include('layouts.header')
@include('modules.header-main')
	<div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="{!!url('public/images/loader.gif')!!}"  alt="#"/></div>
	@yield('slidemain')
    <div class="container">     
      	<div class="row">   
			@yield('content')
			@include('modules.footer-content')
      	</div>       <!-- /row -->
    </div> <!-- /container -->
@include('layouts.footer')