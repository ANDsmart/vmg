@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')

    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image:url( {{url($training->getImageAttribute())}});">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong> {{$training->title}}</strong></h1>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row pt-1 pb-4 mb-3">
            <div class="col">

                <div class="row mt-2 mb-2">
                    <article class="blog-post">
                        <div class="col">
                            <div class="post-infos mb-4">
{{--                                <span class="info comments ml-4">--}}
{{--												Comments:--}}
{{--												<span class="comments-number text-color-primary font-weight-semibold">--}}
{{--													15--}}
{{--												</span>--}}
{{--											</span>--}}
                                <span class="info like ml-4">
												Post Date:
												<span class="like-number font-weight-semibold custom-color-dark">
													{{short_date_format($training->created_at)}}
												</span>
											</span>
                            </div>

                            <hr class="solid">

                            <img src="{{url($training->getImageAttribute())}}" style="max-width: 350px;" class="img-fluid float-right ml-4 mb-4" alt="">
                            <p>{!! $training->contents !!}</p>

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
