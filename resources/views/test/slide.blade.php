@extends('layouts.master')
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

</style>
@stop
@section('content')
<div class="col-sm-6">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active" data-thumb="0">
        <img src="{{ url('public/uploads/products/'.$feature->anh) }}">
      </div>
      @foreach($data as $item)
      <div class="item" data-thumb="0">
        <img src="{{ url('public/uploads/products/details/'.$item->imgs) }}">
      </div>
      @endforeach
    </div>
  </div> 
  <div class="clearfix">
    <div id="thumbcarousel" class="carousel slide" data-interval="false">
      <div class="carousel-inner">
        <div class="item active">
          <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{ url('public/uploads/products/'.$feature->anh) }}"></div>
          @foreach($data as $item)
          <div data-target="#carousel" data-slide-to="{{$item->id - 1}}" class="thumb"><img src="{{ url('public/uploads/products/details/'.$item->imgs) }}"></div>
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
  </div><!-- /clearfix -->
</div>
<div class="clearfix"></div>
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