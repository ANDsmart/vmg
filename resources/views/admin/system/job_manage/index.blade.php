@extends('layouts.main', ['title' => trans('label.administrator.system.jobs.manage_jobs'), 'header' => trans('label.administrator.system.jobs.manage_jobs')])

@include('includes.validate_assets')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <ul class="list-unstyled">
                    <a href="{{ route('system.job.index') }}" class="list-group-item list-group-item-action">
                        <h5 class="list-group-item-heading"><i class="fas fa-tasks"></i> @lang('label.administrator.system.jobs.pending_jobs')
                            &nbsp;<span class="badge badge-pill badge-success" style="font-size:10px">{{ number_0_format($count_jobs)  }}</span>
                        </h5>
                        <p class="list-group-item-text">@lang('label.administrator.system.jobs.pending_jobs_descr')</p>
                    </a>
                </ul>
            </div>
        </div>


        <div class="col-md-4">
            <div class="list-group">
                <ul class="list-unstyled">
                    <a href="{{ route('system.failed_job.index') }}" class="list-group-item list-group-item-action">
                        <h5 class="list-group-item-heading"><i class="fas fa-times-circle"></i> @lang('label.administrator.system.jobs.failed_jobs')
                            &nbsp;<span class="badge badge-pill badge-warning" style="font-size:10px">{{ number_0_format($count_failed_jobs)  }}</span>
                        </h5>

                        <p class="list-group-item-text">@lang('label.administrator.system.jobs.failed_jobs_descr')</p>
                    </a>
                </ul>
            </div>
        </div>

    </div>

@endsection
