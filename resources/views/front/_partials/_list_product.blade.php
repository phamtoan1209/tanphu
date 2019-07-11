@if(isset($products) && count($products) > 0)
    @foreach($products as $product)
        <div class="col-md-{{isset($home) ? 3 : 4}} col-sm-6">
            <div class="single-features" style="margin-bottom: 15px;">
                <div class="product-img" style="padding: 5px 5px;border: 1px solid #58B79D;">
                    <a href="{{route('detailProduct',['slug' => $product->slug])}}">
                        <img class="first-img" src="{{asset($product->thumb)}}" alt="" style="height: 253px;width: 100%;border-bottom: none;" />
                    </a>
                    <a class="modal-view" href="{{route('detailProduct',['slug' => $product->slug])}}">Xem chi tiết</a>
                </div>
                <div class="product-content" style="border: 1px solid #58B79D;border-top: 1px solid #B4B4B4;">
                    <h5>
                        <a href="{{route('detailProduct',['slug' => $product->slug])}}">
                            <strong>{{$product->name}}</strong>
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    @endforeach
    @if(isset($flagLinks))
        <div class="col-md-12">
            {{ $products->links() }}
        </div>
    @endif
@else
    <div class="col-md-12">
        Không có sản phẩm.
    </div>
@endif
