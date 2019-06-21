<div class="mainbanner wow zoomIn">
  <div id="main-banner" class="owl-carousel home-slider">
	@foreach($slide as $slides)
    <div class="item"> 
    	<a href="javascript:void(0)">
	    	<img src="{!! url('public/uploads/banners/'.$slides->anh) !!}" alt="{{$slides->chu_de}}" class="img-responsive" width="100%"/>
	    </a> 
	</div>
	@endforeach
  </div>
</div>