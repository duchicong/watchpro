@extends('layouts.master')
@section('title_tag','Trang chủ')
@section('slidemain')
@include('modules.slide')
@stop
@section('content')
    <div class="container wow bounceInLeft">
      <div class="row">
        <div class="cat-home ">
          @foreach($catpro as $catpros)
          <div class="col-md-4 col-sm-4 cat-item"> 
            <a href="{{url($catpros->slug_loai_san_pham)}}">
              <img alt="{!!$catpros->ten_loai_san_pham!!}" title="{!!$catpros->ten_loai_san_pham!!}" src="{{ url('public/uploads/products/'.$catpros->anh) }}" width="380" height="250">
              <span class="title-cat">{!!$catpros->ten_loai_san_pham!!}</span>
            </a> 
          </div>
          @endforeach
        </div>
      </div>
    </div>
    
    <!-- PRODUCT HOMEPAGE -->
    <div class="row">
      <div id="content" class="col-sm-12">
        <div class="customtab">
          <div id="tabs" class="customtab-wrapper text-center">
            <span class="title-block">Sản phẩm mới nhất</span>
          </div>
          <div id="tab-latest" class="tab-content wow zoomIn">
            <div class="box">
              <div id="latest-slidertab" class="row owl-carousel product-slider">
              @foreach($latest_pro as $row) 
                <div class="item">
                  <div class="product-thumb transition">
                    <div class="image product-imageblock"> 
                      <a href="{!!url($row->slug_loai_san_pham.'/'.$row->slug)!!}">
                        <?php $showanh = ($row->anh) ? $row->anh : 'no-product-283x300.png' ?>
                        <img src="{!!url('public/uploads/products/'.$showanh)!!}" alt="{!!$row->ten_san_pham!!}" title="{!!$row->ten_san_pham!!}" class="img-responsive" /> 
                      </a>  
                    </div>
                    <div class="caption product-detail">
                      <h4 class="product-name text-center"><a href="{!!url($row->slug_loai_san_pham.'/'.$row->slug)!!}" title="{!!$row->ten_san_pham!!}">{!!$row->ten_san_pham!!}</a></h4>
                    </div>
                    @if($row->khuyen_mai)
                    <div class="sale">
                      @php
                        $sale=100 - ($row->khuyen_mai / $row->gia_tien)*100;
                        echo floor($sale)."%";
                      @endphp
                    </div>
                    @endif
                    <div class="ct">
                      <a href="{!!url($row->slug_loai_san_pham.'/'.$row->slug)!!}" title="Xem chi tiết">
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
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- THE END NỔI BẬT -->
    <div class="row">
      <div class="col-sm-12 banner-ads">
        <a href="">
          <img src="{{url('public/uploads/banners/ads2.jpg')}}" width="100%" alt="">
        </a>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- SẢN PHẨM MỚI NHẤT -->
    <div class="row">
      <div id="content" class="col-sm-12">
        <div class="customtab">
          <div id="tabs" class="customtab-wrapper text-center">
            <span class="title-block">Sản phẩm nổi bật</span>
          </div>
          <div id="tab-special" class="tab-content">
            <div class="box">
              <div id="special-slidertab" class="row owl-carousel product-slider">
                @foreach($noi_bat as $row) 
                <div class="item">
                  <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="{!!url($row->slug_loai_san_pham.'/'.$row->slug)!!}"> <img src="{!!url('public/uploads/products/'.$row->anh)!!}" alt="{!!$row->ten_san_pham!!}" class="img-responsive" /> </a>
                    </div>
                    <div class="caption product-detail">
                      <h4 class="product-name text-center"><a href="{!!url($row->slug_loai_san_pham.'/'.$row->slug)!!}" title="{!!$row->ten_san_pham!!}">{!!$row->ten_san_pham!!}</a></h4>
                    </div>
                    @if($row->khuyen_mai)
                    <div class="sale">
                      @php
                        $sale=100 - ($row->khuyen_mai / $row->gia_tien)*100;
                        echo floor($sale)."%";
                      @endphp
                    </div>
                    @endif
                    <div class="ct">
                      <a href="{!!url($row->slug_loai_san_pham.'/'.$row->slug)!!}" title="Xem chi tiết">
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
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-sm-12 banner-ads">
        <a href="">
          <img src="{{url('public/uploads/banners/ads1.png')}}" alt="" width="100%">
        </a>
      </div>
    </div>
    <!-- tab-special-->
  <!-- THE END MỚI NHẤT -->    
@endsection

