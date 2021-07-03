<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-responsive-md" id="jobs-table">
                <thead>
                <tr>
                    <th>@lang('label.sn')</th>
                    <th>@lang('label.queue')</th>
                    <th>@lang('label.payload')</th>
                    <th>@lang('label.attempts')</th>
                    <th>@lang('label.reserved_at')</th>
                    <th>@lang('label.available_at')</th>
                    <th>@lang('label.created_at')</th>
                </tr>
                </thead>
            </table>

        </div>
    </div>
</div>



@push('after-scripts')
    {{ Html::script(url('vendor/sweetalert/sweetalert.min.js')) }}

    <script  type="text/javascript">
        var url = "{{ url("/") }}";
        $('#jobs-table').DataTable({
            processing: true,
            serverSide: true,
            // 'select': 'multi',
            // 'order': [[1, 'asc']],

            stateSaveCallback: function (settings, data) {
                localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data));
            },
            stateLoadCallback: function (settings) {
                return JSON.parse(localStorage.getItem('DataTables_' + settings.sInstance));
            },
            ajax:{
                url : '{{ route('system.job.get_for_datatable') }}',
                type : 'get'
            },
            columns: [
                { data: 'DT_Row_Index', name: 'DT_Row_Index', orderable: false, searchable: false},
                { data: 'queue', name: 'queue',  orderable: true, searchable: true },
                { data: 'payload', name: 'payload',  orderable: true, searchable: true },
                { data: 'attempts', name: 'attempts',  orderable: true, searchable: true },
                { data: 'reserved_at', name: 'reserved_at',  orderable: true, searchable: true },
                { data: 'available_at', name: 'available_at', orderable: false, searchable: false },
                { data: 'created_at', name: 'created_at', orderable: false, searchable: false }
            ],

            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).click(function() {
                    document.location.href = url +  "/admin/job/show/" + aData['id'] ;
                }).hover(function() {
                    $(this).css('cursor','pointer');
                }, function() {
                    $(this).css('cursor','auto');
                });
            }

        });


    </script>

@endpush
