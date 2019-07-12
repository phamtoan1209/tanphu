@extends('front._partials.master')
@section('content')
    @include('front._partials._breadcumb')
    <section class="form-group">
        <div class="container">
            @if(isset($categorys) && !empty($categorys))
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach($categorys as $item)
                    @if(isset($cate) && $cate->id == $item['id'])
                        @foreach($item['childs'] as $childCategory)
                        <li class="nav-item">
                            <a class="nav-link {{ isset($cate) && $childCategory['id'] == $cate->id ? 'active' : ''}}" id="home-tab" data-toggle="tab" href="{{url('san-pham/danh-muc/'.$childCategory['slug'])}}" role="tab" aria-controls="home" aria-selected="true">{{$childCategory['name']}}
                            </a>
                        </li>
                        @endforeach
                    @endif
                @endforeach
            </ul>
            @endif
        </div>
    </section>
    <main>
        <div class="product-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12 order-sm-1 order-2 pdrNone">
                        <div class="list-product">
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                            <a class="product-container" href="#">
                                <img class="img-fluid" src="{{asset('front/img/img-pro-mini.jpg')}}" alt="">
                                <div class="des-pro">
                                    <p>Product Name</p>
                                    <span>Product Description</span>
                                    <div class="price">990.000<sup>đ</sup></div>
                                </div>
                            </a>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">15</a></li>
                                <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 order-1">
                        <div class="sort-product">
                            <p class="font-weight-bold">Danh mục sản phẩm</p>
                            <ul>
                                @if(isset($categorys) && !empty($categorys))
                                    @foreach($categorys as $item)
                                        <li class="active">
                                            <a href="{{url('san-pham/danh-muc/'.$item['slug'])}}">
                                                <i class="fa fa-file-image-o" aria-hidden="true"></i> {{$item['name']}}
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