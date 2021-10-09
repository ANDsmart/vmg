@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')


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
            <div class="col-lg-8">
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-normal text-7 mb-2 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">Find Your <strong class="font-weight-extra-bold">Oportunity</strong></h2>
                </div>

                <p class="text-color-light-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">{!! ($service_type->description) !!}</p>
            </div>
            <div class="col-lg-4">
                <div class="testimonial testimonial-primary appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                    @if($service_type->id == 6)
                    <blockquote>
                        <p class="mb-0">Vipawa Management Group conducts management services, marketing of the client human resources services and consultation, Legal advisory and representation on all your labour and industrial relations issues</p>
                    </blockquote>
                        @elseif($service_type->id == 7)
                        <blockquote>
                            <p class="mb-0">Vipawa Management Group offers reliable law services to individual and corporate clientele in Tanzania</p>
                        </blockquote>
                        @elseif($service_type->id == 8)

                        <blockquote>
                            <p class="mb-0">Vipawa Management Group conducts management services, marketing of the client human resources services and consultation, Legal advisory and representation on all your labour and industrial relations issues</p>
                        </blockquote>

                    @elseif($service_type->id == 9)

                        <blockquote>
                            <p class="mb-0">Vipawa Management Group conducts management services, marketing of the client human resources services and consultation, Legal advisory and representation on all your labour and industrial relations issues</p>
                        </blockquote>
                    @elseif($service_type->id == 10)
                        <blockquote>
                            <p class="mb-0">Vipawa Management Group conducts management services, marketing of the client human resources services and consultation, Legal advisory and representation on all your labour and industrial relations issues</p>
                        </blockquote>
                    @elseif($service_type->id == 11)
                        <blockquote>
                            <p class="mb-0">Vipaji inc corporate limited offers Licenses & Permits Services to blue chip multinational and transnational corporations in Tanzania</p>
                        </blockquote>
                    @elseif($service_type->id == 12)
                        <blockquote>
                            <p class="mb-0">Vipaji inc corporate limited offers Licenses & Permits Services to blue chip multinational and transnational corporations in Tanzania</p>
                        </blockquote>

                    @endif
                </div>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-lg-10">--}}
{{--                <div class="overflow-hidden">--}}
{{--                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">--}}
{{--                       {!! truncateString($service_type->description,100) !!}--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">--}}
{{--                <a href="#" class="btn btn-modern btn-dark mt-1">Get a Quote!</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col py-3">--}}
{{--                <hr class="solid mt-5 mb-2">--}}
{{--            </div>--}}
{{--        </div>--}}
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

                    @endforeach
                </div>
            </div>
        </div>
    </section>



    <div class="container pt-4">
        <div class="row text-center pt-4 mt-5">
            <div class="col">
                <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                    <span>We're not the only ones </span>
                    <span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
                    <span> about VMG service...</span>
                </h2>
                <h4 class="text-primary lead tall text-4">30,000 CUSTOMERS IN 100 COUNTRIES WORK WITH VMG. MEET OUR CUSTOMERS.</h4>
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
{{--                        <h2 class="font-weight-normal text-7 mb-0">Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website!</h2>--}}
{{--                        <p class="mb-0">The best HTML template for your new website.</p>--}}
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
{{--                        <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3 mt-5">Get Started Now</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -90px; left: 70%;"></span>--}}
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
