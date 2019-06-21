@extends('layouts.new-master')
@section('title_tag')
{!!$data->chu_de!!}
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
    <ul class="breadcrumb">
      <li><a href="{!!url('/')!!}"><i class="fa fa-home"></i> Trang Chủ</a>
      <li><a href="javascript:void(0)">{!!$data->chu_de!!}</a></li>
    </ul>
  </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
  <div class="hidden-xs col-sm-3 col-md-3 col-lg-3 no-padding"> 
      @include('sidebar.cat_pro')           
      <!-- panel inffo 1 -->
      @include('sidebar.new_pro') 
  </div>           
  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding">              
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-success margin-left">
          <div class="panel-body">
            <div class="row">
              <!-- hot new content -->
              <div class="col-lg-12">
                <h1 class="chu_de">{!!$data->chu_de!!}</h1>
                @if($data->link_anh)
                <div class="text-center">
                  <img class="img-new" src="{!!url('public/uploads/blogs/'.$data->link_anh)!!}" alt="{!!$data->chu_de!!}" style="max-width: 700px;width: auto;"> 
                </div>  
                @endif   
                <p class="summary-content">
                  @if($data->mieu_ta)
                  <blockquote class="mieu_ta text-justify">
                      {!!$data->mieu_ta!!}   
                  </blockquote>  
                  @endif        
                  <div class="accordion-inner" style="text-align: justify;padding-bottom: 0px;">
                    {!!$data->noi_dung!!}
                  </div>
                  <p class="text-left" style="color:#000">
                    <span style="font-size:10px;color:#bdc3c7;">Sử lần cuối: {!!$data->updated_at!!} </span></p>
                    @if($data->tac_gia)
                    <p class="time-views text-right"> <span> Đăng bởi: </span> <strong>{!!$data->tac_gia!!}</strong></p>
                    @endif
                </p>
                </div>                
              </div>

              <div class="row">
                <?php 
                $readmore = DB::table('blogs')
                ->where('danh_muc_id',5)
                ->orderBy('created_at', 'desc')
                ->paginate(5); 
                ?>
                @if(count($readmore)>0)
                <h3 style="padding-left: 20px;"> Tin khác</h3>
                <hr>
                @foreach($readmore as $row)
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:20px;"> 
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <a href="{!!url('/tin-tuc/'.$row->slug)!!}" title="{!!$row->chu_de!!}"><img src="{!!url('public/uploads/blogs/'.$row->link_anh)!!}" alt="{!!$row->chu_de!!}" width="90%" height="99%"> </a>
                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <h3><a href="{!!url('/tin-tuc/'.$row->slug)!!}" title="{!!$row->chu_de!!}">{!!$row->chu_de!!}</a></h3>
                    <p> 
                      {!! str_limit($row->mieu_ta, 120) !!}
                    </p>
                    <p><strong>Lúc :</strong> {!!$row->created_at!!} Bởi : <strong>{!!$row->tac_gia!!} </strong></p>
                  </div>
                </div> 
                @endforeach 
              {!!$readmore->render()!!}
              @endif
              </div><!-- /row -->
            </div>
          </div>   
        </div>
      </div>     
    </div> 
  </div>
<!-- ===================================================================================/news ============================== -->
@endsection