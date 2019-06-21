<div class="clearfix"></div>
<footer>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">VỀ CHÚNG TÔI</h5>
        <ul class="list-unstyled ul-wrapper">
          <?php 
            //Footer about us
            $aboutus = DB::table('blogs')->whereIn('id',[1,3,4,5])->get();
            //footer customer
            $customer = DB::table('blogs')->whereIn('id',[6,7,8,9])->get();
            //footer categories
            $categories = DB::table('loaisanpham')->limit(4)->get();
          ?>
          @foreach($aboutus as $data)
          <li><a href="{{url('page/'.$data->slug)}}">{!! $data->chu_de !!}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">khách hàng</h5>
        <ul class="list-unstyled ul-wrapper">
          @foreach($customer as $data)
          <li><a href="{{url('page/'.$data->slug)}}">{!! $data->chu_de !!}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">Danh Mục Đồng Hồ</h5>
        <ul class="list-unstyled ul-wrapper">
          @foreach($categories as $data)
          <li><a href="{!!$data->slug_loai_san_pham!!}">{!!$data->ten_loai_san_pham!!}</a></li>
          @endforeach
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
      <div class="footer-top-cms text-center">
        <div class="text-center">
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
  <a id="scrollup">Scroll</a> 
</footer>