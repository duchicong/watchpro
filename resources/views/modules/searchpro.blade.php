@extends('layouts.new-master')
@section('title_tag')
Tìm kiếm sản phẩm
@stop
@section('content')
<div class="row">
  <div class="col-md-12">
  <div class="categories col-xs-12 col-sm-9 col-md-9 col-lg-9 pull-right">
    <div class="title-search">
      <h3>Chúng tôi tìm thấy: {{count($searchkey)}} Sản phẩm, với từ khóa: {{$keyword}}</h3>
    </div>
    <?php $i=0; ?>
    @foreach($searchkey as $row)
    <?php $i++; ?>
    <div class="product-cate col-xs-6 col-sm-4 col-md-4 col-lg-4 no-padding">
      <div class="product-thumb transition">  
        <div class="image product-imageblock"> 
          <a href="{!!url($row->slug_loai_san_pham.'/'.$row->slug)!!}">
            <img src="{!!url('public/uploads/products/'.$row->anh)!!}" alt="" title="{!!$row->ten_san_pham!!}" class="img-responsive" /> 
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
            <li><strong>Thương hiệu</strong>: <i>{!!$row->thuong_hieu!!}</i></li>
            <li><strong>Hãng sản xuất</strong>: <i>{!!$row->hang_san_xuat!!} </i></li> 
            <li><strong>Kiểu dáng</strong>: <i>{!!$row->kieu_dang!!} </i></li> 
            <li><strong>Năng lượng sử dụng</strong> : <i>{!!$row->nang_luong_su_dung!!} </i></li> 
            <li><strong>Độ chịu nước</strong>: <i>{!!$row->do_chiu_nuoc!!} </i></li> 
            <li><strong>Đường kính mặt</strong>: <i>{!!$row->duong_kinh_mat!!} </i></li> 
            <li><strong>Chất liệu dây</strong>: <i>{!!$row->chat_lieu_day!!} </i></li> 
            <li><strong>Chất liệu mặt</strong>: <i>{!!$row->chat_lieu_mat!!} </i></li> 
            <li><strong>Chất liệu vỏ</strong>: <i>{!!$row->chat_lieu_vo!!} </i></li> 
            <li><strong>Bảo hành</strong>: <i>{!!$row->bao_hanh!!} </i></li>
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
      </div> <!-- / div thumbnail -->
    </div>  <!-- /div col-4 -->
    @if($i==3)
    <?php $i=0; ?>
    <div class="clearfix"></div>
    <p style="height: 30px;"></p>
    @endif
    @endforeach
    <div class="clearfix"></div>
    {{--!!$searchkey->render()!!--}}
  </div>
  <div class="col-md-3 col-lg-3 hidden-xs pull-left">
    @include('sidebar.cat_pro')
    @include('sidebar.new_pro')
  </div>
  </div>
</div>
@endsection