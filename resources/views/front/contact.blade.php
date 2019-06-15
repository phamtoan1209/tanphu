@extends('front._partials.master')
@section('title','Liên hệ')
@section('content')
    <style>
        .flat{
            border-radius: 0px;
        }
        .product-page-tab-content{
            text-align: justify;
        }
        .product-page-tab-content p img{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <div class="entry-header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="entry-title">
                        <h1>Trang Liên Hệ</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 22px; margin-bottom: 25px;" class="contact-title">Gửi Tin Nhắn</h1>
                </div>
            </div>

            <div class="row">
                @if(session()->has('alert_message'))
                    <div class="bg-success text-success" style="padding: 10px; margin: 0px 15px;margin-bottom: 15px;">{{session()->has('alert_message') ? session()->get('alert_message') : ''}}</div>
                @endif
                <form accept-charset="UTF-8" method="post" action="{{route('addContact')}}">
                    @csrf
                    <div class="col-lg-6 col-md-6">
                        <div class="row">
                            <div class="inner-form">
                                <div class="col-md-6">
                                    {!! Form::text('name', old( 'name',''), ['class' => 'form-control','placeholder'=>"Họ và tên ...","required"=>"required"]) !!}
                                    {!! $errors->first('name') ? '<p class="text-danger">'. $errors->first('name') .'</p>' : ''!!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::text('phone', old( 'phone',''), ['class' => 'form-control','placeholder'=>"Số điện thoại ...","required"=>"required"]) !!}
                                    {!! $errors->first('phone') ? '<p class="text-danger">'. $errors->first('phone') .'</p>' : ''!!}
                                </div>
                                <div class="col-md-12">
                                    {!! Form::email('email', old( 'email',''), ['class' => 'form-control','placeholder'=>"Địa chỉ email ...","required"=>"required"]) !!}
                                    {!! $errors->first('email') ? '<p class="text-danger">'. $errors->first('email') .'</p>' : ''!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 contact-message">
                        {!! Form::textarea('content', old( 'content',''), ['rows' => '7','class' => 'form-control flat','placeholder'=>"Nội dung liên hệ ...","required"=>"required"]) !!}
                        {!! $errors->first('content') ? '<p class="text-danger">'. $errors->first('content') .'</p>' : ''!!}
                    </div>
                    <div class="col-md-12">
                        <div class="contact-submit">
                            <input type="submit" value="Gủi tin nhắn" />
                        </div>
                    </div>
                </form>
            </div>

            <div style="margin-top: 50px;" class="row">
                <div class="col-md-6" style="border-left: 1px solid silver ;">
                    <p style="font-size: 16px;" class="em-phone"><span style="color: #83CBDC;;" class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;</span>Địa chỉ: <span>{{$website['address']}}</span></p>
                    <p style="font-size: 16px;" class="em-phone"><span style="color: #83CBDC;;" class="fa fa-phone">&nbsp;&nbsp;&nbsp;</span>Điện thoại: <span>{{$website['phone']}}</span></p>
                </div>
                <div class="col-md-6" style="border-left: 1px solid silver ;" >
                    <p style="font-size: 16px;" class="em-email"><span style="color: #83CBDC;;" class="fa fa-envelope">&nbsp;&nbsp;&nbsp;</span>Email: <span><a target="_blank" style=" font-size: 16px; color: black;" href="mailto:{{$website['email']}}">{{$website['email']}}</a></span></p>
                    <p style="font-size: 16px;" class="em-phone"><span style="color: #83CBDC;;" class="fa fa-globe">&nbsp;&nbsp;&nbsp;</span>Website: <span> {{$website['domain']}} </span></p>
                </div>
            </div>


        </div>
    </div>


    <div  style="width: 100%;" class="map map-area">
        <div id="maps" style="height: 410px; background-color: #fff;"></div>
    </div>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyApuHYpG86ZNMVPfT10lkiOixT8IJzwnKo"></script>
    <script>
        var map, marker, pos, crd;
        var directionsService;
        var options = {
            enableHighAccuracy: true,
            timeout: 10000,
            maximumAge: 0
        };

        function initialize_google_map() {
            myLatLng = new google.maps.LatLng(20.969766, 105.794848); // Địa điểm mặc định của vị trí
            var mapOptions = {
                zoom: 13,
                center: myLatLng
            };
            map = new google.maps.Map(document.getElementById('maps'), mapOptions);
            marker = new google.maps.Marker({   // Kéo địa điểm để lấy vị trí
                map: map,
                position: myLatLng,
                label: 'Xưởng Mỹ Thuật : create art space',  // Tiêu đề của vị trí

            });
            var infowindow = new google.maps.InfoWindow({   // Cho phép hiển thị ô thông tin vị trí
                map: map,
                position: myLatLng,
                content: 'Xưởng Mỹ Thuật : create art space'  // Nội dung thẻ Label
            });
            google.maps.event.addListener(marker, 'dragend', function() {

            });

        }
        setTimeout("initialize_google_map()", 1000);    // SET thời gian chờ là 3s
    </script>
@stop