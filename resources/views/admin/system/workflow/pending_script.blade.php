
<script>
    $(function() {

        $(".wf-module-select").select2();
        $(".search-select").select2();
        var $wf_module_group_id = 0;

        @if ($state == "all" Or $state == "attended" Or $state == "full")
        $("#status").on("change", function () {
            var $status = $(this).val();
            switch($status) {
                case '3':
                    /* Selected to choose User Assigned */
                    $(".user_select").show();
                    break;
                default:
                    $(".user_select").hide();
                    break;
            }
            /*restore width select2*/
            jQuery('.select2-container').css('width','100%');
        });
        $('#status').trigger('change');
        @endif


        $('.wf-module-select').trigger('change');

        $('.module_summary').on('click', function(e) {
            var module_id = $(this).attr('id');
            $('#module').val(module_id).change();
        });



        let oTable = $('#pending-workflow-table').DataTable({
            //dom : 'Bfrtip',
            buttons : ['reload', 'colvis'],
            initComplete : function () {
                oTable.buttons().container()
                    .insertBefore('#pending-workflow-table');
            },
            processing: true,
            serverSide: true,
            info : true,
            ajax: {
                url: "{{ route("workflow.pending.get") }}",
                data: function (d) {
                                 d.wf_module_id = $('select[name=wf_module_id]').val();
                    d.wf_module_group_id = $wf_module_group_id;
                    d.state = '{{ $state }}';
                    d.search = $('input[name=search]').val();
                    d.operator = $('select[name=operator]').val();
                    @if ($state == "all" Or $state == "attended" Or $state == "full")
                        d.status = $('select[name=status]').val();
                    d.user_id = $('select[name=user_id]').val();

                    @endif
                }
            },
            columns: [
                {data: 'resource_name', name: 'resource_name', searchable: true, orderable: false},
                {data: 'receive_date_formatted', name: 'receive_date'},
                {data: 'level', name: 'level'},
                {data: 'description', name: 'wf_definitions.description'},
                {data: 'module', name: 'wf_modules.name'},
                {data: 'assign_status', name: 'assigned', searchable: false},
                {data: 'resource_id', name: 'resource_id', visible: false, searchable: false, orderable: false},
                {data: 'module_group_id', name: 'wf_module_groups.id', visible: false, searchable: false, orderable: false},
                {data: 'module_id', name: 'wf_modules.id', visible: false, searchable: false, orderable: false},
                // {data: 'status', name: 'status', searchable: false},
            ],
            'rowCallback': function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).click(function() {
                    switch(aData['module_group_id']) {
                        // case '1':
                        //     /* Example */
                        //        window.open(base_url + "/user/profile/" + aData['resource_uuid'] , "_self");
                        //     break;

                        default:
                            break;
                    }
                }).hover(function() {
                    $(this).css('cursor', 'alias');
                }, function() {
                    $(this).css('cursor', 'auto');
                });
            }
        });
        $('#search-form').on('submit', function(e) {
            /*alert($wf_module_group_id);*/
                    oTable.draw();
            e.preventDefault();
        });
    });
    function get_module_group($module) {
        return $.post("{{ url('/') }}/getModuleGroup", {'module': $module}, function ($data) {}, "json");
    }


    function reset_filter() {
        // $(".notification_select").hide();


    }
    function employer_filter() {
        // reset_filter();
        // $(".notification_select").hide();
        // $(".employer_select").show();

    }



</script>
