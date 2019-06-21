@extends('layouts.master')
@section('title_tag','Đăng nhập WATCHPRO')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h2 class="title-login">Bạn cần đăng nhập</h2>
                </div>
                <div class="panel-body">
                    @if(Session('flag'))
                    <div class="alert alert-{{Session('flag')}}">{{Session('message')}}</div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" id="login-form" action="">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-sign-in"></i> Đăng nhập
                                </button>

                                <a class="btn btn-danger" href="{{ route('forgetpassword') }}">Bạn đã quên mật khẩu?</a>
                            </div>
                        </div>
                    </form>                    
                </div>
                <div class="text-center">
                    Bạn chưa có tài khoản. <a href="{{ route('userregister') }}" style="text-decoration: underline;color:blue;">Đăng ký tại đây</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
