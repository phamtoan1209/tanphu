<!doctype html>
<html class="no-js" lang="vi">
<head>
    <head>
        <meta name="google-site-verification" content="" />
        <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        {!! \app\Helpers\Widgets::htmlSeo() !!}
        <link rel="icon" href="{{asset(isset($website['favicon']) ? $website['favicon'] : '')}}" type="image/x-icon" />
        <link href="{{asset('front/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
        <link href="{{asset('front/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/main.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/slick.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/slick-theme.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/ninja-slider.css')}}" rel="stylesheet" />
        <link href="{{asset('front/css/thumbnail-slider.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap&subset=vietnamese" rel="stylesheet">
        @yield('css')
    </head>
<body>

    @include('front._partials.header')
    @yield('content')
    @include('front._partials.footer')
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="327319838085825"
         theme_color="#fa3c4c"
         logged_in_greeting="Xin chào, bạn muốn giúp đỡ?"
         logged_out_greeting="Xin chào, bạn muốn giúp đỡ?">
    </div>
</body>
<!-- Load Facebook SDK for JavaScript -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v3.3'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="{{asset('front/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/slick.js')}}"></script>
    <script src="{{asset('front/js/ninja-slider.js')}}"></script>
    <script src="{{asset('front/js/thumbnail-slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('front/js/jquery.lazy.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#respMenu").aceResponsiveMenu({
                resizeWidth: '768', // Set the same in Media query
                animationSpeed: 'fast', //slow, medium, fast
                accoridonExpAll: false //Expands all the accordion menu on click
            });
        });
        (function($) {
            $.fn.aceResponsiveMenu = function(options) {

                //plugin's default options
                var defaults = {
                    resizeWidth: '768',
                    animationSpeed: 'fast',
                    accoridonExpAll: false
                };

                //Variables
                var options = $.extend(defaults, options),
                    opt = options,
                    $resizeWidth = opt.resizeWidth,
                    $animationSpeed = opt.animationSpeed,
                    $expandAll = opt.accoridonExpAll,
                    $aceMenu = $(this),
                    $menuStyle = $(this).attr('data-menu-style');

                // Initilizing
                $aceMenu.find('ul').addClass("sub-menu");
                $aceMenu.find('ul').siblings('a').append('<span class="arrow "></span>');
                if ($menuStyle == 'accordion') { $(this).addClass('collapse'); }

                // Window resize on menu breakpoint
                if ($(window).innerWidth() <= $resizeWidth) {
                    menuCollapse();
                }
                $(window).resize(function() {
                    menuCollapse();
                });

                // Menu Toggle
                function menuCollapse() {
                    var w = $(window).innerWidth();
                    if (w <= $resizeWidth) {
                        $aceMenu.find('li.menu-active').removeClass('menu-active');
                        $aceMenu.find('ul.slide').removeClass('slide').removeAttr('style');
                        $aceMenu.addClass('collapse hide-menu');
                        $aceMenu.attr('data-menu-style', '');
                        $('.menu-toggle').show();
                    } else {
                        $aceMenu.attr('data-menu-style', $menuStyle);
                        $aceMenu.removeClass('collapse hide-menu').removeAttr('style');
                        $('.menu-toggle').hide();
                        if ($aceMenu.attr('data-menu-style') == 'accordion') {
                            $aceMenu.addClass('collapse');
                            return;
                        }
                        $aceMenu.find('li.menu-active').removeClass('menu-active');
                        $aceMenu.find('ul.slide').removeClass('slide').removeAttr('style');
                    }
                }

                //ToggleBtn Click
                $('#menu-btn').click(function() {
                    $aceMenu.slideToggle().toggleClass('hide-menu');
                });


                // Main function
                return this.each(function() {
                    // Function for Horizontal menu on mouseenter
                    $aceMenu.on('mouseover', '> li a', function() {
                        if ($aceMenu.hasClass('collapse') === true) {
                            return false;
                        }
                        $(this).off('click', '> li a');
                        $(this).parent('li').siblings().children('.sub-menu').stop(true, true).slideUp($animationSpeed).removeClass('slide').removeAttr('style').stop();
                        $(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                        return;
                    });
                    $aceMenu.on('mouseleave', 'li', function() {
                        if ($aceMenu.hasClass('collapse') === true) {
                            return false;
                        }
                        $(this).off('click', '> li a');
                        $(this).removeClass('menu-active');
                        $(this).children('ul.sub-menu').stop(true, true).slideUp($animationSpeed).removeClass('slide').removeAttr('style');
                        return;
                    });
                    //End of Horizontal menu function

                    // Function for Vertical/Responsive Menu on mouse click
                    $aceMenu.on('click', '> li a', function() {
                        if ($aceMenu.hasClass('collapse') === false) {
                            //return false;
                        }
                        $(this).off('mouseover', '> li a');
                        if ($(this).parent().hasClass('menu-active')) {
                            $(this).parent().children('.sub-menu').slideUp().removeClass('slide');
                            $(this).parent().removeClass('menu-active');
                        } else {
                            if ($expandAll == true) {
                                $(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                                return;
                            }
                            $(this).parent().siblings().removeClass('menu-active');
                            $(this).parent('li').siblings().children('.sub-menu').slideUp().removeClass('slide');
                            $(this).parent().addClass('menu-active').children('.sub-menu').slideDown($animationSpeed).addClass('slide');
                        }
                    });
                    //End of responsive menu function

                });
                //End of Main function
            }
        })(jQuery);
        $('.single-item').slick({
            dots: true,
            arrows: false
        });
        $(window).bind('scroll', function() {
            if ($(window).scrollTop() > 150) {
                $('.header').addClass('sticky');
            } else {
                $('.header').removeClass('sticky');
            }
        });
        if($('.img-fluid').length){
            $('.img-fluid').Lazy({
                effect: 'fadeIn',
                visibleOnly: true,
            });
        }
    </script>
    @yield('js')
</html>