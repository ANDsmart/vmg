@extends('layouts.main', ['title' => trans('label.administrator.system.audits.manage_audits'), 'header' => trans('label.administrator.system.audits.manage_audits')])

@include('includes.validate_assets')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <ul class="list-unstyled">
                    <a href="{{ route('system.audit.search_page') }}" class="list-group-item list-group-item-action">
                        <h5 class="list-group-item-heading"><i class="fas fa-search-plus"></i> @lang('label.administrator.system.audits.search_audits')
                                              </h5>
                        <p class="list-group-item-text">@lang('label.administrator.system.audits.search_audits_descr')</p>
                    </a>
                </ul>
            </div>
        </div>
    </div>

@endsection
