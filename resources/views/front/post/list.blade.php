@extends('front._partials.master')
@section('content')
    @include('front._partials._breadcumb')
    {!! \app\Helpers\Widgets::renderNavTab($categoryPost,$cate) !!}
    <main>
        <div class="product-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12 order-sm-1 order-2 pdrNone">
                        <div class="row">
                           @if(isset($posts) && !empty($posts) > 0)
                               {!! \app\Helpers\Widgets::renderItemPost($posts) !!}
                           @endif
                           <div class="col-xs-12">
                               {{ isset($posts) ? $posts->links() : ''}}
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 order-1">
                        <div class="sort-product">
                            <p class="font-weight-bold">Danh mục tin tức</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-venus" aria-hidden="true"></i> Alice in Wonderland</a></li>
                                <li><a href="#"><i class="fa fa-venus" aria-hidden="true"></i> Alice in Wonderland</a></li>
                                <li><a href="#"><i class="fa fa-venus" aria-hidden="true"></i> Alice in Wonderland</a></li>
                                <li><a href="#"><i class="fa fa-venus" aria-hidden="true"></i> Alice in Wonderland</a></li>
                                <li><a href="#"><i class="fa fa-venus" aria-hidden="true"></i> Alice in Wonderland</a></li>
                                <li><a href="#"><i class="fa fa-venus" aria-hidden="true"></i> Alice in Wonderland</a></li>
                                <li><a href="#"><i class="fa fa-venus" aria-hidden="true"></i> Alice in Wonderland</a></li>
                                <li><a href="#"><i class="fa fa-venus" aria-hidden="true"></i> Alice in Wonderland</a></li>
                                <li><a href="#"><i class="fa fa-venus" aria-hidden="true"></i> Alice in Wonderland</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop