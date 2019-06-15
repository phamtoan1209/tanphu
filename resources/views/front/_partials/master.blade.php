<!doctype html>
<html class="no-js" lang="vi">
<head>
    <head>

        <meta name="google-site-verification" content="" />

        <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>@yield('title','Trang chủ setuphouse.vn')</title>
        <link rel="icon" href="{{isset($website) && isset($website['favicon'])? asset($website['favicon']) : ''}}" type="image/x-icon" />
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
@yield('content')
@include('front._partials.footer')
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v3.2'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="327319838085825"
     theme_color="#fa3c4c"
     logged_in_greeting="Xin chào, chúng tôi có thể giúp gì cho bạn?"
     logged_out_greeting="Xin chào, chúng tôi có thể giúp gì cho bạn?">
</div>
<script src="{{asset('front/js/jquery-1.11.2.min.js')}}" async></script>
<script src="{{asset('front/js/bootstrap.min.js')}}" async></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}" async></script>
<script src="{{asset('front/js/jquery.slicknav.js')}}" async></script>
<script src="{{asset('front/js/jquery.countdown.min.js')}}" async></script>
<script src="{{asset('front/js/price-slider.js')}}" async></script>
<script src="{{asset('front/js/jquery.scrollUp.min.js')}}" async></script>
<script src="{{asset('front/js/plugins.js')}}" async></script>
<script src="{{asset('front/js/main.js')}}" async></script>
<script type="text/javascript" src="{{asset('front/js/bootbox.min.js')}}" async></script>
 </body>
</html>