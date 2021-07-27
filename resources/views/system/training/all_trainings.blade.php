@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')

    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{url('img/page-header/trainings2.jpg')}});">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-10"> <strong>{{trans('label.trainings')}}</strong></h1>
                    </div>
                </div>
            </div>
        </section>



        <div class="container py-2">
        <div class="row mb-5 pb-3">
            @foreach($trainings as $training)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 mt-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card flip-card text-center rounded-0" >
                        <div class="flip-front p-5" style="height: 200px">
                            <div class="flip-content my-4">
                                <h4 class="font-weight-bold text-color-primary text-4">{{$training->title}}</h4>
                                {{--                                <p>{!! truncateString($service->content,200) !!}</p>--}}
                            </div>
                        </div>
                        <div class="flip-back d-flex align-items-center p-5" style="background-image: url(img/generic/generic-corporate-17-1.jpg); background-size: cover; background-position: center;">
                            <div class="flip-content">
                                <p class="font-weight-light text-color-light opacity-5">{!! truncateString($training->contents,150) !!}</p>
                                <a href="{{route('general_information.training.display',$training->uuid)}}" class="btn btn-light btn-modern text-color-dark font-weight-bold">{{trans('label.read_more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
    </div>

@endsection
    @push('after-scripts')
    <script>

    </script>
@endpush
