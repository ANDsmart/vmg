<div class="row">
    <div class="col-md-12 col-sm-12">
        <table class="display" id = "audits-table" cellspacing="0" width="100%">
            <thead>
            <tr >

                <th>@lang('label.sn')</th>
                <th>@lang('label.user')</th>
                <th>@lang('label.event')</th>
                <th>@lang('label.administrator.system.audits.auditable')</th>
                <th>@lang('label.old_values')</th>
                <th>@lang('label.new_values')</th>
                <th>@lang('label.created_at')</th>
            </tr>
            </thead>
        </table>
    </div>
</div>


@push('after-scripts')

    <script>
        $(function(){
            var url = "{{ url("/") }}";

            let $oTable = $('#audits-table').DataTable({
                //dom : 'Bfrtip',
                buttons : ['reload', 'colvis'],
                initComplete : function () {
                    $oTable.buttons().container()
                        .insertBefore('#audits-table');
                },
                processing: true,
                serverSide: true,
                info : true,
                ajax: {
                    url: "{{ route("system.audit.get_for_datatable") }}",
                    data: function (d) {
                        d.auditable_type = $('select[name=auditable_type]').val();
                        d.event = $('select[name=event]').val();
                        // d.auditable_id = $('select[name=operator]').val();
                    }
                },
                // columnDefs: [
                //     {
                //         'targets': 0,
                //         'checkboxes': {
                //             'selectRow': true
                //         }
                //     }
                // ],
                // select: {
                //     'style': 'multi'
                // },
                columns: [

                    { data: 'DT_Row_Index', name: 'DT_Row_Index', orderable: false, searchable: false},
                    {data: 'user', name: 'user', orderable: false, searchable: false},
                    {data: 'event', name: 'event', orderable: true, searchable: true},
                    {data: 'auditable', name: 'auditable',  orderable: true, searchable: true},
                    {data: 'old_values', name: 'old_values', orderable: true, searchable: true},
                    {data: 'new_values', name: 'new_values', searchable: false},
                    {data: 'created_at', name: 'created_at', searchable: false, orderable: false},
                ],

                "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                    $(nRow).click(function() {
                        document.location.href = url +  "/admin/audit/show/" + aData['id'] ;
                    }).hover(function() {
                        $(this).css('cursor','pointer');
                    }, function() {
                        $(this).css('cursor','auto');
                    });
                }

            });

            $('#search-form').on('submit', function(e) {
                /*alert($wf_module_group_id);*/
                $oTable.draw();
                e.preventDefault();

            });



        });
    </script>

@endpush