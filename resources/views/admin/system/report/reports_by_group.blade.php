@extends('layouts.main', ['title' => $report_group .  ' '. trans('label.administrator.system.reports.reports'), 'header' => $report_group .  ' '. trans('label.administrator.system.reports.reports')])


@include('includes.datatable_assets')

@section('content')
    {{--<div class = "col-md-12">--}}
    {{--{{ Form::input( 'text','name', null, ['class' => 'form-control', 'id'=>'name','onkeyup'=>'searchname()', 'placeholder'=> 'Search For Name ...' ]) }}--}}
    {{--</div>--}}
    <div>&nbsp;</div>
    {{ $dataTable->table(['class' => 'display', 'cellspacing' => '0', 'width' => '100%','id'=> 'dataTable'], true) }}
@stop

@push('after-scripts')
    {{ $dataTable->scripts() }}

    <script>


    </script>

@endpush
