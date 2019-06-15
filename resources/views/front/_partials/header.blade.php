<style>
    .menu-active{
        border-bottom: 3px solid red;
    }
    .navbar-nav li a{
        font-weight: bold;
        text-transform: uppercase !important;
    }
    body{
        overflow-x: hidden;
    }
</style>
<header>
    <div class="header-mid-area" style="padding-top: 5px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 hidden-xs">
                    <p class="pull-left">
                        Ngày <?=date('d/m/Y',strtotime(date('Y-m-d H:i:s')))?>
                    </p>
                    <p class="pull-right">
                        <a href="https://www.facebook.com/nabagiacnc/" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true" style="color:#1475F2;"></i></a> &nbsp;
                        <i class="fa fa-google-plus-square fa-2x" aria-hidden="true" style="color:#EA4335;"></i>
                    </p>
                </div>
                <div style="clear: both">
                    <div class="col-sm-3">
                        <div class="logo">

                            <a href="{{route('home')}}">
                                <img alt="setuphouse.vn" title="Xây nhà đỉnh cao"
                                     src="{{asset($website['logo'])}}" width="100%" style="max-height: 70px;"/>
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-9">
                        <nav class="navbar navbar-collapse" style="margin-bottom: 10px !important; border-bottom: 1px dotted #83CBDC;">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="background:#79C5B1;">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar" style="background:white !important;"></span>
                                        <span class="icon-bar" style="background:white !important;"></span>
                                        <span class="icon-bar" style="background:white !important;"></span>
                                    </button>
                                </div>
                                <div class="container">

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding: 0px 0px;">
                                        <ul class="nav navbar-nav">
                                            <li class="menu menu-home"><a href="{{route('home')}}">Trang chủ <span class="sr-only">(current)</span></a></li>
                                            <li class="menu menu-intro"><a href="{{route('intro')}}">Giới thiệu</a></li>
                                            <li class="menu menu-product"><a href="{{route('allProduct')}}">Sản phẩm</a></li>
                                            <li class="menu menu-post"><a href="{{route('allPost')}}">Thi công</a></li>
                                            <li class="menu menu-contact"><a href="{{route('contact')}}">Liên hệ</a></li>
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>



</header>