@extends('cms.layouts.cms', ['title' => $sysdef_group->name, 'header' => __('label.administrator.system.sysdef.definitions')])


@include('includes.datatable_assets')

@push('after-styles')


@endpush



@section('content')

    <section class="card card-featured card-featured-primary mb-4">
        <header class="card-header">
            <div class="float-right">
                {{--<a href="{{ route('sysdef.index') }}">--}}
                    {{--<i class="fas fa-arrow-left"></i> @lang('label.go_back')</a>--}}
            </div>
            <h2 class="card-title">@lang('label.administrator.system.sysdef.group'): {{ Form::label( 'name', $sysdef_group->name  , [ 'id'=> 'name']) }}</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    {{ $dataTable->table(['class' => 'display', 'cellspacing' => '0', 'width' => '100%' ,'id'=>'dataTable'],true) }}
                </div>
            </div>
        </div>
    </section>

@endsection

@push('after-scripts')

    {{ $dataTable->scripts() }}

    <script  type="text/javascript">
        $(function () {
            $(".search-select").select2();
        });
    </script>

@endpush
