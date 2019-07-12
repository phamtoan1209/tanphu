<?php 
use App\Model\Category;
$name = $cate->type == Category::TYPE_POST ? 'Tin tức' : 'Sản phẩm';
$prefix = $cate->type == Category::TYPE_POST ? 'tin-tuc' : 'san-pham';
?>
<section class="form-group">
    <div class="banner-shop" style="background: url('https://quyennguyen.vn/wp-content/uploads/2018/08/quyennguyen-1.jpg');height: 220px;">
        <h1 class="shopcat-title">{{isset($cate) && !empty($cate) ? $cate->name : $name}}</h1>
    </div>
    <div class="breadcrumbs-yoat py-5">
        <div class="container">
            <p id="breadcrumbs"><span>
            	<span><a href="{{route('home')}}">Trang chủ</a> </span>
            	@if(isset($cate) && !empty($cate->parent))
            		/ <span class="breadcrumb_last" aria-current="page"><a href="{{url($prefix.'/danh-muc/'.$cate->parent->slug)}}">{{$cate->parent->name}}</a></span>
				@endif
            	/ <span class="breadcrumb_last" aria-current="page">{{isset($cate) && !empty($cate) ? $cate->name : $name}}</span>
            </p>
        </div>
    </div>
</section>