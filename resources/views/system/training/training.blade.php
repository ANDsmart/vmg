@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')



    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2"> <strong class="font-weight-extra-bold">{{$training->title}}</strong></h2>
                    {!! $training->content !!}
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
											<span class="info posted-by">
												Posted by:
												<span class="post-author font-weight-semibold text-color-dark">
													John Doe
												</span>
											</span>
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

                            <p class="lead mb-4">{{$training->title}}</p>

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
                                <p><strong class="name mb-3">John Doe</strong></p>
                                <p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat.</p>
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
