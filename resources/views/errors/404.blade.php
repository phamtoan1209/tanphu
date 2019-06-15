<!doctype html>
<html class="no-js" lang="vi">
<head>
    <head>


        <meta name="google-site-verification" content="" />

        <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>@yield('title','Trang chủ setuphouse.vn')</title>
        <meta name="author"             content="Nhóm Đỉnh Cao"/>
        {{--<link rel="shortcut icon" href="https://shopxanh.com:88/files/shopxanh/logo/Logo_mini_web.png"/>--}}
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/owl.theme.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/owl.transitions.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/animate.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/slicknav.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/normalize.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
        <script src="{{asset('front/js/modernizr-2.8.3.min.js')}}"></script>
        @yield('css')
    </head>
<body>

@include('front._partials.header')
    <div class="container text-center" style="padding-top: 20px">
        <h3>
            Xin lỗi chúng tôi không tìm thấy trang của bạn. <br>
            Quay lại <i class="fa fa-angle-double-right"></i> <a href="{{route('home')}}">trang chủ</a>
        </h3>
        <img src="{{asset('images/404.png')}}" alt="" width="100%">
    </div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script src="{{asset('front/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('front/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('front/js/price-slider.js')}}"></script>
<script src="{{asset('front/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('front/js/plugins.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/bootbox.min.js')}}"></script>


</body>
</html>