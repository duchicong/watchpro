<!DOCTYPE html>
<html lang="vi">
<head>
<title>@yield('title_site')</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="{{ url('public/watchpro/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
<link href="{{ url('public/watchpro/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="{{ url('public/watchpro/css/stylesheet.css') }}" rel="stylesheet">
<link href="{{ url('public/watchpro/css/responsive.css') }}" rel="stylesheet">
<link href="{{ url('public/watchpro/owl-carousel/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{ url('public/watchpro/owl-carousel/owl.transitions.css') }}" type="text/css" rel="stylesheet" media="screen" />
<script src="{{ url('public/watchpro/javascript/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ url('public/watchpro/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('public/watchpro/javascript/jstree.min.js') }}" type="text/javascript"></script>
<script src="{{ url('public/watchpro/javascript/template.js') }}" type="text/javascript" ></script>
<script src="{{ url('public/watchpro/javascript/common.js') }}" type="text/javascript"></script>
<script src="{{ url('public/watchpro/javascript/global.js') }}" type="text/javascript"></script>
<script src="{{ url('public/watchpro/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{ url('public/watchpro/wowjs_uk/animate.css') }}">
</head>
<body>
<div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="public/watchpro/image/loader.gif"  alt="#"/></div>
<header>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="top-left pull-left">
          </div>
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown account"><a href="#" title="My Account" class="  dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>Tài Khoản</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="register">Đăng kí</a></li>
                    <li><a href="login">Đăng nhập</a></li>
                  </ul>
                </li>
                <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i><span>Yêu Thích</span><span> (0)</span></a></li>
              </ul>
              <div class="search-box">
                <input class="input-text" placeholder="Search By Products.." type="text">
                <button class="search-btn"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container wow bounce">
    <div class="header-inner">
      <div class="col-sm-4 col-xs-6 header-left ">
        <div class="shipping">
          <div class="shipping-img"></div>
          <div class="shipping-text">0344561586<br>
            <span class="shipping-detail">24/7 Hỗ Trợ Trực Tuyến</div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 header-middle">
        <div class="header-middle-top">
          <div id="logo"> <a href="home"><img src="public/watchpro/image/Cool Text - WatchProCom 320378061105116.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 header-right">
        <div id="cart" class="btn-group btn-block">
          <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"><span class="cart-title">Giỏ hàng</span><br>
          0 item(s) - $0.00</span> </button>
          <ul class="dropdown-menu pull-right cart-dropdown-menu">
            <li>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="public/watchpro/image/product/7product50x59.jpg"></a></td>
                    <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                    <td class="text-right">x 1</td>
                    <td class="text-right">$254.00</td>
                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </li>
            <li>
              <div>
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td class="text-right"><strong>Sub-Total</strong></td>
                      <td class="text-right">$210.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                      <td class="text-right">$2.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>VAT (20%)</strong></td>
                      <td class="text-right">$42.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Total</strong></td>
                      <td class="text-right">$254.00</td>
                    </tr>
                  </tbody>
                </table>
                <p class="text-right"> <span class="btn-viewcart"><a href="cart"><strong><i class="fa fa-shopping-cart"></i> Giỏ Hàng Của Bạn</strong></a></span> <span class="btn-checkout"><a href="checkout"><strong><i class="fa fa-share"></i>Đăng Xuất</strong></a></span> </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <nav id="menu" class="navbar">
      <div class="nav-inner">
        <div class="navbar-header"><span id="category" class="visible-xs">Danh Mục</span>
          <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
          <ul class="main-navigation">
            <li><a href="home"   class="parent"  >Trang Chủ</a> </li>
            <li><a href="about"   class="parent"  >Giới Thiệu</a> </li>
            <li><a href="detailProduct"   class="parent"  >Thương Hiệu</a> </li>
            <li><a href="clock_men"   class="parent"  >Đồng Hồ Nam</a> </li>
            <li><a href="category"   class="parent"  >Đồng Hồ Nữ</a> </li>
            <li><a href="category"   class="parent"  >Đồng Hồ Giá Rẻ</a> </li>
            <li><a href="contact" >Liên Hệ</a> </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>

@yield('content')

<footer>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">VỀ CHÚNG TÔI</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="about">Giới Thiệu</a></li>
          <li><a href="checkout">Thông Tin Giao Hàng</a></li>
          <li><a href="#">Chính Sách Bảo Mật</a></li>
          <li><a href="#">Điều Khoản &amp; Điều Kiện</a></li>
          <li><a href="#">Liên Hệ</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">khách hàng</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="contact">Hướng Dẫn Mua Hàng</a></li>
          <li><a href="#">Phiếu Quà Tặng</a></li>
          <li><a href="#">Tri Ân Khách Hàng</a></li>
          <li><a href="#">Khách Hàng Thân Thiết</a></li>
          <li><a href="#">Khuyến Mãi</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">Bộ Sưu tập</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="#">Đồng Hồ Thể Thao</a></li>
          <li><a href="gift.html">Đồng Hồ Doanh Nhân</a></li>
          <li><a href="affiliate.html">Đồng Hồ Thời Trang</a></li>
          <li><a href="#">Đồng Hồ Kim Cương</a></li>
          <li><a href="#">Đồng Hồ Vàng 24K</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <div class="content_footercms_right">
          <div class="footer-contact">
            <h5 class="contact-title footer-title">liên hệ với chúng tôi</h5>
            <ul class="ul-wrapper">
              <li><i class="fa fa-map-marker"></i><span class="location2">25A Lê Văn Lương<br>
                Cầu Giấy- Hà Nội<br></span></li>
              <li><i class="fa fa-envelope"></i><span class="mail2"><a href="#">duykhanhautofb2gmail.com</a></span></li>
              <li><i class="fa fa-mobile"></i><span class="phone2">0344561586<br>0989009990</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footer-top-cms">
        <div class="col-sm-7">
          <div class="newslatter">
            <form>
              <h5>đăng kí để nhận tin tức khuyến mãi</h5>
              <div class="input-group">
                <input type="text" class=" form-control" placeholder="Your-email@website.com">
                <button type="submit" value="Sign up" class="btn btn-large btn-primary">Đăng Kí</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="footer-social">
            <h5>kết nối với chúng tôi qua mạng xã hội</h5>
            <ul>
              <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <a id="scrollup">Scroll</a> </footer>
<div class="footer-bottom">
  <div class="container">
    <div class="copyright">Bản Quyền Thuộc Về&nbsp;<a class="yourstore" href="http://www.lionode.com/">Công ty TKC &copy; 2019 </a> </div>
    <div class="footer-bottom-cms">
      <div class="footer-payment">
        <ul>
          <li class="mastero"><a href="#"><img alt="" src="{{asset('public/watchpro/image/payment/mastero.jpg')}}"></a></li>
          <li class="visa"><a href="#"><img alt="" src="{{asset('public/watchpro/image/payment/visa.jpg')}}"></a></li>
          <li class="currus"><a href="#"><img alt="" src="{{asset('public/watchpro/image/payment/currus.jpg')}}"></a></li>
          <li class="discover"><a href="#"><img alt="" src="{{asset('public/watchpro/image/payment/discover.jpg')}}"></a></li>
          <li class="bank"><a href="#"><img alt="" src="{{asset('public/watchpro/image/payment/bank.jpg')}}"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script src="javascript/parally.js"></script> 
<script>
$('.parallax').parally({offset: -40});
</script>
<script src="wowjs_uk/wow.min.js"></script>
<script>
     new WOW().init();
    </script>
</body>
</html>
