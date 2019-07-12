@extends('front._partials.master')
@section('title','Liên hệ')
@section('content')
    <div class="clear"></div>
    <section>
        <div class="page-title py-5">
            <h1>Liên hệ</h1>
        </div>
        <div class="breadcrumbs-yoat py-5">
            <div class="container">
                <p id="breadcrumbs"><span><span><a href="{{route('home')}}">Trang chủ</a> / <span class="breadcrumb_last" aria-current="page">Liên hệ</span></span></span></p>
            </div>
        </div>
    </section>
    <main>
        <div class="contact-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386950.6511603643!2d-73.70231446529533!3d40.738882125234106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva+York!5e0!3m2!1ses-419!2sus!4v1445032011908" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row form-contact py-5">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ctinfo-left">
                        <div id="ct-des"><strong>{{\Illuminate\Support\Facades\Config::get('webinfos.NAME')}}</strong><br><br> Chúng tôi luôn trân trọng những góp ý &amp; luôn sẵn sàng phản hồi những câu hỏi của bạn trong thời gian sớm nhất.</div>
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{isset($website['address']) ? $website['address'] : ''}}</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>{{isset($website['email']) ? $website['email'] : ''}}</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>{{isset($website['phone']) ? $website['phone'] : ''}}</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 ctinfo-right">
                        <form method="POST" action="{{route('addContact')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Tên của bạn">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email của bạn">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" aria-describedby="emailHelp" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <textarea name="content" class="form-control" rows="3" placeholder="Nhập lời nhắn"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">Gửi đi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @section('js')
        <script type="text/javascript">
            $(document).ready(function () {
                $('input[value="Gửi ý kiến"]').hide();
            });
        </script>
    @stop
@stop