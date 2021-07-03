<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-responsive-md" id="failed-jobs-table">
                <thead>
                <tr>
                    <th>@lang('label.sn')</th>
                    <th>@lang('label.connection')</th>
                    <th>@lang('label.queue')</th>
                    <th>@lang('label.payload')</th>
                    <th>@lang('label.exception')</th>
                    <th>@lang('label.failed_at')</th>
                </tr>
                </thead>
            </table>

        </div>
    </div>
</div>



@push('after-scripts')


    <script  type="text/javascript">
        var url = "{{ url("/") }}";
        $('#failed-jobs-table').DataTable({
            processing: true,
            serverSide: true,
            // 'select': 'multi',
            // 'order': [[1, 'asc']],

            ajax:{
                url : '{{ route('system.failed_job.get_for_datatable') }}',
                type : 'get'
            },
            columns: [
                { data: 'DT_Row_Index', name: 'DT_Row_Index', orderable: false, searchable: false},
                { data: 'connection', name: 'connection',  orderable: true, searchable: true },
                { data: 'queue', name: 'queue',  orderable: true, searchable: true },
                { data: 'payload', name: 'payload',  orderable: true, searchable: true },
                { data: 'exception', name: 'exception',  orderable: true, searchable: true },
                { data: 'failed_at', name: 'failed_at',  orderable: true, searchable: true },
            ],

            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).click(function() {
                    document.location.href = url +  "/admin/failed_job/show/" + aData['id'] ;
                }).hover(function() {
                    $(this).css('cursor','pointer');
                }, function() {
                    $(this).css('cursor','auto');
                });
            }

        });


    </script>


@endpush
