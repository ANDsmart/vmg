@extends('layouts.main', ['title' => __("label.pricing"), 'header' => __("label.pricing")])




@section("content")

    <!-- pricing area start -->
    <div class="sba-pricing-area pd-top-112">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9">
                    <div class="section-title text-center">
                        <h2 class="title">Choose your <span>pricing</span></h2>
                        <p>Our support team will get assistance from AI-powered suggestions, making it quicker than ever to handle support requests. Our support team will get assistance from AI-powered suggestions.</p>
                    </div>
                </div>
            </div>
            <div class="row custom-gutters-20">
                <div class="col-xl-3 col-sm-6">
                    <div class="single-pricing text-center">
                        <h6 class="title">INDIVIDUAL</h6>
                        <div class="thumb">
                            <img src="assets/img/price/1.png" alt="pricing">
                        </div>
                        <h3 class="price">Free <span>/anully</span></h3>
                        <ul>
                            <li>1000 Messages per month</li>
                            <li>2 GB file storage</li>
                            <li>20 Projects per month</li>
                            <li>Premium support</li>
                        </ul>
                        <a class="btn btn-white btn-rounded" href="#">Get Start</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-pricing text-center single-pricing-active">
                        <h6 class="title">SMALL BUSINESS</h6>
                        <div class="thumb">
                            <img src="assets/img/price/2.png" alt="pricing">
                        </div>
                        <h3 class="price">$11 <span>/anully</span></h3>
                        <ul>
                            <li>1000 Messages per month</li>
                            <li>2 GB file storage</li>
                            <li>20 Projects per month</li>
                            <li>Premium support</li>
                        </ul>
                        <a class="btn btn-white btn-rounded" href="#">Get Start</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-pricing text-center">
                        <h6 class="title">MEDIUM COMPANY</h6>
                        <div class="thumb">
                            <img src="assets/img/price/3.png" alt="pricing">
                        </div>
                        <h3 class="price">$22 <span>/anully</span></h3>
                        <ul>
                            <li>1000 Messages per month</li>
                            <li>2 GB file storage</li>
                            <li>20 Projects per month</li>
                            <li>Premium support</li>
                        </ul>
                        <a class="btn btn-white btn-rounded" href="#">Get Start</a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-pricing text-center">
                        <h6 class="title">ENTERPRISE</h6>
                        <div class="thumb">
                            <img src="assets/img/price/4.png" alt="pricing">
                        </div>
                        <h3 class="price">$33 <span>/anully</span></h3>
                        <ul>
                            <li>1000 Messages per month</li>
                            <li>2 GB file storage</li>
                            <li>20 Projects per month</li>
                            <li>Premium support</li>
                        </ul>
                        <a class="btn btn-white btn-rounded" href="#">Get Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing area End -->






@endsection
