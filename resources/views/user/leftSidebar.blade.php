@extends('user.master')
@section('content')
<div class="container">
	<ul class="breadcrumb">
	    <li><a href="index"><i class="fa fa-home"></i></a></li>
	    <li><a href="category">@yield("tilte_breadcrumb")</a></li>
	</ul>
	<div class="row">
		<div class="col-sm-3 hidden-xs column-left">
			@yield('left_content')

		</div>
		<div class="col-sm-9 column-left">
			@yield('right_content')

		</div>
	</div>
</div>
@endsection
