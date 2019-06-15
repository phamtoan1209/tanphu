<footer>
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-widget widget-contact">
                        <h3 class="widget-title">Liên Hệ</h3>
                        <ul class="footer-menu">
                            <li><i class="fa fa-map-marker"> </i>  {{$website['address']}}</li>
                            <li><i class="fa fa-phone"> </i> <strong>tel</strong> : {{$website['phone']}}</li>
                            <li><i class="fa fa-globe"> </i> <strong>Website</strong> : {{$website['domain']}}</li>
                            <li><i class="fa fa-envelope"> </i> <strong>Email</strong> : {{$website['email']}}</li>
                            <li><span style="font-size: 12px; color: #888;">© 2018 Copyright setuphouse.vn | <a style="color: #888;" target="_blank" href="http://setuphouse.vn/"><strong>setuphouse.vn</strong></a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h3 class="widget-title">Danh Mục</h3>
                        <ul class="footer-menu">
                            <li><a title="" href="{{route('allProduct')}}">SẢN PHẨM</a></li>
                            <li><a title="" href="{{route('allPost')}}">THI CÔNG</a></li>
                        </ul>
                        <h3 class="widget-title">Khẩu hiệu</h3>
                        <ul class="footer-menu">
                            <li class="text-danger"><i class="fa fa-star" style="color: #FBBC05;"> </i> {{$website['slogan']}}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-widget">
                        <div class="fb-page" data-href="https://www.facebook.com/nabagiacnc/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">

                            <div class="fb-page-box">
                                <div class="fb-page" data-href="https://www.facebook.com/nabagiacnc/" data-height="300" data-width="300"
                                     data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                                     data-show-facepile="false" data-tabs="messages" data-show-posts="false">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="footer-widget facebook-fanpage" style="border: 1px solid orange;position: fixed;bottom: 0px;right: 0px;width: 300px;background:#fff;padding-left: 5px;">
        <div style="position: absolute;top: 2px;right: 5px;cursor: pointer;"><i class="fa fa-angle-down fa-2x hidden-page" data-status="0" style="font-weight: bold;color: green;"></i></div>
        <div style="color: orange;font-size: 15px;"><b>{{$website['phone']}}</b> <img src="{{asset('images/phone.gif')}}" alt="" width="50px;"></div>
        <div class="fb-page" data-href="https://www.facebook.com/nabagiacnc/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">

            <div class="fb-page-box">
                <div class="fb-page" data-href="https://www.facebook.com/nabagiacnc/" data-height="300" data-width="300"
                     data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                     data-show-facepile="false" data-tabs="messages" data-show-posts="false">
                </div>
            </div>
        </div>
    </div>

</footer>

