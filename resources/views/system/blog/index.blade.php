@extends('layouts.main', ['title' => __("label.blog.blog"), 'header' => __("label.blog.blog")])
@push('after-styles')
<style>

</style>
@endpush
@section("content")

    <div class="blog-page-area pd-top-120">
        <div class="container">
            <div class="row custom-gutters-60">

                <div class="col-lg-8">
                    @include('system.blog.includes.main_section')
                </div>
                <div class="col-lg-4">
                    @include('system.blog.includes.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
