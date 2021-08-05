<section class="section section-primary section-no-border m-0" data-plugin-parallax="" data-plugin-options="{'speed': 6}" data-image-src="img/demos/hotel/parallax-hotel-map.png" style="position: relative; overflow: hidden;"><div class="parallax-background" style="background-image: url(&quot;img/demos/hotel/parallax-hotel-map.png&quot;); background-size: cover; position: absolute; top: 0px; left: 0px; width: 100%; height: 180%; transform: translate3d(0px, -85.375px, 0px); background-position-x: 50%;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="mt-4 mb-0 pb-0 text-light text-uppercase">What our Clients Say</h3>
                <div class="divider divider-light divider-small divider-small-center mb-4 mt-0">
                    <hr class="mt-2">
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($testimonials as $testimonial)
            <div class="col-lg-4">
                <div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation animated fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                    <blockquote class="box-shadow-custom">
                        <p>{{$testimonial->content}}</p>
                    </blockquote>
                    <div class="testimonial-arrow-down mx-auto"></div>
                    <div class="testimonial-author">
                        <p><strong>{{$testimonial->name}}</strong><span>{{$testimonial->designation->name}}</span></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
