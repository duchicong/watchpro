@extends('Layout.master')
@section('content')
<div class="container">
  <ul class="breadcrumb">
    <li><a href="honme"><i class="fa fa-home"></i></a></li>
    <li><a href="forgetpassword">Quên Mật Khẩu</li>
  </ul>
  <div class="row">
    <div id="column-left" class="col-sm-3 hidden-xs column-left">
      <div class="column-block">
        <div class="columnblock-title">Liên Kết</div>
        <div class="affiliate-block">
          <div class="list-group"> <a href="login.html" class="list-group-item">Đăng Nhập</a> <a href="register.html" class="list-group-item">Đăng Kí</a> <a href="forgetpassword" class="list-group-item">Quên Mật Khẩu</a> <a href="#" class="list-group-item">Tài Khoản</a> <a href="3" class="list-group-item">Lựa Chọn Thanh Toán</a> <a href="#" class="list-group-item">Liên Kết Theo Dõi</a> <a href="#" class="list-group-item last">Giao Dịch</a> </div>
        </div>
      </div>
    </div>
    <div id="content" class="col-sm-9">
      <h1>Quên Mật Khẩu</h1>
      <p>Nhập địa chỉ email liên kết với tài khoản của bạn. Nhấp vào gửi để gửi mật khẩu của bạn qua email cho bạn</p>
      <form action="forgotten" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend>Nhập Địa Chỉ Email Của Bạn</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">Địa Chỉ Email</label>
            <div class="col-sm-10">
              <input type="text" name="email" value="" placeholder="Địa Chỉ Email" id="input-email" class="form-control" />
            </div>
          </div>
        </fieldset>
        <div class="buttons clearfix">
          <div class="pull-left"><a href="login" class="btn btn-default">Trở Lại</a></div>
          <div class="pull-right">
            <input type="submit" value="Continue" class="btn btn-primary" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
