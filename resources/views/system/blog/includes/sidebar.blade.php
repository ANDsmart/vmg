<aside class="sidebar-area">
{{--    <div class="widget widget_search">--}}
{{--        <form class="search-form">--}}
{{--            <div class="form-group">--}}
{{--                <input type="text" placeholder="Search">--}}
{{--            </div>--}}
{{--            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>--}}
{{--        </form>--}}
{{--    </div>--}}
    <div class="widget widget-recent-post">
        <h2 class="widget-title">{{trans('label.blog.latest')}}</h2>
        <ul>
            @foreach($latest_blogs as $latest)
            <li>
                <div class="media">
                    @if($latest->blog_logo)
                    <img src="{{$latest->blog_logo}}" alt="widget" width="100">
                    @endif
                    <div class="media-body">
                        <h6 class="title"><a href="{{route('blog.show',$latest->uuid)}}">{{truncateString($latest->title,30)}}</a></h6>
                        <span class="post-date">{{short_date_format($latest->publish_date)}}</span>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="widget widget_categories">
        <h2 class="widget-title">Category</h2>
        <ul>
            @foreach($blog_categories as $category)
            <li><a href="{{route('blog.get_blog_by_category',$category->id)}}">{{$category->name }}</a></li>
            @endforeach
        </ul>
    </div>

</aside>
