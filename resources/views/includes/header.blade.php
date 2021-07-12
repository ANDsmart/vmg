<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}" style="height: 0px">
    <div class="header-body border-top-0">
        <div class="header-top header-top-default header-top-borders border-bottom-0">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 pr-1 d-none d-md-inline-flex">
                                        @include("includes.lang")
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 10px">
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
                        <div class="header-nav order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{url('/')}}" style="font-size: 14px"> {{trans('label.home')}} <i class="fas fa-chevron-down"></i></a>

                                        </li>

                                        @foreach((new \App\Repositories\System\CodeValueRepository())->getServiceForDirectory() as $code_value)
                                            <li class="dropdown ropdown dropdown-full-color dropdown-primary"><a class="dropdown-item dropdown-toggle" href="#" style="font-size: 14px">  {{ __('label.services.directory.'. $code_value->id) }} <i class="fas fa-chevron-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    @foreach((new \App\Repositories\Resource\ServiceRepository())->getServiceByServiceDirectory($code_value->id) as $service)
                                                        <li><a class="dropdown-item" href="{{route('general_information.service.display',$service->id)}}" >{{$service->title}}</a></li>
                                                    @endforeach
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



