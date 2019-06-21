@extends('layouts.new-master')
@section('title_tag','Xác nhận đơn hàng')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
    <ul class="breadcrumb">
      <li><a href="{!!url('/')!!}"><i class="fa fa-home"></i> Trang Chủ</a></li>
      <li><a href="{!! route('getviewcart') !!}">Đặt hàng</a></li>
      <li><a href="javascript:void(0)">{!!$slug!!}</a></li>
    </ul>
  </div>
</div>
<div class="dat-hang col-xs-12 col-sm-12 col-md-12 col-lg-12">             
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">          
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <div class="panel panel-success no-border">
          <div class="panel-body no-padding">   
            <legend class="text-left">Xác nhận thông tin đơn hàng </legend> 
            {{-- form thong tin khach hang dat hang --}}
            @if ($_GET['paymethod'] =='cod' )
            <form action="" method="POST" role="form">
              
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th class="text-center">SL</th>
                        <th>Giá</th>
                        <th>Thành tiền</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $sluong=0;$stt=0;$total=0; ?>
                      @foreach($cart->items as $row)
                      @php
                      if($row->khuyen_mai){
                        $thanhtien = $row['khuyen_mai'] * $row['qty'];
                      }else{
                        $thanhtien = $row['gia_tien'] * $row['qty'];
                      }
                      // tinh tong tien total
                      if($row->khuyen_mai){
                        $total = $total + $thanhtien;
                      }
                      else{
                        $total = $total + $thanhtien;
                      }
                      $sluong = $sluong + $row['qty'];
                      $stt++;
                      @endphp
                      <tr>
                        <td>{!!$stt!!}</td>
                        <td><img src="{!!url('public/uploads/products/'.$row->anh)!!}" alt="{!!$row->ten_san_pham!!}" width="50" height="80"></td>
                        <td>{!!$row->ten_san_pham!!}</td>
                        <td class="text-center">                        
                          <span>{!!$row->qty!!}</span>
                        </td>
                        <td>
                          @if($row->khuyen_mai)
                            <del>{!! number_format($row->gia_tien,0) !!}</del><br/>
                            <strong style="color:red;">{!! number_format($row->khuyen_mai,0) !!}</strong>
                          @else
                          <strong style="color:red;">{!! number_format($row->gia_tien,0) !!}</strong>
                          @endif
                        </td>
                        <td><strong style="color:#232f3e">{!!number_format($thanhtien,0)!!}Vnd</strong>
                        </td>
                      </tr>
                      @endforeach                    
                      <tr>
                        <td colspan="3"><strong>Tổng cộng: {!!$stt!!} Sản phẩm</strong> </td>
                        <td class="text-center">{!!$sluong!!}</td>
                        <td class="text-right">Tổng tiền:</td>
                        <td colspan="2" style="color:#fff;font-weight: bold;">
                          {!! number_format($total,0) !!} Vnd
                        </td>                      
                      </tr>                    
                    </tbody>
                  </table>
                  
                </div>
            
              <input type="hidden" name="txttotal" value="{{$total}}">
              <input type="hidden" name="txtsluong" value="{{$sluong}}">
              <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-6">
                  <legend class="text-left">Xác nhận thông tin khách hàng</legend>
                  <?php
                    (Auth::check()) ? Auth::user()->name : 'helo';
                  ?>
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="txthoten">Họ và tên: (<span class="bat-buoc">*</span>)</label>
                    <input type="text" class="form-control" name="txthoten" required="required"  value="{{ (Auth::check()) ? Auth::user()->name : null }}">
                  </div>
                  <div class="form-group">
                    <label for="txtaddress">Địa chỉ: (<span class="bat-buoc">*</span>)</label>
                    <input type="text" class="form-control" name="txtaddress" required="required" value="{{ (Auth::check()) ? Auth::user()->address : null }}">
                  </div>
                  <div class="form-group">
                    <label for="txttel">Số điện thoại: (<span class="bat-buoc">*</span>)</label>
                    <input type="text" class="form-control" name="txttel" required="required" value="{{ (Auth::check()) ? Auth::user()->phone : null }}">
                  </div>
                  <div class="form-group">
                    <label for="txtmail">E-mail:</label>
                    <input type="email" class="form-control" name="txtmail" value="{{ (Auth::check()) ? Auth::user()->email : null }}">
                  </div>
                  <div class="form-group">
                    <label for="">Ghi chú khác</label>
                    <textarea name="txtnote" id="inputtxtNote" class="form-control" required="required" rows="4">                    
                    </textarea>
                  </div> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class=" box-right">
                    <legend class="text-left">Hình thức thanh toán</legend>
                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                              <label for='r11' style='width: 350px;'>
                                <input type='radio' id='r11' name='txtthanhtoan' value='paypal' required checked/> Chuyển khoản ngân hàng
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"></a>
                              </label>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ được giao sau khi tiền đã chuyển.</p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class=panel-title>
                              <label for='r12' style='width: 350px;'>
                                <input type='radio' id='r12' name='txtthanhtoan' value='COD' required /> Trả tiền mặt khi nhận hàng
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"></a>
                              </label>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>Giao hàng, thu tiền</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>             
              <button type="submit" class="btn btn-primary pull-right"> Đặt hàng (COD)</button> 
            </form>
            @else 
            <form action="{!!url('/payment')!!}" method="Post" accept-charset="utf-8">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="">
                  - Tên khách hàng : <strong>{{ Auth::user()->name }} </strong> &nbsp;
                  - Điện thoại: <strong> {{ Auth::user()->phone }}</strong> &nbsp;
                  - Địa chỉ: <strong> {{ Auth::user()->address }}</strong>
                </label>
              </div>
              <br>                
              <button type="submit" class="btn btn-danger pull-left"> Thanh toán qua Paypal </button> &nbsp;
            </form>
            @endif
          </div>
        </div>   
      </div>
    </div>     
  </div>
</div>

<!-- ===================================================================================/news ============================== -->
@endsection