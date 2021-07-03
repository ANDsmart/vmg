@extends('layouts.main', ['title' => trans('label.administrator.system.jobs.pending_jobs'), 'header' => __('label.administrator.system.jobs.pending_jobs')])


@include('includes.datatable_assets')

@push('after-styles')



@endpush


@section('content')

    <section class="card card-featured card-featured-primary mb-4">

        @include('admin.system.job_manage.active_jobs.includes.get_active_jobs')

    </section>

@endsection

@push('after-scripts')

    <script  type="text/javascript">



    </script>


@endpush
