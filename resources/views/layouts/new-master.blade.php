@include('layouts.header')
@include('modules.header-main')
	<div class="container">     
	  	<div class="row">   
			@yield('content')
			@include('modules.footer-content')
	  	</div>       <!-- /row -->
	</div> <!-- /container -->
@include('layouts.footer')