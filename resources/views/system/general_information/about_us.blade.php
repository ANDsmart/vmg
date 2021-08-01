@extends('layouts.main', ['title' => __("label.about_us"), 'header' => __("label.about_us")])

@push('after-styles')
    <style>
        .about_features_card{
            background: white;
            border-radius: 6px;
            height: 450px;
            max-height: 450px;
            overflow: hidden;
            padding: 2rem;
            transition: max-height 500ms ease-in-out;
        }
        .about_features_card:hover{
            max-height: 600px;
        }
    </style>
@endpush

@section('content')
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image:url( {{url('img/page-header/page-header-services.jpg')}});">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 ">VIPAWA MANAGEMENT GROUP </h1>
{{--                        <span class="sub-title">The perfect choice for your next project</span>--}}
                    </div>

                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pt-5">
                <div class="col">

                    <div class="row text-center pb-5">
                        <div class="col-md-12 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" style="animation-delay: 100ms;">
                                    <span>We are VMG, We </span>
                                    <span class="word-rotator-words bg-primary" style="width: 138.031px;">
												<b class="is-hidden">Create</b>
												<b class="is-hidden">Build</b>
												<b class="is-visible">Develop</b>
											</span>
                                    <span> Solutions</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                  VIPAWA MANAGEMENT GROUP  has been established as a management and human resource consultancy in Tanzania. It is a consultative advisory organization on employment, management, and labour related matters. The company traditional business model is based on the accomplishment of management and human resources services. Based on the decision of the company to diversify our services; we have now established this company in Dar es Salaam.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 mb-5">
                        <div class="col-md-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                            <h3 class="font-weight-bold text-4 mb-2">Our Mission</h3>
                            <p>To build long term relationships with our customers and clients and provide exceptional customer services by providing robust services, business through innovation, Commitment, and researches advice and guidance</p>
                        </div>
                        <div class="col-md-4 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                            <h3 class="font-weight-bold text-4 mb-2">Our Vision</h3>
                            <p>To provide quality services that exceeds the expectations of our esteemed customers..</p>
                        </div>
                        <div class="col-md-4 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                            <h3 class="font-weight-bold text-4 mb-2">Why Us</h3>
                            <p>We believe in treating our customers with respect, confidentiality and faith. We grow through creativity, invention and innovation. We integrate honesty, Teamwork, flexibility, Professionalism / adaptability, social responsibility, integrity and business ethics into all aspects of our business functioning.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <section class="section section-primary border-0 mb-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}" style="animation-delay: 100ms;">
            <div class="container">
                <div class="row counters counters-sm pb-4 pt-3">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="icons icon-user text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="30000" data-append="+">30000+</strong>
                            <label class="text-4 mt-1 text-color-light">Happy Clients</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="icons icon-badge text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="15">15</strong>
                            <label class="text-4 mt-1 text-color-light">Years In Business</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <i class="icons icon-graph text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="178">178</strong>
                            <label class="text-4 mt-1 text-color-light">High Score</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">

                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                        <p><strong>VIPAWA MANAGEMENT GROUP </strong>conducts management services, marketing of the client human resources services and consultation, Legal advisory and representation on all your labour and industrial relations issues.&nbsp; The company also prepares and conducts seminar and training on labour laws and administration.</p>
                        <p>We have a growing reputation earned as a result of helping clients reach their goals by consistently delivering innovative solutions to complex management, business and labour issues which match our client’s needs. From daily advice to advising on the most complex human resources, management issues and industrial disputes, our clients rely on our advice to guide them through all of their labour needs and when face challenges.</p>
                        <p>We pride ourselves on providing cost-effective and time-efficient services and on having strong relationships with other human resources and management personnel nationally and internationally which enables us to provide a seamless service to clients in global environments. We support our clients in managing and expanding their operations wherever they may be.</p>
                        <p>Moreover, the company has a vast experience in conflict management, Background checks, preparation of HR Policy and procedures, HR system assessment.&nbsp;&nbsp; Effective handling of issues. Conflict management Background checks.</p>
                        <div>
                            <p>&nbsp;</p>
                        </div>
                        <p align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em><strong>VIPAWA MANAGEMENT GROUP&nbsp;</strong> </em></p>
                        <p>&nbsp;HR Policy and procedures HR system assessment. Effective handling of grievances and disciplinary procedures. Performance management.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <p>Vipaji Inc T Limited has an expertise in conducting seminars and training on labour laws, human resource management, supervisory and strategic management as a tailor made courses upon request by the client or from the researches which has been conducted more offenly.&nbsp;&nbsp; The company will also provide Recruitment services to its clients and organizational restructuring.</p>                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
                        <img src="img/generic/generic-corporate-3-1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation animated expandIn appear-animation-visible" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%; animation-delay: 300ms;" alt="">
                        <img src="img/generic/generic-corporate-3-2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation animated expandIn appear-animation-visible" data-appear-animation="expandIn" style="top: -33%; left: -29%; animation-delay: 100ms;" alt="">
                        <img src="img/generic/generic-corporate-3-3.jpg" class="img-fluid position-relative appear-animation mb-2 animated expandIn appear-animation-visible" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" style="animation-delay: 600ms;">
                    </div>
                </div>
            </div>
        </section>


@endsection



@push('after-scripts')
    <script>

    </script>
@endpush
