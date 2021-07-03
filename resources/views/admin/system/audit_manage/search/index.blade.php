@extends('layouts.main', ['title' => __('label.administrator.system.audits.search_audits'), 'header' => __('label.administrator.system.audits.search_audits')])


@include('includes.datatable_assets')

@push('after-styles')


    <style>

        .custom_filter:after {
            background-color: #F5F5F5;
            border: 1px solid #DDDDDD;
            border-radius: 4px 0 4px 0;
            color: #3c5ba4;
            content: "@lang('label.custom_filter')";
            /* font-size: 12px;
            font-weight: bold; */
            left: -1px;
            padding: 3px 7px;
            position: absolute;
            top: -1px;
        }

        .custom_filter {
            background-color: #FFFFFF;
            border: 1px solid #DDDDDD;
            border-radius: 4px 4px 4px 4px;
            margin: 5px 0px;
            padding: 39px 19px 14px;
            position: relative;
        }

    </style>
@endpush

@section('content')

    <div class="custom_filter">
        {{ Form::open(['role' => 'form', 'id' => 'search-form']) }}
        <div class="row">
            <div class="col-md-12">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="auditable_type">@lang('label.administrator.system.audits.auditable')&nbsp;:</label>
                        {{ Form::select('auditable_type', $auditable_types, null, ['class' => 'form-control search-select', 'placeholder' => '', 'data-group' => '', 'id' => 'auditable_type']) }}
                    </div>

                    <div class="form-group col-md-3">
                        <label for="event">@lang('label.event')&nbsp;:</label>
                        {{ Form::select('event', ['created' => 'Created', 'updated'=> 'Updated', 'deleted' => 'Deleted'], null, ['class' => 'form-control search-select', 'placeholder' => '', 'data-group' => '', 'id' => 'event']) }}
                    </div>


                </div>
                {{--<br/>--}}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="submit" class="btn btn-success btn-sm btn-submit submit" value="@lang('buttons.general.search')" />
                    </div>
                </div>
            </div>
        </div>

        {{ Form::close() }}
    </div>

    <br/>




    @include("admin.system.audit_manage.search.includes.get_for_datatable")

@endsection

@push('after-scripts')



    {{--{{ Html::script(url("js/examples/examples.notifications.js")) }}--}}

    <script  type="text/javascript">
        $(function () {
            $(".search-select").select2();

        });
    </script>


@endpush
