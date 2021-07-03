@extends('cms.layouts.cms', ['title' => $code->name, 'header' => __('label.administrator.system.code_values.code_values')])

@include('includes.datatable_assets')

@push('after-styles')

@endpush

@section('content')
    <section class="card card-featured card-featured-primary mb-4">
        <header class="card-header">
            <div class="float-right">
                <a href="{{ route('code.value.create', $code->id) }}"  class="btn btn-primary save_button" ><i class="icon fa fa-plus-circle"></i>&nbsp;@lang('buttons.general.add')</a>
            </div>
            <h2 class="card-title">@lang('label.administrator.system.codes.code'): {{ Form::label( 'name', $code->name  , [ 'id'=> 'name']) }}</h2>
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
