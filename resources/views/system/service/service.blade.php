@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')
{{--    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image:url( {{url($service_type->getImageAttribute())}});">--}}
{{--        <div class="container">--}}
{{--            <div class="row mt-5">--}}
{{--                <div class="col-md-12 align-self-center p-static order-2 text-center">--}}
{{--                    <h1 class="text-10"><strong> {{$service_type->title}}</strong></h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <div class="container">--}}
{{--        <div class="row pt-4">--}}
{{--            <div class="col">--}}
{{--                <div class="overflow-hidden mb-3">--}}
{{--                    <h2 class="font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">--}}
{{--                        {{$service_type->title}}--}}
{{--                    </h2>--}}
{{--                    <span class="info like ml-4">--}}
{{--												Post Date:--}}
{{--												<span class="like-number font-weight-semibold custom-color-dark">--}}
{{--													{{short_date_format($service_type->created_at)}}--}}
{{--												</span>--}}
{{--											</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row pt-1 pb-4 mb-3">--}}
{{--            <div class="col">--}}

{{--                <div class="row mt-2 mb-2">--}}
{{--                    <article class="blog-post">--}}
{{--                        <div class="col">--}}
{{--                            <div class="post-infos mb-4">--}}
{{--											<span class="info posted-by">--}}
{{--												Posted by:--}}
{{--												<span class="post-author font-weight-semibold text-color-dark">--}}
{{--													John Doe--}}
{{--												</span>--}}
{{--											</span>--}}
{{--                                --}}{{--                                <span class="info comments ml-4">--}}
{{--                                --}}{{--												Comments:--}}
{{--                                --}}{{--												<span class="comments-number text-color-primary font-weight-semibold">--}}
{{--                                --}}{{--													15--}}
{{--                                --}}{{--												</span>--}}
{{--                                --}}{{--											</span>--}}

{{--                            </div>--}}

{{--                            <hr class="solid">--}}

{{--                            <p class="lead mb-4">{{$service_type->title}}</p>--}}

{{--                            <img src="{{url($service_type->getImageAttribute())}}" style="max-width: 350px;" class="img-fluid float-right ml-4 mb-4" alt="">--}}

{{--                            <p>{!! $service_type->content !!}</p>--}}

{{--                            @if($service_type->service_type_cv_id == 8)--}}

{{--                            <div class="row">--}}
{{--                                <div class="col">--}}
{{--                                    <div class="overflow-hidden mb-3">--}}
{{--                                        <h2 class="font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">--}}
{{--                                            Online Recruitment and Employment Solution--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-lg-10">--}}
{{--                                    <div class="overflow-hidden">--}}
{{--                                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">--}}
{{--                                            My job My Passion--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                    <a href="https://vipajijobs.com/" class="btn btn-modern btn-dark mt-1" target="_blank">Visit vipawa jobs!</a>--}}

{{--                                </div>--}}
{{--                                <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row">--}}
{{--                                <div class="col py-3">--}}
{{--                                    <hr class="solid mt-5 mb-2">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @endif--}}

{{--                            <div class="pt-2 pb-1">--}}
{{--                                <!-- AddThis Button BEGIN -->--}}
{{--                                <div class="addthis_toolbox addthis_default_style">--}}
{{--                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>--}}
{{--                                    <a class="addthis_button_tweet"></a>--}}
{{--                                    <a class="addthis_button_pinterest_pinit"></a>--}}
{{--                                    <a class="addthis_counter addthis_pill_style"></a>--}}
{{--                                </div>--}}
{{--                                <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-40faf75173aadc53"></script>--}}
{{--                                <!-- AddThis Button END -->--}}
{{--                            </div>--}}

{{--                            <div class="post-block post-author mt-4 clearfix">--}}
{{--                                <h4 class="font-weight-bold text-color-dark pt-2 mb-4">- Author</h4>--}}
{{--                                <div class="img-thumbnail d-block p-0 no-borders">--}}
{{--                                    <a href="blog-post.html">--}}
{{--                                        <img src="img/team/team-22.jpg" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <p><strong class="name mb-3">John Doe</strong></p>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </article>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


<div role="main" class="main">
    <section class="page-header page-header-classic page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 data-title-border>{{$service_type->name}}</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
{{--                    <ul class="breadcrumb d-block text-md-right">--}}
{{--                        <li><a href="#">Home</a></li>--}}
{{--                        <li class="active">Pages</li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-1">

        <div class="row pt-4">
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
{{--                        {{$service_type->title}}--}}
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10">
                <div class="overflow-hidden">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                       {!! truncateString($service_type->description,100) !!}
                    </p>
                </div>
            </div>
            <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                <a href="#" class="btn btn-modern btn-dark mt-1">Get a Quote!</a>
            </div>
        </div>

        <div class="row">
            <div class="col py-3">
                <hr class="solid mt-5 mb-2">
            </div>
        </div>

        <div class="sort-destination-loader sort-destination-loader-loaded">
            <div class="row portfolio-list sort-destination" data-sort-id="portfolio" data-filter="*" style="position: relative; height: 1105.69px;">
                @foreach($services as $service)

                <div class="col-lg-4 isotope-item economic" style="position: absolute; left: 0px; top: 0px;">
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
											<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
												<span class="thumb-info-wrapper m-0">
													<img src="{{url($service->getImageAttribute())}}" class="img-fluid" alt="">
												</span>
												<span class="thumb-info-caption p-3 pt-4 pb-4">
													<span class="custom-thumb-info-title">
														<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">{{$service->title}}</span>
{{--														<span class="custom-thumb-info-desc font-weight-light">Okler Themes</span>--}}
													</span>
													<span class="custom-arrow"></span>
												</span>
											</span>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <section class="section bg-color-grey section-height-3 border-0 mt-5 mb-0">
        <div class="container">

            <div class="row">
                <div class="col">
                    @foreach($services as $service)
                    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{url($service->getImageAttribute())}}" alt="layout styles" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">{{$service->title}}</strong> </h2>
                            <p class="text-4">{!! $service->content !!}</p>

                        </div>
                    </div>

                    <hr class="solid my-5">

                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row featured-boxes-full featured-boxes-full-scale">
            <div class="col-lg-3 featured-box-full featured-box-full-primary">
                <i class="far fa-life-ring"></i>
                <h4>Customer Support</h4>
                <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
            </div>
            <div class="col-lg-3 featured-box-full featured-box-full-primary">
                <i class="fas fa-film"></i>
                <h4>Sliders</h4>
                <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
            </div>
            <div class="col-lg-3 featured-box-full featured-box-full-primary">
                <i class="far fa-star"></i>
                <h4>Winner</h4>
                <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. </p>
            </div>
            <div class="col-lg-3 featured-box-full featured-box-full-primary">
                <i class="far fa-edit"></i>
                <h4>Customizable</h4>
                <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row text-center pt-4 mt-5">
            <div class="col">
                <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                    <span>We're not the only ones </span>
                    <span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
                    <span> about Porto Template...</span>
                </h2>
                <h4 class="text-primary lead tall text-4">30,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4>
            </div>
        </div>

        <div class="row text-center mt-5 pb-5 mb-5">
            <div class="owl-carousel owl-theme carousel-center-active-item mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                <div>
                    <img class="img-fluid" src="img/logos/logo-1.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-3.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-5.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-6.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <section class="call-to-action call-to-action-strong-grey content-align-center call-to-action-in-footer">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-7 mb-0">Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website!</h2>
                        <p class="mb-0">The best HTML template for your new website.</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3 mt-5">Get Started Now</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -90px; left: 70%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection

@push('after-scripts')
    <script>

    </script>
@endpush
