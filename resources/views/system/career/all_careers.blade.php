@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{url('img/map.png')}});">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-10"> <strong>{{trans('label.services.services')}}</strong></h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-2">
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar"><h5 class="font-weight-bold">Categories</h5>
                        <ul class="nav nav-list flex-column mb-5">
                            @foreach($service_types as $service_type)
                            <li class="nav-item"><a class="nav-link" href="{{route('general_information.service.get_services_by_service_type',$service_type->id)}}">{{$service_type->name}}</a></li>
                            @endforeach
                        </ul>
                    </aside>
                </div>

                <div class="col-md-9">
                    <div class="row mb-5 pb-3">
                        @foreach($services as $service)
                            <div class="col-md-6 col-lg-6 mb-5 mt-4 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card flip-card text-center rounded-0" >
                                    <div class="flip-front p-5" style="height: 200px">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">{{$service->title}}</h4>
                                            {{--                                <p>{!! truncateString($service->content,200) !!}</p>--}}
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url({{url((''))}}); background-size: cover; background-position: center;">
                                        <div class="flip-content">
                                            <p class="font-weight-light text-color-light opacity-5">{!! truncateString($service->content,150) !!}</p>
                                            <a href="{{route('general_information.service.display',$service->id)}}" class="btn btn-light btn-modern text-color-dark font-weight-bold">{{trans('label.read_more')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection

@push('after-scripts')
    <script>

    </script>
@endpush
