@extends('layouts.main', ['title' => __("label.blog.blog"), 'header' => __("label.blog.blog")])
@section("content")
    <div class="marketing-area pd-top-120">

    </div>

    <div class="blog-details-page pd-top-10">
        <div class="container">
            <div class="row custom-gutters-60">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-6">
                    <div class="single-blog-content">
                        @if($blog->blog_photos->count() > 0)

                        {{--  blog photos slider--}}
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                @foreach($blog->blog_photos as $pic)
                                <div class="carousel-item {{(documentUrl($pic->pivot->id) == $blog->blog_logo)?'active':''}}">
                                    <img src="{{documentUrl($pic->pivot->id)}}"   height="400" style="width: 100%">
                                </div>
                                 @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        @endif

                        <div class="single-blog-details">
                            <ul class="post-meta">
{{--                                <li class="admin">{{isset($blog->user_id)?$blog->user->username:''}}</li>--}}
                                <li>{{short_date_format($blog->publish_date)}}</li>
                            </ul>
                            <h5>{{$blog->title}}</h5>
                            <p>{!! $blog->content !!}</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('system.blog.includes.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
