@extends('Layout.master')
@section('content')
<div class="container">
  <ul class="breadcrumb">
    <li><a href="home"><i class="fa fa-home"></i></a></li>
    <li><a href="#">Tài Khoản</a></li>
    <li><a href="login">Đăng nhập</a></li>
  </ul>
  <div class="row">
    <div class="col-sm-3 hidden-xs column-left" id="column-left">
      <div class="column-block">
        <div class="columnblock-title">Tài Khoản</div>
        <div class="account-block">
          <div class="list-group"> <a class="list-group-item" href="login">Đăng Nhập</a> <a class="list-group-item" href="register">Đăng Kí</a> <a class="list-group-item" href="forgetpassword">Forgotten Password</a> <a class="list-group-item" href="#">Tài Khoản</a> <a class="list-group-item" href="#">Address Book</a> <a class="list-group-item" href="#">Wish List</a> <a class="list-group-item" href="#">Order History</a> <a class="list-group-item" href="download">Downloads</a> <a class="list-group-item" href="#">Reward Points</a> <a class="list-group-item" href="#">Returns</a> <a class="list-group-item" href="#">Transactions</a> <a class="list-group-item" href="#">Newsletter</a><a class="list-group-item last" href="#">Recurring payments</a> </div>
        </div>
      </div>
    </div>
    <div class="col-sm-9" id="content">
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <h2>New Customer</h2>
            <p><strong>Register Account</strong></p>
            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
            <a class="btn btn-primary" href="register">Continue</a></div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <h2>Returning Customer</h2>
            <p><strong>I am a returning customer</strong></p>
            <form enctype="multipart/form-data" method="post" action="login">
              <div class="form-group">
                <label for="input-email" class="control-label">Địa Chỉ Email</label>
                <input type="text" class="form-control" id="input-email" placeholder="E-Mail Address" value="" name="email">
              </div>
              <div class="form-group">
                <label for="input-password" class="control-label">Mật Khẩu</label>
                <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                <a href="forgetpassword">Lấy Lại Mật Khẩu</a></div>
              <input type="submit" class="btn btn-primary" value="Login">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
          <li class="mastero"><a href="#"><img alt="" src="public/Templete_Watch/image/payment/mastero.jpg"></a></li>
          <li class="visa"><a href="#"><img alt="" src="public/Templete_Watch/image/payment/visa.jpg"></a></li>
          <li class="currus"><a href="#"><img alt="" src="public/Templete_Watch/image/payment/currus.jpg"></a></li>
          <li class="discover"><a href="#"><img alt="" src="{{asset('image/payment/discover.jpg"></a></li>
          <li class="bank"><a href="#"><img alt="" src="public/Templete_Watch/image/payment/bank.jpg"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection