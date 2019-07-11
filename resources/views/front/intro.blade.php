@extends('front._partials.master')
@section('title','Về chúng tôi')
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
    <div class="features-area">
        <div class="container">
            <div class="row">
                <h3>
                    <center>Về chúng tôi</center>
                </h3>
                <div class="content-post">
                    {!! $intro->content !!}
                </div>
            </div>
        </div>
    </div>

@stop