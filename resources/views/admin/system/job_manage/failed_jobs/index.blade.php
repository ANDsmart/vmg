@extends('layouts.main', ['title' => trans('label.administrator.system.jobs.failed_jobs'), 'header' => __('label.administrator.system.jobs.failed_jobs')])


@include('includes.datatable_assets')

@push('after-styles')



@endpush


@section('content')

    <section class="card card-featured card-featured-primary mb-4">

        @include('admin.system.job_manage.failed_jobs.includes.get_failed_jobs')

    </section>

@endsection

@push('after-scripts')

    <script  type="text/javascript">



    </script>


@endpush
