@extends('layouts.master')
@section('title_tag','Không tồn tại!')
@section('content')
   <div class="container-fluid">
       <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->

            <div class="error-container">
                <div class="well">
                    <h1 class="grey lighter smaller">
                        <span class="blue bigger-125">
                            <i class="ace-icon fa fa-sitemap"></i>
                            404
                        </span>
                        Mục này không tồn tại
                    </h1>

                    <hr />
                    <h3 class="lighter smaller">Chúng tôi tìm kiếm khắp nơi nhưng chúng tôi không thể tìm thấy nó!</h3>

                    <div >
                        <div class="space"></div>
                        <h4 class="smaller">Hãy thử một trong các cách sau: </h4>

                        <ol>
                            <li>Kiểm tra lại địa chỉ của bạn</li>
                            <li>Đọc hưỡng dẫn</li>
                            <li>Cho chúng tôi biết</li>
                        </ol>
                    </div>
                    <hr />
                    <div class="space"></div>
                    <div class="center">
                        <a href="{!!route('index')!!}" class="btn btn-grey">
                            <i class="ace-icon fa fa-arrow-left"></i>
                            về trang chủ
                        </a>
                    </div>
                </div>
            </div>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
   </div>
@endsection