<div class="row text-center pt-4" style="margin-top: 100px">
    <div class="col">
        <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
            <span>We're not the only ones </span>
            <span class="word-rotator-words bg-primary" style="width: 110.594px;">
									<b class="is-hidden">excited</b>
									<b class="is-visible">happy</b>
								</span>
            <span> about VMG </span>
        </h2>
        <h4 class="text-primary lead tall text-4">30,000 CUSTOMERS IN 100 COUNTRIES .</h4>
    </div>
</div>

<div class="row text-center mt-5">
    <div class="owl-carousel owl-theme carousel-center-active-item owl-loaded owl-drag owl-carousel-init"
         data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}"
         style="height: auto;">


        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-1791px, 0px, 0px); transition: all 0.25s ease 0s; width: 3583px;">

                @foreach($clients as $client)
                <div class="owl-item cloned" style="width: 162.857px;">
                    <div>
                        <img class="img-fluid" src="{{url($client->client_logo)}}" alt="" style="height: 100px">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="owl-nav disabled">
            <button type="button" role="presentation" class="owl-prev"></button>
            <button type="button" role="presentation" class="owl-next"></button>
        </div>
        <div class="owl-dots disabled">

        </div>
    </div>
</div>
