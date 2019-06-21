<!-- Top header navbar -->
<div class="header-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="top-left pull-left">
          <a class="address" href="https://www.google.com/maps/place/B%C3%A1ch+Khoa+Aptech/@21.046382,105.7812622,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab3b4220c2bd:0x1c9e359e2a4f618c!8m2!3d21.046382!4d105.7834509" target="_blank"><i class="fa fa-location-arrow"></i> Địa chỉ </a>
        </div>
        <div class="top-right pull-right">
          <div id="top-links" class="nav pull-right">
            <ul class="list-inline">
              @if (Auth::guest() || (Auth::user()->status == 0 ))
                <li class="dropdown account"><a href="#" title="Tài khoản" class="  dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-user"></i><span>Tài khoản</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{!!route('userregister')!!}">Đăng kí</a></li>
                    <li><a href="{{ route('userlogin') }}">Đăng nhập</a></li>
                  </ul>
                </li>
              @else  
              <a class="top-a" href="{{ url('/user') }}" style="color:#c0392b;"><strong>{!!Auth::user()->name!!}</strong></a>
              <a class="top-a" href="{{ route('userlogout') }}"><i class="fa fa-btn fa-sign-out"></i><small>Thoát</small></a>
              @endif 
              <li>
                <div class="header-right"> 
                  <div id="cart" class="btn-group btn-block">
                    <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"><span class="cart">({{ session('cart') ? count(session('cart')) : 0 }})Sản phẩm</span></button>
                    <ul class="dropdown-menu pull-right cart-dropdown-menu" style="display: none;">
                      @if(!empty(session('cart')))
                      <div 
                      class="table-responsive">
                       <table class="table table-hover" >
                        <thead>
                          <tr>
                            <th>Ảnh</th>
                            <th>SL</th>
                            <th>Tên <SPAN></SPAN></th>
                            <th>Giá</th>
                          </tr>
                        </thead>
                        <tbody>                       
                          @foreach(session('cart') as $row)
                          <tr>
                           <td><img class="card-img img-circle" src="{!!url('public/uploads/products/'.$row->anh)!!}" height='40' width='30' alt="trống"></td>
                           <td>{!!($row->qty) ? $row->qty : 1!!}</td>
                           <td>{!!str_limit($row->ten_san_pham,20)!!}</td>                           
                           <td>{!!number_format($row->gia_tien,0)!!}đ</td>
                         </tr>                         
                         @endforeach                           
                       </tbody>                       
                     </table> 
                     <a href="{!!url('/gio-hang/chi-tiet')!!}" type="button" class="btn btn-success"> Chi Tiết Giỏ Hàng </a>
                     <a href="{!!url('/gio-hang/xoa')!!}" onclick="return confirm('Bạn có chắc chắn muốn xóa tất cả sản phẩm trong giỏ hàng?');" type="button" class="btn btn-danger pull-right"> Xóa </a>
                   </div>
                   @else
                   <div class="table-responsive">
                     <table class="table table-hover" >
                      <thead>
                        <tr>
                          <th>Ảnh</th>
                          <th>LS</th>
                          <th>Tên <SPAN></SPAN></th>
                          <th>Giá</th>
                        </tr>
                      </thead>
                      <tbody>                       
                        <td colspan="3">Hện đang trống</td>
                      </tbody>
                    </table> 
                  </div>
                  @endif
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <div class="search-box">
          <form role="search" method="get" id="searchform" action="{{route('searchpro')}}">
            <input class="input-text" type="search" name="key" placeholder="Tìm kiếm sản phẩm.." class="form-control">
            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
         </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- The end -->
<nav class="navbar navbar-default" role="navigation" id="main-Nav">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="col-sm-12 col-xs-8 header-middle">
        <div id="logo"> <a href="{!!url('')!!}">
          <img src="{{ url('public/watch/image/Cool Text - WatchProCom 320378061105116.png') }}" title="Đồng hồ chính hãng" alt="Đồng hồ chính hãng" class="img-responsive"></a> 
        </div>
      </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-mav-top">
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="{!!url('')!!}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a> </li>
        <li><a href="{!!url('page/gioi-thieu')!!}" >Giới thiệu</a></li>               
        <li ><a href="{!!url('dong-ho-nam')!!}" >Đồng hồ nam</a></li>    
        <li><a href="{!!url('dong-ho-nu')!!}" >Đồng hồ nữ</a></li>
        <li><a href="{!!url('tin-tuc')!!}" > Tin Tức - Khuyễn Mãi </a></li>
        <li><a href="{!!url('page/lien-he')!!}" >Liên hệ</a></li>
      </ul>
      <ul class="nav navbar-nav pull-right">
        {{-- <li><a href="{{ url('/admin/home') }}">Vào trang quản trị</a></li> --}}</ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
<!-- /main nav -->