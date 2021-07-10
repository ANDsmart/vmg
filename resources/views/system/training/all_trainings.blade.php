@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')



    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
{{--                    <h2 class="text-color-dark font-weight-normal text-6 mb-2"> <strong class="font-weight-extra-bold">{{$training->title}}</strong></h2>--}}
{{--                    {!! $training->content !!}--}}
                </div>

            </div>
        </div>
    </section>

    <div class="container">

        <div class="row mt-5 mb-5">
            <div class="col">
                <h2 class="font-weight-semibold mb-3">Training Resources</h2>

                <p class="lead font-weight-normal">.</p>

                <p class="mb-5"></p>


                @foreach($trainings as $training)
                <div class="row mt-4">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <a href="demo-medical-resources-detail.html" class="text-decoration-none">
                            <img alt="" class="img-fluid" src="{{url($training->getImageAttribute())}}">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-weight-semibold mb-1 mt-1">
                            <a href="{{route('general_information.training.display',$training->uuid)}}" class="text-decoration-none">{{$training->title}}</a>
                        </h4>
                        <p>{!! truncateString($training->contents,100) !!}</p>
                        <p><a href="{{route('general_information.training.display',$training->uuid)}}" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-2 mb-3 font-weight-bold btn-md text-1">view more...</a></p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>@endsection

@push('after-scripts')
    <script>

    </script>
@endpush
