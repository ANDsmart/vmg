@extends('cms.layouts.cms', ['title' => __('label.administrator.system.sysdef.group'), 'header' => __('label.administrator.system.sysdef.group')])


@include('includes.datatable_assets')

@push('after-styles')

@endpush


@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            {{----------Button Add New branch -----------}}

            {{--<div>&nbsp;</div>--}}
            <div class="row">

                <div class="col-md-12">

                    {{ $dataTable->table(['class' => 'display', 'cellspacing' => '0', 'width' => '100%' ,'id'=>'dataTable'],true) }}

                </div>
            </div>

        </div><!-- /.box-header -->

    </div><!--box box-success-->


@endsection

@push('after-scripts')
    {{ $dataTable->scripts() }}

    <script  type="text/javascript">
        $(function () {
            $(".search-select").select2();

        });
    </script>


@endpush
