<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset ('backend/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ('backend/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset ('backend/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset ('backend/dist/css/AdminLTE.min.css') }}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('admin')}}"><b>{{Config::get('webinfos.NAME')}}</b> admin</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Đăng nhập để bắt đầu làm việc</p>
        <form action="{{route('adminLogin')}}" method="post">
            @csrf
            <div class="form-group has-feedback">
                {!! Form::text('username',old('username'),['class'=>'form-control','placeholder'=>'Email or tên đăng nhập']) !!}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            {!! $errors->first('username') ? '<p class="text-danger">'. $errors->first('username') .'</p>' : ''!!}
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            {!! $errors->first('password') ? '<p class="text-danger">'. $errors->first('password') .'</p>' : ''!!}
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <p class="">
        {!! $errors->first('message') ? '<span class="text-danger">' . $errors->first('message') . '</span>' : '' !!}
        </p>
        <div style="margin-top: 5px;">
            Copyright © 2019-2020 <b>{{Config::get('webinfos.TITLE')}}</b>.
        </div>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset ('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset ('backend/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
