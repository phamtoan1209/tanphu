@if(isset($posts) && count($posts) > 0)
    @foreach($posts as $post)
        <div class="col-md-4 col-sm-6">
            <div class="recent-post" style="margin-bottom: 15px;">
                <div class="post-thumb">
                    <a href="{{route('detailPost',['slug' => $post->slug])}}"><img src="{{asset($post->thumb)}}" alt="" style="height: 200px;width: 100%;"/></a>
                </div>
                <div class="post-info">
                    <a style="font-weight: bold;" href="{{route('detailPost',['slug' => $post->slug])}}">
                        {{ucfirst(\Illuminate\Support\Str::words($post->name,20,'...'))}}
                    </a>
                    <p>{{\Illuminate\Support\Str::words($post->description,20,'...')}}</p>
                    <a class="read-more" href="{{route('detailPost',['slug' => $post->slug])}}">Xem chi tiết</a>
                    <div>
                        <span class="recent-comment"><a ><i class="fa fa-heart"></i> {{$post->views}} Lượt Xem</a></span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @if(isset($flagLinks))
        <div class="col-md-12">
            {{ $posts->links() }}
        </div>
    @endif
@else
    <div class="col-md-12">
        Không có bài thi công.
    </div>
@endif