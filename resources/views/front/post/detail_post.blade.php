@extends('front._partials.master')
@section('title',$post->name)
@section('content')
<style>
    .flat{
        border-radius: 0px;
    }
    .product-page-tab-content,.content-post{
        text-align: justify;
    }
    .product-page-tab-content p img, p img{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a> <i class="fa fa-angle-double-right"></i>
            <a href="{{route('allProduct')}}">Thi công</a> <i class="fa fa-angle-double-right"></i> <b>{{$post->name}}</b>
            <br><br>
        </div>

        <div class="product-main-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 class="pull-left">{{$post->name}}</h1>
                            <span class="pull-right">
                                <div class="fb-share-button" data-href="{{route('detailPost',['slug' => $post->slug])}}" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{route('detailPost',['slug' => $post->slug])}}" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                            </span>
                        </div>
                        <div style="clear: both;padding-top: 15px;">
                            <span class="recent-post-date pull-left">Ngày tạo: {{date('d-m-Y',strtotime($post->created_at))}}</span>
                            <span class="pull-right"><i class="fa fa-heart" aria-hidden="true" style="color: deeppink;"></i> {{$post->views}} lượt xem <i class="fa fa-eye" aria-hidden="true" style="color: deepskyblue;"></i></span>
                        </div>
                        <div style="clear: both; font-weight: bold;padding-top: 15px;">
                            <i>{{$post->description}}</i>
                        </div>
                    </div>
                    <!-- product-page-photo start -->
                    <div class="col-md-12">
                        <div class="product-page-photo">
                            <img src="{{asset($post->thumb)}}" alt="{{$post->name}}" width="100%">
                        </div>
                    </div>
                    <!-- product-page-photo end -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="product-tab">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="content-post">
                                        <p>
                                            {!!$post->content!!}
                                        </p>
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
                            <h3>Bài thi công cùng danh mục</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @include('front._partials._list_post')
                </div>
            </div>
        </div>
    </div>
</div>
@stop