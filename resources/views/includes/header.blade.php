<header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0  box-shadow-none">
        <div class="header-top header-top-default header-top-borders border-bottom-0" style="height: 62px;">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-between">
                        <div class="header-row">
                            <nav class="header-nav-top w-100">
                                <ul class="nav nav-pills justify-content-between w-100 h-100">
                                    <li class="nav-item py-2 d-inline-flex">
<span class="are-you-looking-for-phone py-2 d-flex align-items-center text-color-light font-weight-semibold text-uppercase text-4 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
									<span>
										<img width="18" height="25" src="{{url('img/demos/business-consulting-2/icons/phone.svg')}}" alt="Phone" >
									</span>
									<a class="text-color-light text-decoration-none" href="tel:123-456-7890" style="color:#ffffff">0717 443 616 </a>
								</span>
                                    </li>

                                    <li>
                                        <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                                <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                                    <div class="header-row pt-3">
                                                        @include("includes.lang")


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img alt="Porto"  height="90" src="{{url('img/vmg.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">

                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-font-md header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{url('/')}}"> {{trans('label.home')}} <i class="fas fa-chevron-down"></i></a>

                                        </li>

                                        @foreach((new \App\Repositories\System\CodeValueRepository())->getServiceForDirectory() as $code_value)
                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">  {{ __('label.services.directory.'. $code_value->id) }} <i class="fas fa-chevron-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="page-custom-header.html">Custom Header</a></li>
                                                    <li><a class="dropdown-item" href="page-careers.html">Careers</a></li>
                                                    <li><a class="dropdown-item" href="page-faq.html">FAQ</a></li>
                                                    <li><a class="dropdown-item" href="page-login.html">Login / Register</a></li>
                                                    <li><a class="dropdown-item" href="page-user-profile.html">User Profile</a></li>
                                                </ul>
                                            </li>

                                        @endforeach




                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex"><a href="#" class="header-nav-features-toggle"
                                                                                                        data-focus="headerSearch"><i
                                            class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                                    <form role="search" action="https://preview.oklerthemes.com/porto/8.0.0/page-search-results.html" method="get">
                                        <div class="simple-search input-group"><input class="form-control text-1" id="headerSearch" name="q" type="search" value=""
                                                                                      placeholder="Search..."> <span class="input-group-append">															<button
                                                        class="btn" type="submit">																<i
                                                            class="fa fa-search header-nav-top-icon text-color-dark"></i>															</button>														</span>
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
