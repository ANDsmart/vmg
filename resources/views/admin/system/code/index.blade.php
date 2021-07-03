@extends('cms.layouts.cms', ['title' => __('label.administrator.system.codes.codes'), 'header' => __('label.administrator.system.codes.codes')])


@include('includes.datatable_assets')

@push('after-styles')

@endpush


@section('content')

    <section class="card card-featured card-featured-primary mb-4">
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
