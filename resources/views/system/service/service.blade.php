@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image:url( {{url($service->getImageAttribute())}});">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong> {{$service->title}}</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
{{--        <div class="row pt-4">--}}
{{--            <div class="col">--}}
{{--                <div class="overflow-hidden mb-3">--}}
{{--                    <h2 class="font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">--}}
{{--                        {{$service->title}}--}}
{{--                    </h2>--}}
{{--                    <span class="info like ml-4">--}}
{{--												Post Date:--}}
{{--												<span class="like-number font-weight-semibold custom-color-dark">--}}
{{--													{{short_date_format($service->created_at)}}--}}
{{--												</span>--}}
{{--											</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row pt-1 pb-4 mb-3">
            <div class="col">

                <div class="row mt-2 mb-2">
                    <article class="blog-post">
                        <div class="col">
                            <div class="post-infos mb-4">
{{--											<span class="info posted-by">--}}
{{--												Posted by:--}}
{{--												<span class="post-author font-weight-semibold text-color-dark">--}}
{{--													John Doe--}}
{{--												</span>--}}
{{--											</span>--}}
                                {{--                                <span class="info comments ml-4">--}}
                                {{--												Comments:--}}
                                {{--												<span class="comments-number text-color-primary font-weight-semibold">--}}
                                {{--													15--}}
                                {{--												</span>--}}
                                {{--											</span>--}}

                            </div>

{{--                            <hr class="solid">--}}

{{--                            <p class="lead mb-4">{{$service->title}}</p>--}}

                            <img src="{{url($service->getImageAttribute())}}" style="max-width: 350px;" class="img-fluid float-right ml-4 mb-4" alt="">

                            <p>{!! $service->content !!}</p>

                            @if($service->service_type_cv_id == 8)
                            <div class="row">
                                <div class="col">
                                    <div class="overflow-hidden mb-3">
                                        <h2 class="font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                            Online Recruitment and Employment Solution
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="overflow-hidden">
                                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                                            My job My Passion
                                        </p>
                                    </div>
                                    <a href="https://vipajijobs.com/" class="btn btn-modern btn-dark mt-1" target="_blank">Visit vipawa jobs!</a>

                                </div>
                                <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col py-3">
                                    <hr class="solid mt-5 mb-2">
                                </div>
                            </div>
                            @endif

                            <div class="pt-2 pb-1">
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-40faf75173aadc53"></script>
                                <!-- AddThis Button END -->
                            </div>

                            <div class="post-block post-author mt-4 clearfix">
                                <h4 class="font-weight-bold text-color-dark pt-2 mb-4">- Author</h4>
                                <div class="img-thumbnail d-block p-0 no-borders">
                                    <a href="blog-post.html">
                                        <img src="img/team/team-22.jpg" alt="">
                                    </a>
                                </div>
{{--                                <p><strong class="name mb-3">John Doe</strong></p>--}}
                            </div>

                        </div>
                    </article>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>

    </script>
@endpush
