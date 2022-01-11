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
												<b class="is-hidden">Manage</b>
												<b class="is-visible">Develop</b>
											</span>
                                    <span> Solutions</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                    <b>Vipawa Management Group</b> is a management consulting organization offering advisory and implementation services to the seres management of organizations with the aim of improving their effectiveness of their business strategies, organization performance and operational processes for the purpose of creating a business value
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
                        <p><strong>VIPAWA MANAGEMENT GROUP </strong>has been established as a business consultancy in Tanzania since
                            2010. Vipaji have served clients across Asia, Europe, East Africa, and North America. It is a
                            consultative advisory organization on Human Resource Management, Legal, Finance and Audit, Tax,
                            Information Technology and Technologies and Asset Valuation.</p>

                        <p>The aim of Vipaji Inc Corporate Limited is to focus on upholding innovation to identify business
                            efficiencies and adding value to our clients and the capital markets. Our approach is centered on in-
                            depth understanding of our clients’ businesses, ensuring compliance to the applicable international
                            and local laws and regulations while appreciating commercial reality. We look at ourselves as
                            business advisors with powerful business propositions. Our reputation is derived from qualification
                            and experiences of our partners and employees, respect our people have gathered in the market
                            and set of ethical values that we all believe in. Quality and compliance are at the center of our
                            success story</p>

                        <p>Our Business Consulting service lines are built on set of pragmatic solutions based on deep and
                            relevant industry experiences. Directors and employees of Vipaji are proud to have gathered vast
                            experiences from a wide range of clients, from multinational subsidiaries in Tanzania, government
                            and non-government projects, to entrepreneurial establishments</p>

                        <p>The Company also takes the advantage of small and medium enterprises which are rapidly growing
                            in the country. With our primary operational target area being Tanzania, we provide a full range of
                            assurance and advisory services</p>
                        <p>Our philosophy is based on integrity, objective independence and strict adherence to professional
                            standards, regulations and Laws</p>
                        <div>
                            <p>&nbsp;</p>
                        </div>
                        <p align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em><strong>VIPAWA MANAGEMENT GROUP&nbsp;</strong> </em></p>
                    </div>
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
