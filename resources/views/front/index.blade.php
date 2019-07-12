@extends('front._partials.master')
@section('title','Trang chủ')
@section('content')
    @include('front._partials.menu')
    <main>
        @if(isset($categoryProductHot) && count($categoryProductHot) > 0)
            <div class="block-cate">
                <div class="container">
                    <h5 class="text-uppercase">Thể loại nổi bật</h5>
                    <div class="row text-center display-block">
                        <ul>
                            @foreach($categoryProductHot as $itemCategory)
                                <li>
                                    <a href="{{url('san-pham/danh-muc/'.$itemCategory['slug'])}}">
                                        <div class="item-image"><img src="{{asset($itemCategory['thumb'])}}" alt="{{$itemCategory['name']}}" class="img-fluid rounded-circle"></div>
                                        <div class="item-title">{{$itemCategory['name']}}</div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <div class="block-featured py-5">
            <div class="container">
                <h3 class="mb-3">Featured Collections</h3>
                <div class="row text-center">
                    <div class="col-lg-4 col-sm-4">
                        <a href="#" class="box-featured">
                            <img class="img-fluid" src="{{asset('front/img/img-featured.jpg')}}" alt="#">
                            <p>Destination: Paris</p>
                            <span>Celebrate spring with French joie de vivre.</span>
                            <div class="shop-now">shop now</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a href="#" class="box-featured">
                            <img class="img-fluid" src="{{asset('front/img/img-featured.jpg')}}" alt="#">
                            <p>Destination: Paris</p>
                            <span>Celebrate spring with French joie de vivre.</span>
                            <div class="shop-now">shop now</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a href="#" class="box-featured">
                            <img class="img-fluid" src="{{asset('front/img/img-featured.jpg')}}" alt="#">
                            <p>Destination: Paris</p>
                            <span>Celebrate spring with French joie de vivre.</span>
                            <div class="shop-now">shop now</div>
                        </a>
                    </div>
                </div>
                <div class="row text-center row-box">
                    <div class="col-lg-12">
                        <ul>
                            <li>
                                <a href="#" class="box-featured-mini">
                                    <img class="img-fluid" src="{{asset('front/img/img-f-mini.jpg')}}" alt="">
                                    <p>Spring Savings</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="box-featured-mini">
                                    <img class="img-fluid" src="{{asset('front/img/img-f-mini.jpg')}}" alt="">
                                    <p>Spring Savings</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="box-featured-mini">
                                    <img class="img-fluid" src="{{asset('front/img/img-f-mini.jpg')}}" alt="">
                                    <p>Spring Savings</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="box-featured-mini">
                                    <img class="img-fluid" src="{{asset('front/img/img-f-mini.jpg')}}" alt="">
                                    <p>Spring Savings</p>
                                </a>
                            </li>
                            <li class="last-box">
                                <a href="#" class="box-featured-mini">
                                    <img class="img-fluid" src="{{asset('front/img/img-f-mini.jpg')}}" alt="">
                                    <p>Spring Savings</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="three-columns py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="box-t-co">
                            <div class="border2"></div>
                            <div class="title">THE RIGHT ART</div>
                            <div class="des">Sure we have millions of prints in a wide variety of styles. And we can help you browse by genre, by subject, by color, you name it. But what we really love is finding art that’s right for you.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="box-t-co">
                            <div class="border2"></div>
                            <div class="title">THE RIGHT ART</div>
                            <div class="des">Sure we have millions of prints in a wide variety of styles. And we can help you browse by genre, by subject, by color, you name it. But what we really love is finding art that’s right for you.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="box-t-co">
                            <div class="border2"></div>
                            <div class="title">THE RIGHT ART</div>
                            <div class="des">Sure we have millions of prints in a wide variety of styles. And we can help you browse by genre, by subject, by color, you name it. But what we really love is finding art that’s right for you.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-collection">
            <h3>Art That Stirs the Soul</h3>
            <div class="container py-5">
                <a href="#">
                    <div class="feature-hero" style="background-image:url({{asset('front/img/img-shop.jpg')}})"></div>
                </a>
                <div class="feature-products" style="height:75vw;overflow:hidden;background-color:#efebe3">
                    <div class="feature-group feature-1">
                        <a href="#" class="products products-1 track-group" id="hp-trending-wings-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/wings-product1.jpg')}}" alt="Wings">
                                <div class="feature-text">
                                    <div class="feature-artwork">Wings</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-2">
                        <a href="#" class="products products-2 track-group" id="hp-trending-unity-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/unity-product2.jpg')}}" alt="Unity">
                                <div class="feature-text feature-text2">
                                    <div class="feature-artwork">Unity</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-3">
                        <a href="#" class="products products-3 track-group" id="hp-trending-wings-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/wings-product1.jpg')}}" alt="Wings">
                                <div class="feature-text">
                                    <div class="feature-artwork">Wings</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-4">
                        <a href="#" class="products products-4 track-group" id="hp-trending-unity-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/unity-product2.jpg')}}" alt="Unity">
                                <div class="feature-text feature-text2">
                                    <div class="feature-artwork">Unity</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-5">
                        <a href="#" class="products products-5 track-group" id="hp-trending-wings-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/wings-product1.jpg')}}" alt="Wings">
                                <div class="feature-text">
                                    <div class="feature-artwork">Wings</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-6">
                        <a href="#" class="products products-6 track-group" id="hp-trending-unity-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/unity-product2.jpg')}}" alt="Unity">
                                <div class="feature-text feature-text2">
                                    <div class="feature-artwork">Unity</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-7">
                        <a href="#" class="products products-7 track-group" id="hp-trending-wings-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/wings-product1.jpg')}}" alt="Wings">
                                <div class="feature-text">
                                    <div class="feature-artwork">Wings</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-8">
                        <a href="#" class="products products-8 track-group" id="hp-trending-unity-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/unity-product2.jpg')}}" alt="Unity">
                                <div class="feature-text feature-text2">
                                    <div class="feature-artwork">Unity</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-9">
                        <a href="#" class="products products-9 track-group" id="hp-trending-wings-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/wings-product1.jpg')}}" alt="Wings">
                                <div class="feature-text">
                                    <div class="feature-artwork">Wings</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="two-columns py-5">
            <div class="container">
                <h3 class="mb-5">More Ways To Your Wall</h3>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <a href="#" class="box-2col">
                            <img src="{{asset('front/img/2-col.jpg')}}" class="img-fluid" alt="">
                            <p>Discover Art with Visual Search</p>
                            <span>Visual search helps you find the perfect piece, starting with what you already love. Explore today to create an instantly-curated collection.</span>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a href="#" class="box-2col">
                            <img src="{{asset('front/img/2-colb.jpg')}}" class="img-fluid" alt="">
                            <p>Discover Art with Visual Search</p>
                            <span>Visual search helps you find the perfect piece, starting with what you already love. Explore today to create an instantly-curated collection.</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-collection" style="background: #efebe3;">
            <h3>Art That Stirs the Soul</h3>
            <div class="container py-5">
                <a href="#">
                    <div class="feature-hero" style="background-image:url({{asset('front/img/img-shop2.jpg')}})">
                        <div class="text-more">
                            <p>Bohemian by Nature</p>
                            <span>This collection is anything but ordinary.</span>
                            <div class="shop-now">shop now</div>
                        </div>
                    </div>
                </a>
                <div class="feature-products" style="height:75vw;overflow:hidden;background-color:#efebe3">
                    <div class="feature-group feature-1">
                        <a href="#" class="products products-1 track-group" id="hp-trending-wings-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/wings-product1.jpg')}}" alt="Wings">
                                <div class="feature-text">
                                    <div class="feature-artwork">Wings</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-2">
                        <a href="#" class="products products-2 track-group" id="hp-trending-unity-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/unity-product2.jpg')}}" alt="Unity">
                                <div class="feature-text feature-text2">
                                    <div class="feature-artwork">Unity</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-3">
                        <a href="#" class="products products-3 track-group" id="hp-trending-wings-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/wings-product1.jpg')}}" alt="Wings">
                                <div class="feature-text">
                                    <div class="feature-artwork">Wings</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-4">
                        <a href="#" class="products products-4 track-group" id="hp-trending-unity-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/unity-product2.jpg')}}" alt="Unity">
                                <div class="feature-text feature-text2">
                                    <div class="feature-artwork">Unity</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-5">
                        <a href="#" class="products products-5 track-group" id="hp-trending-wings-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/wings-product1.jpg')}}" alt="Wings">
                                <div class="feature-text">
                                    <div class="feature-artwork">Wings</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-6">
                        <a href="#" class="products products-6 track-group" id="hp-trending-unity-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/unity-product2.jpg')}}" alt="Unity">
                                <div class="feature-text feature-text2">
                                    <div class="feature-artwork">Unity</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-7">
                        <a href="#" class="products products-7 track-group" id="hp-trending-wings-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/wings-product1.jpg')}}" alt="Wings">
                                <div class="feature-text">
                                    <div class="feature-artwork">Wings</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-8">
                        <a href="#" class="products products-8 track-group" id="hp-trending-unity-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/unity-product2.jpg')}}" alt="Unity">
                                <div class="feature-text feature-text2">
                                    <div class="feature-artwork">Unity</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="feature-group feature-9">
                        <a href="#" class="products products-9 track-group" id="hp-trending-wings-product">
                            <div class="product-overlay"><img class="img-fluid" src="{{asset('front/img/wings-product1.jpg')}}" alt="Wings">
                                <div class="feature-text">
                                    <div class="feature-artwork">Wings</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop