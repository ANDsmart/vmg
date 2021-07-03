@extends('layouts.main', ['title' => trans('label.country'), 'header' => trans('label.country')])
@include('includes.datatable_assets')

@include('includes.validate_assets')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="card card-featured card-featured-primary mb-4">
                <header class="card-header">
                    <h2 class="card-title">{{ $country->name }}</h2>
                </header>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4" >{{ trans('label.country')}}:</label>
                                        <label class="col-lg-8 custom_label">{{ $country->name }} {{ $country->flag }}</label>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4" >{{ trans('label.country_code')}}:</label>
                                        <label class="col-lg-8 custom_label">{{ $country->code }}</label>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <section class="card card-featured card-featured-primary"  style="margin-top: 60px">
                        <header class="card-header">
                            <div class="float-right">
                                <a href="{{ route('country.create_region',$country) }}"  class="btn btn-primary save_button" ><i class="icon fa fa-plus-circle"></i>&nbsp;@lang('buttons.general.add')</a>
                            </div>
                            <h2 class="card-title">@lang('label.region')</h2>
                        </header>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover table-responsive-md" id="regions-table">
                                        <thead>
                                        <tr>
                                            <th>@lang('label.sn')</th>
                                            <th>@lang('label.name')</th>
                                            <th>@lang('label.hasc')</th>
                                            <th>@lang('label.actions')</th>


                                        </tr>
                                        </thead>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </section>
        </div>
    </div>

@endsection

@push('after-scripts')
<script  type="text/javascript">

    $('#regions-table').DataTable({
        processing: true,
        serverSide: true,
        // 'select': 'multi',
        // 'order': [[1, 'asc']],

        ajax: '{{ route('country.get_regions_by_country',$country) }}',
        columns: [
            { data: 'DT_Row_Index', name: 'DT_Row_Index', orderable: false, searchable: false},
            { data: 'name', name: 'name' },
            { data: 'hasc', name: 'hasc' },
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