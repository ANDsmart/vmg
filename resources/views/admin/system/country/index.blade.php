@extends('cms.layouts.cms', ['title' => trans('label.country'), 'header' => __('label.country')])


@include('includes.datatable_assets')

@push('after-styles')
{{ Html::style(url('vendor/sweetalert/sweetalert.css')) }}


@endpush


@section('content')

    <section class="card card-featured card-featured-primary mb-4">
        <header class="card-header">
            <div class="float-right">
                <a href="{{ route('country.create') }}"  class="btn btn-primary save_button" ><i class="icon fa fa-plus-circle"></i>&nbsp;@lang('buttons.general.add')</a>
            </div>
            <h2 class="card-title"></h2>
        </header>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover table-responsive-md" id="countries-table">
                        <thead>
                        <tr>
                            <th>@lang('label.sn')</th>
                            <th>@lang('label.name')</th>
                            <th>@lang('label.administrator.system.codes.code')</th>
                            <th>@lang('label.actions')</th>


                        </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>
    </section>

@endsection

@push('after-scripts')
{{ Html::script(url('vendor/sweetalert/sweetalert.min.js')) }}

<script  type="text/javascript">

        $('#countries-table').DataTable({
        processing: true,
        serverSide: true,
        // 'select': 'multi',
        // 'order': [[1, 'asc']],

        ajax: '{{ route('country.get_countries') }}',
        columns: [
            { data: 'DT_Row_Index', name: 'DT_Row_Index', orderable: false, searchable: false},
            { data: 'name', name: 'name' },
            { data: 'code', name: 'code' },
            { data: 'actions', name: 'actions', orderable: false, searchable: false }
        ],

    });


</script>

{{--<script  type="text/javascript">--}}
    {{--$(function () {--}}
        {{--$(".search-select").select2();--}}
    {{--});--}}
{{--</script>--}}

@endpush
