{{--<section class="our-blog">--}}
{{--    <div class="container">--}}
{{--        <div class="row mt-3 pt-5">--}}
{{--            <div class="col">--}}
{{--                <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100" style="animation-delay: 100ms;"><span class="line-pre-title bg-color-primary"></span>{{trans('label.trainings')}}</p>--}}
{{--                <h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">Trainings</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row mb-3 pb-5">--}}
{{--            <div class="col">--}}
{{--                <div class="row">--}}

{{--                    @foreach($trainings as $training)--}}
{{--                    <div class="col-lg-4 mb-4 mb-lg-0">--}}
{{--                        <article>--}}
{{--                            <div class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">--}}
{{--                                <div class="card-body p-4 z-index-1">--}}
{{--                                    <a href="demo-business-consulting-2-blog-post.html">--}}
{{--                                        <img class="card-img-top border-radius-0" src="{{url($training->getImageAttribute())}}" alt="Card Image" style="height: 200px">--}}
{{--                                    </a>--}}
{{--                                    <div class="card-body p-0">--}}
{{--                                        <h4 class="card-title mb-3 text-5 font-weight-bold"><a class="text-color-secondary" href="{{route('general_information.training.display',$training->uuid)}}">{{$training->title}}</a></h4>--}}
{{--                                        <p class="card-text mb-3">{!! truncateString($training->contents,100) !!}</p>--}}
{{--                                        <a href="{{route('general_information.training.display',$training->uuid)}}" class="font-weight-bolder text-uppercase text-decoration-none d-block mt-3">Read More +</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row mt-2 pb-4">--}}
{{--            <div class="col-lg-12 text-center">--}}
{{--                <a class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 font-weight-bold" href="{{route('general_information.training.trainings')}}">{{trans('label.view_more')}}</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}



<section class="section">
    <div class="container">
        <div class="row pt-3">
            <div class="col">
                <h2 class="font-weight-semibold mb-0">Resources</h2>
                <p class="lead font-weight-normal">List of our features resources</p>
            </div>
        </div>
        <div class="row">
            @foreach($trainings as $training)

            <div class="col-md-4">
                <a href="{{route('general_information.training.display',$training->uuid)}}" class="text-decoration-none">
								<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
									<span class="thumb-info-side-image-wrapper">
										<img alt="" class="img-fluid" src="{{url($training->getImageAttribute())}}" style="height: 200px">
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text p-xl">
											<h4 class="font-weight-semibold mb-1"> {{$training->title}}</h4>
											<p class="text-3">{!! truncateString($training->contents,100) !!}</p>
										</span>
									</span>
								</span>
                </a>
            </div>
                @endforeach

        </div>
        <div class="row pb-4">
            <div class="col-lg-12 text-center">
                <a class="btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold" href="{{route('general_information.training.trainings')}}">view more</a>
            </div>
        </div>
    </div>
</section>

