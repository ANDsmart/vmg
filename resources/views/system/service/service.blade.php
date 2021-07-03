@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
{{--                    <h1 class="text-9 font-weight-bold">{{$service->title}}</h1>--}}
                </div>

            </div>
        </div>
    </section>


    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2"> <strong class="font-weight-extra-bold">{{$service->title}}</strong></h2>
                    {!! $service->content !!}
                </div>

            </div>
        </div>
    </section>
@endsection

@push('after-scripts')
    <script>

    </script>
@endpush
