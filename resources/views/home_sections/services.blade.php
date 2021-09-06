{{--<section class=" custom-section-padding-2 " style="background-color: #88bad3;margin-top: 20px">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col">--}}
{{--                <h2 class="font-weight-bold text-color-dark mb-3">- {{trans('label.services.services')}}</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="owl-carousel show-nav-title custom-both-sides-shadow custom-dots-position-2 custom-dots-style-1 custom-xs-arrows-style-2 mb-0 owl-theme owl-loaded owl-drag owl-carousel-init"--}}
{{--         data-plugin-options="{'items': 6, 'loop': false, 'dots': true, 'nav': false}" style="height: auto;">--}}


{{--        <div class="owl-stage-outer">--}}
{{--            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2072px;">--}}

{{--				@foreach($services as $service)--}}
{{--                <div class="owl-item" style="width: 230.167px;margin-left: 20px">--}}
{{--                    <div>--}}

{{--                        <a href="{{route('general_information.service.display',$service->id)}}" class="text-decoration-none">--}}
{{--								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">--}}
{{--									<span class="thumb-info-wrapper m-0">--}}
{{--										<img src="{{url($service->getImageAttribute())}}" class="img-fluid" alt="" style="height: 250px">--}}
{{--									</span>--}}
{{--									<span class="thumb-info-caption  p-4 pt-5 pb-5" style="background-color: #88bad3">--}}
{{--										<span class="custom-thumb-info-title">--}}
{{--											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">{{truncateString($service->title,20)}}</span>--}}
{{--										</span>--}}
{{--										<span class="custom-arrow"></span>--}}
{{--									</span>--}}
{{--								</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--				@endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="owl-nav disabled">--}}
{{--            <button type="button" role="presentation" class="owl-prev"></button>--}}
{{--            <button type="button" role="presentation" class="owl-next"></button>--}}
{{--        </div>--}}
{{--        <div class="owl-dots">--}}
{{--            <button role="button" class="owl-dot active"><span></span></button>--}}
{{--            <button role="button" class="owl-dot"><span></span></button>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row mt-2 pb-4">--}}
{{--        <div class="col-lg-12 text-center">--}}
{{--            <a class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 font-weight-bold" href="{{route('general_information.service.services')}}">{{trans('label.view_more')}}</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}




{{--<section class="section section-no-border bg-color-light">--}}
{{--    <div class="container">--}}
{{--        <div class="row pt-3">--}}
{{--            <div class="col">--}}
{{--                <h2 class="font-weight-semibold mb-0">{{trans('label.services.services')}}</h2>--}}
{{--                <p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row mt-4">--}}
{{--            @foreach($services as $service)--}}

{{--                <div class="col-md-4">--}}
{{--                    <a href="{{route('general_information.service.display',$service->id)}}" class="text-decoration-none">--}}
{{--								<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">--}}
{{--									<span class="thumb-info-side-image-wrapper">--}}
{{--										<img alt="" class="img-fluid" src="{{url($service->getImageAttribute())}}" style="height: 200px">--}}
{{--									</span>--}}
{{--									<span class="thumb-info-caption">--}}
{{--										<span class="thumb-info-caption-text p-xl">--}}
{{--											<h4 class="font-weight-semibold mb-1"> {{$service->title}}</h4>--}}
{{--											<p class="text-3">{!! truncateString($service->contents,100) !!}</p>--}}
{{--										</span>--}}
{{--									</span>--}}
{{--								</span>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                @endforeach--}}
{{--        </div>--}}

{{--        <div class="row mt-2 pb-4">--}}
{{--            <div class="col-lg-12 text-center">--}}
{{--                <a class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 font-weight-bold" href="demo-medical-departments.html">view more</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}



<div class="container container-lg py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-xl-8 text-center mb-4">
            <h2 class="font-weight-bold text-8 mb-3 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">What’s your goal?</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10 px-lg-5">
            <div class="row">
                <div class="col-md-6 mb-2 pb-2 px-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
										<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
											<img src="{{url('img/office/our-office-9.jpg')}}" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Human resource</span>
												</span>
												<span class="thumb-info-slide-info-hover-2">
                                                    		<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Human resource</span>
												</span>
													<span class="thumb-info-inner text-2">
<a href="#" class="d-inline-flex align-items-center btn btn-with-arrow font-weight-bold text-color-light text-3 p-0 appear-animation animated fadeInUpShorter appear-animation-visible"
   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
											PROJECT MANAGEMENT
											<span class="d-inline-flex align-items-center bg-transparent box-shadow-none ml-3"><i
                                                        class="fas fa-arrow-right text-color-light text-5"></i></span>
										</a>
                                                    </span>

                                                    			<span class="thumb-info-inner text-2">
<a href="#"
   class="d-inline-flex align-items-center btn btn-with-arrow font-weight-bold text-color-light text-3 p-0 appear-animation animated fadeInUpShorter appear-animation-visible"
   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
											GET STARTED NOW
											<span class="d-inline-flex align-items-center bg-transparent box-shadow-none ml-3"><i
                                                        class="fas fa-arrow-right text-color-light text-5"></i></span>
										</a>
                                                    </span>
												</span>
											</span>
										</span>
									</span>
                </div>
                <div class="col-md-6 mb-2 pb-2 px-2 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
										<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
											<img src="img/office/our-office-10.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Our Team</span>
												</span>
												<span class="thumb-info-slide-info-hover-2">
													<span class="thumb-info-inner text-2">
														<a href="#" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">VIEW OUR TEAM <i class="fa fa-arrow-right ml-2 pl-1 text-3"></i></a>
													</span>
												</span>
											</span>
										</span>
									</span>
                </div>
                <div class="col-md-4 mb-2 pb-2 px-2 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
										<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
											<img src="img/office/our-office-11.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Our Offices</span>
												</span>
												<span class="thumb-info-slide-info-hover-2">
													<span class="thumb-info-inner text-2">
														<a href="#" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">VIEW OUR OFFICES <i class="fa fa-arrow-right ml-2 pl-1 text-3"></i></a>
													</span>
												</span>
											</span>
										</span>
									</span>
                </div>
                <div class="col-md-4 mb-2 pb-2 px-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
										<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
											<img src="img/office/our-office-12.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Our Mission</span>
												</span>
												<span class="thumb-info-slide-info-hover-2">
													<span class="thumb-info-inner text-2">
														<a href="#" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">VIEW OUR MISSION <i class="fa fa-arrow-right ml-2 pl-1 text-3"></i></a>
													</span>
												</span>
											</span>
										</span>
									</span>
                </div>
                <div class="col-md-4 px-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
										<span class="thumb-info-wrapper thumb-info-wrapper-no-opacity">
											<img src="img/office/our-office-13.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-slide-info-hover-1">
													<span class="thumb-info-inner text-4">Our Contact</span>
												</span>
												<span class="thumb-info-slide-info-hover-2">
													<span class="thumb-info-inner text-2">
														<a href="#" class="d-inline-flex align-items-center btn btn-light text-color-dark font-weight-bold px-4 btn-py-2 text-1 rounded">VIEW OUR CONTACT <i class="fa fa-arrow-right ml-2 pl-1 text-3"></i></a>
													</span>
												</span>
											</span>
										</span>
									</span>
                </div>
            </div>
        </div>
    </div>
</div>
