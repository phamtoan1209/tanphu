@extends('front._partials.master')
@section('title',$product->name)
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
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a> <i class="fa fa-angle-double-right"></i>
                <a href="{{route('allProduct')}}">Sản phẩm</a> <i class="fa fa-angle-double-right"></i> <b>{{$product->name}}</b>
                <br><br>
            </div>
            <div class="product-main-area">
                <div class="container">
                    <div class="row">
                        <!-- product-page-photo start -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="product-page-photo">
                                <img src="{{asset($product->thumb)}}" alt="{{$product->name}}" width="100%" style="border: 1px solid #83CBDC;">
                            </div>
                        </div>
                        <!-- product-page-photo end -->
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="product-page-content">
                                <div class="pro-page-title">
                                    <h1>{{$product->name}}</h1>
                                </div>
                                <div class="pro-shor-desc">
                                    <p>
                                        <b style="font-size: 18px;"><i class="fa fa-star" style="color: #FBBC05;"> </i> Danh mục:</b>
                                        <a href="{{route('allCategoryProduct',['slug' => $product->category->slug])}}"><b>{{$product->category->name}}</b></a>
                                    </p>
                                    <p>
                                        <b style="font-size: 18px;"><i class="fa fa-star" style="color: #FBBC05;"> </i> Mô tả ngắn:</b><br>
                                        {{$product->description}}
                                    </p>
                                    <p>
                                        <b style="font-size: 18px;"> <i class="fa fa-star" style="color: #FBBC05;"> </i> Chi tiết sản phẩm:</b><br>
                                        @foreach($product->details as $detail)
                                            <p> <i class="fa fa-check-circle" aria-hidden="true" style="color: green;"></i> <i>{{$detail->name}}</i>: {{$detail->value}}</p>
                                        @endforeach
                                    </p>
                                    <p>
                                        <i class="fa fa-heart" aria-hidden="true" style="color: deeppink;"></i> {{$product->views}} lượt xem <i class="fa fa-eye" aria-hidden="true" style="color: deepskyblue;"></i>
                                    </p>
                                    <p class="">
                                        <div class="fb-share-button" data-href="{{route('detailProduct',['slug' => $product->slug])}}" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{route('detailProduct',['slug' => $product->slug])}}" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="product-tab">
                                <div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active" style="background: #fbbc05;"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Chi Tiết Sản Phẩm</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <div class="product-page-tab-content">
                                                <p>
                                                    {!!$product->content!!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="features-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="section-heading">
                                <h3>Sản phẩm cùng danh mục</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @include('front._partials._list_product')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop