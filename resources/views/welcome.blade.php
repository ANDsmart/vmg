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


{{--    clients sections--}}
    @include('home_sections.clients')

{{--    clients sections--}}
    @include('home_sections.testimonial')
@endsection

@push('after-scripts')
    <script>

    </script>
@endpush
