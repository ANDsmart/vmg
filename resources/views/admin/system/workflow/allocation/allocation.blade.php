@extends('layouts.main', ['title' => __('label.administrator.system.workflow.workflow_allocation'), 'header' => __('label.administrator.system.workflow.workflow_allocation')])


@include('includes.datatable_assets')
@include('includes.sweetalert_assets')

@push('after-styles')

    {{ Html::style(asset_url() . "/nextbyte/plugins/datatables/css/checkboxes/dataTables.checkboxes.css") }}
    {{ Html::style(asset_url() . "/nextbyte/plugins/sweetalert/css/sweetalert.css") }}
    {{ Html::style(asset_url() . "/nextbyte/plugins/sweetalert/css/google.css") }}
    {{ Html::style(url("vendor/pnotify/pnotify.custom.css")) }}


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
    <!-- Put the page specifically for this page here -->
    @include("admin.system.workflow.pending_filter")

    <legend></legend>
    <br/>
    @permission("workflow_allocation")
    {{--Assign to--}}
                {{ Form::open(['role' => 'form', 'id' => 'assign-user', 'route' => 'workflow.assign_allocation']) }}
        <div class="row">
            <div class="col-md-7">
            </div>

            <div class="col-md-3 assign_user_select">
                <label for="assigned_user">{{ __('label.assign_to') }}:</label>
                {{ Form::select('assigned_user', $users, null, ['class' => 'form-control search-select', 'id' => 'assigned_user', 'placeholder' => '']) }}
            </div>
            <div class="col-md-2">
                <label for="allocate_submit">&nbsp;</label>
                <input type="submit" class="form-control btn btn-primary btn-sm btn-submit" value="Submit" id="allocate_submit">
            </div>

        </div>
                {{ Form::close() }}


    <br/>


    @endauth

    @include("admin.system.workflow.allocation.includes.allocation_table")

@endsection

@push('after-scripts')
    {{ Html::script(asset_url(). "/nextbyte/plugins/datatables/js/checkboxes/dataTables.checkboxes.min.js") }}

    {{ Html::script(asset_url(). "/nextbyte/plugins/sweetalert/js/sweetalert.min.js") }}
    {{ Html::script(asset_url(). "/nextbyte/plugins/forms/js/jquery.form.min.js") }}
    {{ Html::script(url("vendor/pnotify/pnotify.custom.js")) }}

    {{--{{ Html::script(url("js/examples/examples.notifications.js")) }}--}}

    @include("admin.system.workflow.pending_script")
    @include("admin.system.workflow.allocation.includes.allocation_datatable")

    <script  type="text/javascript">
        $(function () {
            $(".search-select").select2();

         });
    </script>


@endpush
