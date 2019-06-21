@extends('back-end.layouts.app')
@section('title_tag_admin_2','Đăng nhập Admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Đăng nhập Admin</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="">
                       
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>
                             
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Ghi nhớ
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-2">
                                <button type="submit" class="btn btn-primary" style="margin-left: 110px;">Đăng nhập</button>  
                            </div>
                        
                         <div class="col-md-6 col-md-offset-1" style="padding-left: 44px;">
                                <a class="btn btn-link" href="{{route('dangki')}}">Đăng kí</a>
                                <a class="btn btn-link" href="{{route('forgetpassword')}}">Quên mật khẩu?</a>
                        </div>
                        </div>
                    </form>
                </div>
                @if(Session('flag'))
                <div class="alert alert-{{Session('flag')}}">{{Session('message')}}</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
