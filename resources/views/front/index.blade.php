@extends('front._partials.master')
@section('title','Trang chủ')
@section('content')
    @include('front._partials.menu')
    <div class="features-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-heading">
                        <h3>Sản Phẩm Mới</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                @include('front._partials._list_product')
                <div class="col-md-12 text-right clear" >
                    <a  href="{{route('allProduct')}}">Xem tất cả <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="recent-post-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h3>Bài thi công</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('front._partials._list_post')
                <div class="col-md-12 text-right clear">
                    <a  href="{{route('allPost')}}">Xem tất cả <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@stop