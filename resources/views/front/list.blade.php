@extends('front._partials.master')
@section('title',isset($posts) ? 'Trang bài thi công' : 'Trang sản phẩm')
@section('content')
    <style>
        .flat{
            border-radius: 0px;
        }
    </style>
    <div class="features-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-heading">
                        <h3>
                            @if(isset($posts))
                                Thi CÔng
                            @else
                                Sản phẩm
                            @endif
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="row">
                        @include('front._partials._category_left')
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        @if(isset($cate))
                            <div class="col-md-12">
                                <a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a> <i class="fa fa-angle-double-right"></i>  <b>{{$cate->name}}</b>
                                <br><br>
                            </div>
                        @endif
                        @if(isset($filter) && isset($filter['name']) )
                            <div class="col-md-12">
                                Tìm kiếm : <b>"{{$filter['name']}}"</b>
                                <br><br>
                            </div>
                        @endif
                        @if(isset($posts))
                            @include('front._partials._list_post')
                        @else
                            @include('front._partials._list_product')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop