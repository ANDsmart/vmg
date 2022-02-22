
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
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block"><a class="nav-link pl-0" href="{{route('general_information.about_us')}}" target="_blank"><i class="fas fa-angle-right"></i> About Us</a></li>
{{--                                    <li class="nav-item nav-item-anim-icon d-none d-md-block">--}}
{{--                                        <a class="nav-link" href="{{route('general_information.contact_us')}}" target="_blank"><i class="fas fa-angle-right" ></i> Contact Us</a></li>--}}
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
                                                                            <a class="dropdown-item dropdown-toggle" href="#"> {{trans('label.functions')}} <i
                                                                                        class="fas fa-chevron-down"></i></a>
                                                                            <ul class="dropdown-menu">
                                                                                <li>
                                                                                    <div class="dropdown-mega-content">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <span class="dropdown-mega-sub-title" >Manage</span>
                                                                                                <p>We manage resources </p>
                                                                                                <ul class="dropdown-mega-sub-nav">
                                                                                                    @foreach((new \App\Repositories\System\CodeValueRepository())->getServiceForDirectory() as $code_value)
                                                                                                        <li><a class="dropdown-item" href="{{route('general_information.service.display',$code_value->id)}}">{{$code_value->name}}</a>
                                                                                                            <p>{{truncateString($code_value->content,50)}}</p>
                                                                                                        </li>

                                                                                                    @endforeach


                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <span class="dropdown-mega-sub-title">Combine</span>
                                                                                                <p>We combine  resources </p>

                                                                                                <ul class="dropdown-mega-sub-nav">
                                                                                                    @foreach(\App\Models\Resource\Functions::all() as $function)
                                                                                                        <li><a class="dropdown-item" href="{{route('general_information.function.display',$function->id)}}">{{$function->title}}</a>
                                                                                                            <p></p>
                                                                                                        </li>
                                                                                                    @endforeach

                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <span class="dropdown-mega-sub-title">Create</span>
                                                                                                <p>We create business value  </p>

                                                                                                <ul class="dropdown-mega-sub-nav">
                                                                                                    <li><a class="dropdown-item" href="{{route('general_information.service.display',6)}}" style="color: #000000">EFFECTIVE BUSINESS STRATEGIES</a>
                                                                                                        <p></p>
                                                                                                    </li>
                                                                                                    <li><a class="dropdown-item" href="{{route('general_information.service.display',6)}}" style="color: #000000">MANAGE RESOURCE</a>
                                                                                                        <p></p>
                                                                                                    </li>
                                                                                                    <li><a class="dropdown-item" href="{{route('general_information.service.display',6)}}" style="color: #000000">MANAGE BUSINESS VALUES</a>
                                                                                                        <p></p>
                                                                                                    </li>
                                                                                                    <li><a class="dropdown-item" href="{{route('general_information.service.display',6)}}" style="color: #000000">IMPROVE ORGANIZATION PERFORMANCE</a>
                                                                                                        <p></p>
                                                                                                    </li>

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
                                                                            <ul class="dropdown-menu">
                                                                                @foreach((new \App\Repositories\System\CodeValueRepository())->getTrainingCategories() as $training)
                                                                                    <li class="dropdown-submenu">
                                                                                        <a class="dropdown-item" href="#" style="color: #000000">{{$training->name}}
                                                                                            <i class="fas fa-chevron-down"></i></a>
                                                                                        <ul class="dropdown-menu">

                                                                                            @foreach((new \App\Repositories\System\CodeValueRepository())->getTrainingByTrainingCategory($training->id) as $knowledge)
                                                                                                <li>
                                                                                                    <a class="dropdown-item" href="{{route('general_information.training.display',$knowledge->uuid)}}" style="color: #000000">
                                                                                                        {{$knowledge->title}}</a>
                                                                                                </li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </li>

                                                                        <li class="dropdown">
                                                                            <a class="dropdown-item dropdown-toggle" href="#"> {{trans('label.careers')}} <i class="fas fa-chevron-down"></i></a>

                                                                            <ul class="dropdown-menu">
                                                                                @foreach(\App\Models\Resource\Career::where('isactive',1)->get() as $career)
                                                                                    <li>
                                                                                        <a class="dropdown-item" href="{{route('general_information.career.display',$career->id)}}" style="color: #000000">{{$career->title}}</a>
                                                                                        <p></p>

                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>

                                                                        </li>


                                                                        <li class="dropdown">
                                                                            <a class="dropdown-item dropdown-toggle" href="#"> {{trans('label.about_us')}} <i class="fas fa-chevron-down"></i></a>
                                                                            <ul class="dropdown-menu">
                                                                                <li>
                                                                                    <a class="dropdown-item" href="{{route('general_information.about_us')}}" style="color: #000000"> WHAT WE DO?</a>
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
                                                                                                        data-focus="headerSearch">
{{--                                    <i class="fas fa-search header-nav-top-icon"></i>--}}
                                </a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
{{--                                    <form role="search" action="https://preview.oklerthemes.com/porto/8.0.0/page-search-results.html" method="get">--}}
{{--                                        <div class="simple-search input-group"><input class="form-control text-1" id="headerSearch" name="q" type="search" value=""--}}
{{--                                                                                      placeholder="Search..."> <span class="input-group-append">															<button--}}
{{--                                                        class="btn" type="submit">																<i--}}
{{--                                                            class="fa fa-search header-nav-top-icon"></i>															</button>														</span>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
