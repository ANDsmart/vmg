@extends('layouts.main', ['title' => __('label.administrator.system.reports.report_groups'), 'header' => __('label.administrator.system.reports.report_groups')])

@include('includes.datatable_assets')

@section('content')

    @include('admin.system.report.includes.menu')

@endsection
