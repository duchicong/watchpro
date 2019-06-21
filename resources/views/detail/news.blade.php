@extends('layouts.new-master')
@section('title_tag')
{!!$data->chu_de!!}
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
    <ul class="breadcrumb">
      <li><a href="{!!url('/')!!}"><i class="fa fa-home"></i> Trang Chủ</a></li>
      <li><a href="{!!url('/tin-tuc')!!}">Tin tức</a></li>
      <li><a href="javascript:void(0)">{!!$data->chu_de!!}</a></li>
    </ul>
  </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
  <div class="hidden-xs col-sm-3 col-md-3 col-lg-3 no-padding"> 
      @include('sidebar.cat_pro')
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
                  <img class="img-new" src="{!!url('public/uploads/blogs/'.$data->link_anh)!!}" alt="{!!$data->chu_de!!}" style="max-width: auto;width: 100%;margin-top: 20px;"> 
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
                <hr/>
                <h3>Bài viết khác</h3>
                <ol>
                @foreach($readmore as $row)
                  @if($row->id != $data->id)
                  <li><a class="post_other" href="{!!url('/tin-tuc/'.$row->slug)!!}" title="{!!$row->chu_de!!}">{!!$row->chu_de!!}</a></li>
                  @endif
                @endforeach 
                </ol>
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