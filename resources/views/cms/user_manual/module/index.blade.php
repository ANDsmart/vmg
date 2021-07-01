@extends('cms.layouts.cms', ['title' => __("label.user_manual"), 'header' => $module_group->name])

@include('includes.datatable_assets')
@include('includes.sweetalert_assets')

@push('after-styles')

@endpush

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{route('cms.user_manual.module_groups.edit',$module_group->id)}}" class="pull-right"><i class="fa fa-pencil-alt"></i> </a>
                    {{$module_group->delete_button}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label >{{ trans('label.name')}}:</label>
                                <label class="custom_label">{{ $module_group->name }}</label>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label>{{ trans('label.description')}}:</label>
                                <label class="custom_label">{!! $module_group->description !!}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-body">
                <div class="row">

                    <div class="col-md-12">
                        <a href="{{route('cms.user_manual.module.create',$module_group->id)}}" type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary pull-right">{{trans('label.cms.user_manual.new_module')}}</a>

                        <table class="table table-hover table-responsive-md" id="module-table">
                            <thead>
                            <tr>
                                <th>@lang('label.sn')</th>
                                <th>{{ __('label.name') }}</th>
                                <th>{{ __('label.status') }}</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
@push('after-scripts')
    <script type="text/javascript">
        var url = "{{ url("/") }}";
        $('#module-table').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url : '{{ route('cms.user_manual.get_module_by_group',$module_group->id) }}',
                type : 'get'
            },
            columns: [
                { data: 'DT_Row_Index', name: 'DT_Row_Index', orderable: false, searchable: false},
                { data: 'name', name: 'name', orderable: false, searchable: true },
                { data: 'status', name: 'status', orderable: false, searchable: true },
            ],
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).click(function() {
                    document.location.href = url + "/cms/user_manual/module_profile/" + aData['id'] ;
                }).hover(function() {
                    $(this).css('cursor','pointer');
                }, function() {
                    $(this).css('cursor','auto');
                });
            }
        });
    </script>
@endpush
