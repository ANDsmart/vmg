
<div class="row">
    <div class="col-md-8">

    </div>

    <div class="col-md-4">
        <a href="{{route('cms.career.create')}}" type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary pull-right">add career</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-responsive-md" id="blog-table">
            <thead>
            <tr>
{{--                <th>@lang('label.sn')</th>--}}
                <th>{{ __('label.title') }}</th>
                <th>{{ __('label.category') }}</th>
                <th>{{ __('label.status') }}</th>
            </tr>
            </thead>
        </table>
    </div>
</div>

@push('after-scripts')
    <script type="text/javascript">
        var url = "{{ url("/") }}";
        $('#blog-table').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url : '{{ route('cms.career.get.admin_data') }}',
                type : 'get'
            },
            columns: [
                // { data: 'DT_Row_Index', name: 'DT_Row_Index', orderable: false, searchable: false},
                { data: 'title', name: 'title', orderable: false, searchable: true },
                { data: 'service_type_cv_id', name: 'service_type_cv_id', orderable: false, searchable: false },
                { data: 'status', name: 'status', orderable: false, searchable: false },
            ],
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).click(function() {
                    document.location.href = url + "/cms/career/profile/" + aData['id'] ;
                }).hover(function() {
                    $(this).css('cursor','pointer');
                }, function() {
                    $(this).css('cursor','auto');
                });
            }
        });
    </script>
@endpush