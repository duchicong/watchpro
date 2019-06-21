@if(Auth::check())
	@if(Auth::user()->status == 1 || Auth::user()->status == 2)
		@include('back-end.layouts.header')
		<body>
		@include('back-end.modules.top-nav')
		@include('back-end.modules.left-nav')
			@yield('content')
		@include('back-end.layouts.footer')
	@endif
@else
<script>window.location='login';</script>
@endif