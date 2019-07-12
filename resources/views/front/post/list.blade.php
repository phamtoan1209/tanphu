@extends('front._partials.master')
@section('content')
    {!! \app\Helpers\Widgets::renderBreadcumb($cate,'post') !!}
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
                                @if(isset($categoryPost) && !empty($categoryPost))
                                    @foreach($categoryPost as $item)
                                        <li class="active">
                                            <a href="{{url('tin-tuc/danh-muc/'.$item['slug'])}}">
                                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> {{$item['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop