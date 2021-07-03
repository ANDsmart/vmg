@extends('layouts.main', ['title' => trans('label.faqs'), 'header' => trans('label.faqs')])

@push('after-styles')
<style>

</style>
@endpush

@section('content')
<div class="container">
    <!-- faq area start -->
    <div class="faq-area pd-top-112">
        <div class="container">
            <div class="row custom-gutters-60 justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <div class="section-title text-center">
                        <h2 class="title">Frequently <span>Asked Questions</span></h2>
                    </div>
                    <div class="accordion" id="accordion">

                    @foreach($faqs as $faq)

                        <!-- single accordion -->
                        <div class="single-accordion card">
                            <div class="card-header" id="heading{{$faq->id}}">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">{{$faq->title}}?</button>
                                </h2>
                            </div>
                            <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="heading{{$faq->id}}" data-parent="#accordion">
                                <div class="card-body">
                                    {!! $faq->content !!}
                                </div>
                            </div>
                        </div>
                        <!-- single accordion -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area End -->

    <!-- service area start -->
    <div class="more-question-area pd-top-112">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center margin-bottom-90">
                        <h2 class="title">Get In Touch</h2>
{{--                        <p>Our support team will get assistance from AI-powered suggestions, making it quicker than ever to handle support requests.</p>--}}
                    </div>
                </div>
            </div>
            <div class="row custom-gutters-16 justify-content-center">
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="single-service text-center">
                        <img src="{{asset('assets/img/icons/c1.svg')}}" alt="contact">
                        <h6><a href="#">Phone Number</a></h6>
                        <p class="mb-0">{!! sysdef()->data('SYSTEL') !!}</p>

                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="single-service text-center">
                        <img src="{{asset('assets/img/icons/c2.svg')}}" alt="contact">
                        <h6><a href="#">Email Address</a></h6>
                        <p class="mb-0">{!! sysdef()->data('SYSSEM') !!}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="single-service text-center">
                        <img src="{{asset('assets/img/icons/c3.svg')}}" alt="contact">
                        <h6><a href="#">Office Address</a></h6>
                        <p>P.O.BOX  {!! sysdef()->data('SYSPOB')!!} {!! sysdef()->data('SYSLOC') !!}</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area End -->

</div>



@endsection
@push('after-scripts')

@endpush
