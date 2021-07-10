@extends('layouts.main', ['title' => '' , 'header' => ''])
@push('after-styles')
    <style>
    </style>
@endpush

@section('content')

{{--    slider content--}}
@include('home_sections.slider_content')

{{--    about vmg--}}
@include('home_sections.about_vmg')

{{--  consult--}}
{{--@include('home_sections.consult')--}}


{{--event section --}}
{{--    clients sections--}}
{{--leadership section--}}
@include('home_sections.services')

@include('home_sections.trainings')


@include('home_sections.testimonial')
{{--    clients sections--}}
@include('home_sections.clients')




@endsection

@push('after-scripts')
    <script>

    </script>
@endpush
