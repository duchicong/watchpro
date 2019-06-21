@extends('layouts.new-master')
@section('title_tag','Giỏ hàng')
@section('content')
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
      <ul class="breadcrumb">
        <li><a href="{!!url('/')!!}"><i class="fa fa-home"></i> Trang Chủ</a></li>
        <li><a href="javascript:void(0)">Đặt hàng</a></li>
        <li><a href="javascript:void(0)">{!!$slug!!}</a></li>
      </ul>
    </div>
  </div>
  <div class="thanh-toan col-xs-12 col-sm-12 col-md-12 col-lg-12">      
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding-left">              
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="panel panel-success">
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
            </div>
            @elseif (Session()->has('flash_level'))
              <div class="alert alert-success">
                  <ul>
                      {!! Session::get('flash_massage') !!} 
                  </ul>
              </div>
          @endif
            <div class="panel-body no-padding ">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Hình ảnh</th>
                      <th>Tên sản phẩm</th>
                      <th class="text-center">SL</th>
                      <th>Hành động</th>
                      <th>Giá</th>
                      <th>Thành tiền</th>
                    </tr>
                  </thead>
                  
                  <tbody> 
                  <?php $sluong = 0;$stt=0;$total=0; ?>
                  @foreach($cart->items as $row)
                  @php
                    if(empty($row['qty'])){$row['qty']=1; }
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
                          @if (($row->qty) >1)
                          <a href="{!!url('gio-hang/update/'.$row->id.'/'.$row->qty.'-down')!!}"><span class="glyphicon glyphicon-minus"></span></a> 
                          @else
                            <a href="javascript:void(0)"><span class="glyphicon glyphicon-minus"></span></a> 
                          @endif
                          <input type="text" class="qty text-center" value=" {!!$row->qty!!}" style="width:30px; font-weight:bold; font-size:15px; color:blue;" readonly="readonly"> 
                        <a href="{!!url('gio-hang/update/'.$row->id.'/'.$row->qty.'-up')!!}">+</a>
                      </td>
                      <td><a href="{!!url('gio-hang/delete/'.$row->id)!!}" onclick="return confirm('Xóa sản phẩm này ?')" >Xóa</a></td>
                      <td>
                        @if($row->khuyen_mai)
                          <del>{!! number_format($row->gia_tien,0) !!}</del><br/>
                          <strong style="color:red;">{!! number_format($row->khuyen_mai,0) !!}</strong>
                        @else
                        <strong style="color:red;">{!! number_format($row->gia_tien,0) !!}</strong>
                        @endif
                      </td>
                      <td><strong style="color:#384250;">{!! number_format($thanhtien,0) !!}</strong></td>
                    </tr> 
                    @endforeach               
                    <tr>
                      <td colspan="3"><strong>Tổng cộng: {!! $stt !!} Sản phẩm</strong> </td>
                      <td class="text-center">{!!$sluong!!}</td>
                      <td></td>
                      <td>Tổng tiền:</td>
                      <td style="color:#fff;font-weight: bold;">
                        {!! number_format($total,0) !!}
                      </td>
                      
                    </tr>                    
                  </tbody>
                  
                </table>                
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 no-paddng">
              @if(count($cart->items)!=0)
                
                  <form action="{!!url('/dat-hang')!!}" method="get" accept-charset="utf-8">                    
                    <div class="input-group hidden">
                      <select name="paymethod" id="inputPaymethod" class="form-control" required="required"> 
                        <option value="cod"> Thanh toán khi nhận hàng ( COD )</option>
                      </select>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                      <button type="submit" class="btn btn-danger pull-right">Tiến hành thanh toán</button>
                      <a href="{!!url('/')!!}" type="button" class="btn btn-large btn-success pull-left">Tiếp tục mua hàng</a>
                  </form>
              @else
              Không có sản phẩm nào trong giỏ hàng
              <a href="{!!url('/')!!}" type="button"><strong>Quay lại cửa hàng</strong></a>
              @endif
              </div>
              <hr>
            </div>
          </div>   
        </div>
      </div>     
    </div> 
    <div class="hidden-xs col-sm-3 col-md-3 col-lg-3 no-padding">
      @include('sidebar.cat_pro') 
    </div> 
</div>
@endsection