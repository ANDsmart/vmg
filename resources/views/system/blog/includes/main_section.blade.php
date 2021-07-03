<div class="row">

    @foreach($blogs as $blog)
    <div class="col-lg-6">
        <div class="single-blog-content">
            <div class="thumb">
                <div class="blog-gallery-slider">
                    @if($blog->documents()->count() > 0)
                        @foreach($blog->documents as $imag)

                        <div class="item">
                            <img src="{{documentUrl($imag->pivot->id)}}" alt="blog" height="300">
                        </div>
                        @endforeach
                            <div class="item">
                                <img src="{{($blog->blog_logo)}}" alt="blog" height="300">
                            </div>
                        @else

                    @endif

                </div>
            </div>
            <div class="single-blog-details">
                <ul class="post-meta">
{{--                    <li class="admin">{{isset($blog->user_id)?$blog->user->username:''}}</li>--}}
                    <li>{{short_date_format($blog->publish_date)}}</li>
                </ul>
                <h5><a href="{{route('blog.show',$blog->uuid)}}">{{truncateString($blog->title,100)}}</a></h5>
                <p>{!! truncateString($blog->content,400) !!}</p>
                <a href="{{route('blog.show',$blog->uuid)}}">{{trans('label.read_more')}} <span><i class="la la-long-arrow-right"></i></span></a>
            </div>
        </div>

    </div>

    @endforeach

</div>
