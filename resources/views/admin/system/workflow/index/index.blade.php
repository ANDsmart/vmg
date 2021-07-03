@extends('layouts.main', ['title' => trans('label.administrator.system.workflow.settings'), 'header' => trans('label.administrator.system.workflow.settings')])

@include('includes.validate_assets')

@section('content')

    @include('admin.system.workflow.index.includes.menu')

@endsection
