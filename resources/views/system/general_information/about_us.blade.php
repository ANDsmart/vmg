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
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">About Us</h1>
                        <span class="sub-title">The perfect choice for your next project</span>
                    </div>

                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pt-5">
                <div class="col">

                    <div class="row text-center pb-5">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" style="animation-delay: 100ms;">
                                    <span>We are Porto, We </span>
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
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 mb-5">
                        <div class="col-md-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                            <h3 class="font-weight-bold text-4 mb-2">Our Mission</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
                        </div>
                        <div class="col-md-4 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                            <h3 class="font-weight-bold text-4 mb-2">Our Vision</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
                        </div>
                        <div class="col-md-4 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                            <h3 class="font-weight-bold text-4 mb-2">Why Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel consequat, ante nulla hendrerit arcu.</p>
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
                        <div class="counter">
                            <i class="icons icon-cup text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="352">352</strong>
                            <label class="text-4 mt-1 text-color-light">Cups of Coffee</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc. </p>
                        <p class="pr-5 mr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget</p>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
                        <img src="img/generic/generic-corporate-3-1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation animated expandIn appear-animation-visible" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%; animation-delay: 300ms;" alt="">
                        <img src="img/generic/generic-corporate-3-2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation animated expandIn appear-animation-visible" data-appear-animation="expandIn" style="top: -33%; left: -29%; animation-delay: 100ms;" alt="">
                        <img src="img/generic/generic-corporate-3-3.jpg" class="img-fluid position-relative appear-animation mb-2 animated expandIn appear-animation-visible" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" style="animation-delay: 600ms;">
                    </div>
                </div>
            </div>
        </section>

        <div class="container appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">
            <div class="row pt-5 pb-4 my-5">
                <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                    <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}" style="height: auto;">





                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1293px; padding-left: 40px; padding-right: 40px;"><div class="owl-item active" style="width: 217.5px; margin-right: 25px;"><div>
                                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-1.jpg" alt="">
                                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
                                        <p class="text-2 mb-0">CEO</p>
                                    </div></div><div class="owl-item active" style="width: 217.5px; margin-right: 25px;"><div>
                                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-2.jpg" alt="">
                                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
                                        <p class="text-2 mb-0">CEO</p>
                                    </div></div><div class="owl-item" style="width: 217.5px; margin-right: 25px;"><div>
                                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-3.jpg" alt="">
                                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                                        <p class="text-2 mb-0">DEVELOPER</p>
                                    </div></div><div class="owl-item" style="width: 217.5px; margin-right: 25px;"><div>
                                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-4.jpg" alt="">
                                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                                        <p class="text-2 mb-0">SEO ANALYST</p>
                                    </div></div><div class="owl-item" style="width: 217.5px; margin-right: 25px;"><div>
                                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-5.jpg" alt="">
                                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                                        <p class="text-2 mb-0">DESIGNER</p>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>
                </div>
                <div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
                </div>
            </div>
        </div>

        <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
            <div class="container pb-2">
                <div class="row">
                    <div class="col-lg-6 text-center text-md-left mb-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Our Clients</strong></h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                        <div class="row justify-content-center my-5">
                            <div class="col-8 text-center col-md-4">
                                <img src="img/logos/logo-1.png" class="img-fluid hover-effect-3" alt="">
                            </div>
                            <div class="col-8 text-center col-md-4 my-3 my-md-0">
                                <img src="img/logos/logo-2.png" class="img-fluid hover-effect-3" alt="">
                            </div>
                            <div class="col-8 text-center col-md-4">
                                <img src="img/logos/logo-3.png" class="img-fluid hover-effect-3" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme nav-style-1 stage-margin owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}" style="height: auto;">


                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-920px, 0px, 0px); transition: all 0.25s ease 0s; width: 2840px; padding-left: 40px; padding-right: 40px;"><div class="owl-item cloned" style="width: 460px;"><div>
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
                                                <div class="testimonial-author">
                                                    <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                                                </div>
                                                <blockquote>
                                                    <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 460px;"><div>
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
                                                <div class="testimonial-author">
                                                    <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                                                </div>
                                                <blockquote>
                                                    <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 460px;"><div>
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
                                                <div class="testimonial-author">
                                                    <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                                                </div>
                                                <blockquote>
                                                    <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 460px;"><div>
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
                                                <div class="testimonial-author">
                                                    <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                                                </div>
                                                <blockquote>
                                                    <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 460px;"><div>
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
                                                <div class="testimonial-author">
                                                    <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                                                </div>
                                                <blockquote>
                                                    <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 460px;"><div>
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
                                                <div class="testimonial-author">
                                                    <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                                                </div>
                                                <blockquote>
                                                    <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                                </div>
                                            </div>
                                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>
                    </div>
                </div>
            </div>
        </section>


@endsection



@push('after-scripts')
    <script>
        function mySubscription(e){
            var email  = $('#email').val();
            if ( email.length == 0) {
                $('#email_erros').empty();
                if (email.length == 0)
                {
                    $('#email_erros').append(`<p id="client_errors" style="color: red">Email required</p>`);
                }

                return false;
            }

            if(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
            {
                return true;
            }else {
                $('#email_erros').empty();

                $('#email_erros').append(`<p id="client_errors" style="color: red">Invalid Email</p>`);
                return false;
            }

            ValidateEmail(email);
            var data = {
                'email' : email,
            };
            var url = '{{route('general_information.newsletter_subscription')}}';
            $.ajax({
                type: 'post',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                cache: false,

                success: function (response) {
                    if (response) {
                        $('#email_erros').empty();
                        document.getElementById("success_alert").append('');
                        document.getElementById("news-subcribeform").reset();
                        document.getElementById("success_alert").append('Successfully!! Thank you for subscribed!');
                        document.getElementById("success_alert").style.display ="block";
                    }
                },
            }).done(

            );
        }

        function ValidateEmail(mail)
        {


        }

        //va
    </script>
@endpush
