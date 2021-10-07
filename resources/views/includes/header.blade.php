{{--<header id="header" class="header-effect-shrink"--}}
{{--        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}"--}}
{{--        style="height: 0px">--}}
{{--    <div class="header-body border-top-0">--}}
{{--        <div class="header-top header-top-default header-top-borders border-bottom-0">--}}
{{--            <div class="container h-100">--}}
{{--                <div class="header-row h-100">--}}
{{--                    <div class="header-column justify-content-end">--}}
{{--                        <div class="header-row">--}}
{{--                            <nav class="header-nav-top">--}}
{{--                                <ul class="nav nav-pills">--}}
{{--                                    <li class="nav-item nav-item-borders py-2 pr-1 d-none d-md-inline-flex">--}}
{{--                                        @include("includes.lang")--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="header-container container" style="height: 10px">--}}
{{--            <div class="header-row">--}}
{{--                <div class="header-column">--}}
{{--                    <div class="header-row">--}}
{{--                        <div class="header-logo">--}}
{{--                            <a href="{{url('/')}}">--}}
{{--                                <img alt="Porto" height="90" src="{{url('img/vmg.png')}}">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="header-column justify-content-end">--}}
{{--                    <div class="header-row">--}}
{{--                        <div class="header-nav order-2 order-lg-1">--}}
{{--                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">--}}
{{--                                <nav class="collapse">--}}
{{--                                    <ul class="nav nav-pills" id="mainNav">--}}
{{--                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{url('/')}}" style="font-size: 14px"> {{trans('label.home')}}--}}
{{--                                                <i class="fas fa-chevron-down"></i></a>--}}

{{--                                        </li>--}}

{{--                                        @foreach((new \App\Repositories\System\CodeValueRepository())->getServiceForDirectory() as $code_value)--}}
{{--                                            <li class="dropdown ropdown dropdown-full-color dropdown-primary"><a class="dropdown-item dropdown-toggle" href="#"--}}
{{--                                                                                                                 style="font-size: 14px">  {{ __('label.services.directory.'. $code_value->id) }}--}}
{{--                                                    <i class="fas fa-chevron-down"></i></a>--}}
{{--                                                <ul class="dropdown-menu">--}}
{{--                                                    @foreach((new \App\Repositories\Resource\ServiceRepository())->getServiceByServiceDirectory($code_value->id) as $service)--}}
{{--                                                        <li><a class="dropdown-item"--}}
{{--                                                               href="{{route('general_information.service.display',$service->id)}}">{{$service->title}}</a></li>--}}
{{--                                                    @endforeach--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}

{{--                                        @endforeach--}}


{{--                                    </ul>--}}


{{--                                </nav>--}}
{{--                            </div>--}}
{{--                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">--}}
{{--                                <i class="fas fa-bars"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}


{{--<header id="header" class="header-effect-shrink"--}}
{{--        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}"--}}
{{--        style="height: 101px;">--}}
{{--    <div class="header-body border-top-0" style="top: 0px; position: fixed;">--}}
{{--        <div class="header-container container-fluid px-lg-4" style="height: 100px; min-height: 0px;">--}}
{{--            <div class="header-row">--}}
{{--                <div class="header-column header-column-border-right flex-grow-0">--}}
{{--                    <div class="header-row pr-4">--}}
{{--                        <div class="header-logo" style="width: 100px; height: 48px;">--}}
{{--                            <a href="{{url('/')}}">--}}
{{--                                <img alt="Porto" height="90" src="{{url('img/vmg.png')}}">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="header-column">--}}
{{--                    <div class="header-row">--}}
{{--                        <div class="header-nav header-nav-links justify-content-center">--}}
{{--                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">--}}
{{--                                <nav class="collapse header-mobile-border-top">--}}
{{--                                    <ul class="nav nav-pills" id="mainNav">--}}
{{--                                        <li class="dropdown dropdown-mega">--}}
{{--                                            <a class="dropdown-item dropdown-toggle" href="elements.html"> {{trans('label.industries')}} <i--}}
{{--                                                        class="fas fa-chevron-down"></i></a>--}}
{{--                                            <ul class="dropdown-menu">--}}
{{--                                                <li>--}}
{{--                                                    <div class="dropdown-mega-content">--}}
{{--                                                        <div class="row">--}}

{{--                                                            <div class="col-lg-4">--}}
{{--                                                                <span class="dropdown-mega-sub-title" >Industries</span>--}}
{{--                                                                <ul class="dropdown-mega-sub-nav">--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-accordions.html">Agriculture</a>--}}
{{--                                                                    <p>We help to grow your agriculture</p>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li>--}}
{{--                                                                        <a class="dropdown-item" href="elements-toggles.html">Insights on Engineering, Construction & Building Materials--}}
{{--                                                                        </a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li>--}}
{{--                                                                        <a class="dropdown-item" href="elements-tabs.html">Insights on Financial Services--}}
{{--                                                                        </a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-icons.html">Insights on Private Equity & Principal Investors--}}
{{--                                                                        </a></li>--}}

{{--                                                                </ul>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}

{{--                                        <li class="dropdown dropdown-mega">--}}
{{--                                            <a class="dropdown-item dropdown-toggle" href="elements.html"> {{trans('label.functions')}} <i--}}
{{--                                                        class="fas fa-chevron-down"></i></a>--}}
{{--                                            <ul class="dropdown-menu">--}}
{{--                                                <li>--}}
{{--                                                    <div class="dropdown-mega-content">--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg-4"><span class="dropdown-mega-sub-title" >We manage</span>--}}
{{--                                                                <ul class="dropdown-mega-sub-nav">--}}
{{--                                                                    @foreach((new \App\Repositories\System\CodeValueRepository())->getServiceForDirectory() as $code_value)--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-accordions.html">{{$code_value->name}}</a>--}}
{{--                                                                    <p>{{truncateString($code_value->content,50)}}</p>--}}
{{--                                                                    </li>--}}

{{--                                                                @endforeach--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-4"><span class="dropdown-mega-sub-title">We combine</span>--}}
{{--                                                                <ul class="dropdown-mega-sub-nav">--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-badges.html">Badges</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-cards.html">Cards</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-image-gallery.html">Image Gallery</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-image-frames.html">Image Frames</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-image-hotspots.html">Image Hotspots</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-blockquotes.html">Blockquotes</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-sticky-elements.html">Sticky Elements</a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-4"><span class="dropdown-mega-sub-title">We create</span>--}}
{{--                                                                <ul class="dropdown-mega-sub-nav">--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-typography.html">Typography</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-call-to-action.html">Call to Action</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-pricing-tables.html">Pricing Tables</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-progressbars.html">Progress Bars</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-process.html">Process</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-countdowns.html">Countdowns</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-sections-parallax.html">Sections &amp; Parallax</a></li>--}}
{{--                                                                    <li><a class="dropdown-item" href="elements-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"> {{trans('label.knowledge')}} <i class="fas fa-chevron-down"></i></a>--}}
{{--                                            <ul class="dropdown-menu">--}}
{{--                                                <li class="dropdown-submenu"><a class="dropdown-item" href="#">Headers<i class="fas fa-chevron-down"></i></a>--}}
{{--                                                    <ul class="dropdown-menu">--}}
{{--                                                        <li><a class="dropdown-item" href="feature-headers-overview.html">Overview</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}

{{--                                                <li class="dropdown-submenu"><a class="dropdown-item" href="#">Headers<i class="fas fa-chevron-down"></i></a>--}}
{{--                                                    <ul class="dropdown-menu">--}}
{{--                                                        <li><a class="dropdown-item" href="feature-headers-overview.html">Overview</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                                <li class="dropdown-submenu"><a class="dropdown-item" href="#">Headers<i class="fas fa-chevron-down"></i></a>--}}
{{--                                                    <ul class="dropdown-menu">--}}
{{--                                                        <li><a class="dropdown-item" href="feature-headers-overview.html">Overview</a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}

{{--                                        <li class="dropdown">--}}
{{--                                            <a class="dropdown-item dropdown-toggle" href="#"> {{trans('label.about_us')}} <i class="fas fa-chevron-down"></i></a>--}}
{{--                                            <ul class="dropdown-menu">--}}
{{--                                                <li>--}}
{{--                                                    <a class="dropdown-item" href="{{route('home')}}"> What are we help clients? </a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a class="dropdown-item" href="{{route('general_information.about_us')}}"> What we do?</a>--}}
{{--                                                </li>--}}

{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="header-column header-column-border-left flex-grow-0 justify-content-center">--}}
{{--                    <div class="header-row pl-4 justify-content-end">--}}
{{--                        <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean m-0">--}}
{{--                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>--}}
{{--                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <button class="btn header-btn-collapse-nav ml-0 ml-sm-3" data-toggle="collapse" data-target=".header-nav-main nav">--}}
{{--                            <i class="fas fa-bars"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}

<header id="header" class="header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}"
        style="height: 155px;">
    <div class="header-body border-top-0" style="position: fixed;">
        <div class="header-top" style="height: 54px;">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block"><a class="nav-link pl-0" href="{{route('general_information.about_us')}}" target="_blank"><i
                                                    class="fas fa-angle-right"></i> About Us</a></li>
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                        <a class="nav-link" href="{{route('general_information.contact_us')}}" target="_blank"><i
                                                    class="fas fa-angle-right" ></i> Contact Us</a></li>
                                                                            @include("includes.lang")

                                    <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show"><span class="ws-nowrap"><i
                                                    class="fas fa-phone"></i> +255 (717) 443616</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 100px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">

                        <div class="header-logo" style="width: 100px; height: 48px;">
                                                        <a href="{{url('/')}}">
                                                            <img alt="Porto" height="90" src="{{url('img/vmg.png')}}">
                                                        </a>
                                                    </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links justify-content-center">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                                                <nav class="collapse header-mobile-border-top">
                                                                    <ul class="nav nav-pills" id="mainNav">
                                                                        <li class="dropdown dropdown-mega">
                                                                            <a class="dropdown-item dropdown-toggle" href="#"> {{trans('label.industries')}} <i
                                                                                        class="fas fa-chevron-down"></i></a>
                                                                            <ul class="dropdown-menu">
                                                                                <li>
                                                                                    <div class="dropdown-mega-content">
                                                                                        <div class="row">

                                                                                            <div class="col-lg-4">
                                                                                                <span class="dropdown-mega-sub-title" >Industries</span>
                                                                                                <ul class="dropdown-mega-sub-nav">
                                                                                                    <li><a class="dropdown-item" href="#">Legal</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a class="dropdown-item" href="#">Accounts
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a class="dropdown-item" href="#">Compliance
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a class="dropdown-item" href="#">Marketing
                                                                                                        </a>
                                                                                                    </li>

                                                                                                </ul>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </li>

                                                                        <li class="dropdown dropdown-mega">
                                                                            <a class="dropdown-item dropdown-toggle" href="#"> {{trans('label.functions')}} <i
                                                                                        class="fas fa-chevron-down"></i></a>
                                                                            <ul class="dropdown-menu">
                                                                                <li>
                                                                                    <div class="dropdown-mega-content">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4"><span class="dropdown-mega-sub-title" >Manage</span>
                                                                                                <ul class="dropdown-mega-sub-nav">
                                                                                                    @foreach((new \App\Repositories\System\CodeValueRepository())->getServiceForDirectory() as $code_value)
                                                                                                    <li><a class="dropdown-item" href="{{route('general_information.service.display',$code_value->id)}}">{{$code_value->name}}</a>
                                                                                                    <p>{{truncateString($code_value->content,50)}}</p>
                                                                                                    </li>

                                                                                                @endforeach


                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="col-lg-4"><span class="dropdown-mega-sub-title">Combine</span>
                                                                                                <p>As one </p>
                                                                                                <ul class="dropdown-mega-sub-nav">
                                                                                                    <li><a class="dropdown-item" href="#">Coordination</a>
                                                                                                    <p></p>
                                                                                                    </li>
                                                                                                    <li><a class="dropdown-item" href="#">Collaboration</a>
                                                                                                    <p></p>
                                                                                                    </li>
                                                                                                    <li><a class="dropdown-item" href="#">Cooperation</a>
                                                                                                    <p></p>
                                                                                                    </li>
                                                                                                    <li><a class="dropdown-item" href="#">Communication</a>
                                                                                                    <p></p>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="col-lg-4"><span class="dropdown-mega-sub-title">Create</span>
                                                                                                <ul class="dropdown-mega-sub-nav">
{{--                                                                                                    <li><a class="dropdown-item" href="elements-typography.html">Typography</a></li>--}}
                                                                                                </ul>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="dropdown">
                                                                            <a class="dropdown-item dropdown-toggle" href="#"> {{trans('label.knowledge')}}
                                                                                <i class="fas fa-chevron-down"></i>
                                                                            </a>
{{--                                                                            <ul class="dropdown-menu">--}}
{{--                                                                                @foreach((new \App\Repositories\System\CodeValueRepository())->getTrainingCategories() as $training)--}}
{{--                                                                                <li class="dropdown-submenu">--}}
{{--                                                                                    <a class="dropdown-item" href="#">{{$training->name}}--}}
{{--                                                                                        <i class="fas fa-chevron-down"></i></a>--}}
{{--                                                                                    <ul class="dropdown-menu">--}}

{{--                                                                                        @foreach((new \App\Repositories\System\CodeValueRepository())->getTrainingByTrainingCategory($training->id) as $knowledge)--}}
{{--                                                                                        <li>--}}
{{--                                                                                            <a class="dropdown-item" href="{{route('general_information.training.display',$knowledge->uuid)}}">--}}
{{--                                                                                                {{$knowledge->title}}</a>--}}
{{--                                                                                        </li>--}}
{{--                                                                                            @endforeach--}}
{{--                                                                                    </ul>--}}
{{--                                                                                </li>--}}
{{--                                                                                    @endforeach--}}
{{--                                                                            </ul>--}}
                                                                        </li>

                                                                        <li class="dropdown">
                                                                            <a class="dropdown-item dropdown-toggle" href="#"> {{trans('label.about_us')}} <i class="fas fa-chevron-down"></i></a>
                                                                            <ul class="dropdown-menu">
                                                                                <li>
                                                                                    <a class="dropdown-item" href="{{route('general_information.about_us')}}"> What are we help clients? </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="{{route('general_information.about_us')}}"> What we do?</a>
                                                                                </li>

                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex"><a href="#" class="header-nav-features-toggle"
                                                                                                        data-focus="headerSearch"><i
                                            class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                    <form role="search" action="https://preview.oklerthemes.com/porto/8.0.0/page-search-results.html" method="get">
                                        <div class="simple-search input-group"><input class="form-control text-1" id="headerSearch" name="q" type="search" value=""
                                                                                      placeholder="Search..."> <span class="input-group-append">															<button
                                                        class="btn" type="submit">																<i
                                                            class="fa fa-search header-nav-top-icon"></i>															</button>														</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
