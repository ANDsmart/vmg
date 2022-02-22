
<div class="slider-container rev_slider_wrapper" style="height: 650px;">
    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'bullets': {'enable': true, 'direction': 'vertical', 'h_align': 'right', 'v_align': 'center', 'space': 5}, 'arrows': {'enable': false}}}">
        <ul>
            @foreach($sliders as $slider)
            <li data-transition="fade">
                <img src="{{url($slider->getImageAttribute())}}"
                     alt=""
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     class="rev-slidebg">


                <div class="tp-caption main-label"
                     data-x="{{$slider->position}}" data-hoffset="100"
                     data-y="center" data-voffset="-45"
                     data-start="1500"
                     data-whitespace="nowrap"
                     data-transform_in="y:[100%];s:500;"
                     data-transform_out="opacity:0;s:500;"
                     style="z-index: 5;color: {{$slider->color}};font-size: {{$slider->size}}px"
                     data-mask_in="x:0px;y:0px;">{{$slider->title}}</div>

{{--                <div class="tp-caption bottom-label"--}}
{{--                     data-x="{{$slider->position}}" data-hoffset="100"--}}
{{--                     data-y="center" data-voffset="5"--}}
{{--                     data-start="2000"--}}
{{--                     style="color: white ; font-size: {{$slider->description_size}}px"--}}
{{--                     data-transform_in="y:[100%];opacity:0;s:500;"   >{!! $slider->description !!}--}}
{{--                </div>--}}
                <div class="tp-caption bottom-label" data-x="{{$slider->position}}" data-hoffset="100" data-y="center" data-voffset="5" data-start="2000" style="z-index: 5; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 20px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 300; font-size: 20px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;" data-transform_in="y:[100%];opacity:0;s:500;" id="layer-141964849">{!! strip_tags($slider->description) !!}</div>

            </li>

            @endforeach
        </ul>
    </div>
</div>
<section class="section-custom-medical">
    <div class="container">
        <div class="row medical-schedules">
            <div class="col-xl-3 box-one bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                <div class="feature-box feature-box-style-2 align-items-center p-4">
                    <div class="feature-box-icon p-0">
{{--                        <img src="img/demos/medical/icons/medical-icon-heart.png" alt class="img-fluid pt-1" />--}}
                    </div>
                    <div class="feature-box-info">
{{--                        <i class="icon-arrow-right-circle icons"></i>--}}

                        <h4 class="m-0 p-0"> </h4>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 box-three bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1200">
                <div class="expanded-info p-4 bg-color-primary">
                    <div class="info custom-info">
                        <span>Mon-Fri</span>
                        <span>8:30 am to 5:00 pm</span>
                    </div>
                    <div class="info custom-info">
                        <span>Saturday</span>
                        <span>9:30 am to 1:00 pm</span>
                    </div>
                    <div class="info custom-info">
                        <span>Sunday</span>
                        <span>Closed</span>
                    </div>
                </div>
                <h5 class="m-0">
                    Opening Hours
                    <i class="icon-arrow-right-circle icons"></i>
                </h5>
            </div>

            <div class="col-xl-3 box-two bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
                <h5 class="m-0">
                    <a href="demo-medical-doctors.html" title="">
{{--                        Doctors Timetable--}}
{{--                        <i class="icon-arrow-right-circle icons"></i>--}}
                    </a>
                </h5>
            </div>

            <div class="col-xl-3 box-four bg-color-primary p-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1800">
                <a href="tel:+008001234567" class="text-decoration-none">
                    <div class="feature-box feature-box-style-2 m-0">
                        <div class="feature-box-icon">
                            <i class="icon-call-out icons"></i>
                        </div>
                        <div class="feature-box-info">
                            <label class="font-weight-light" style="color: #ffffff">CALL US</label>
                            <strong class="font-weight-normal">0717 443 616</strong>
                        </div>
                    </div>
                </a>
            </div>

    </div>
</section>
