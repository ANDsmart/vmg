<script>
    $(function(){
        var $wf_module_group_id = 0;

        let $oTable = $('#allocation-workflow-table').DataTable({
            //dom : 'Bfrtip',
            buttons : ['reload', 'colvis'],
            initComplete : function () {
                $oTable.buttons().container()
                    .insertBefore('#allocation-workflow-table');
            },
            processing: true,
            serverSide: true,
            info : true,
            ajax: {
                url: "{{ route("workflow.pending.get") }}",
                data: function (d) {
                                     d.wf_module_id = $('select[name=wf_module_id]').val();
                    d.wf_module_group_id = $wf_module_group_id;
                    d.operator = $('select[name=operator]').val();
                    d.incident = $('select[name=incident]').val();
                    d.search = $('input[name=search]').val();
                    d.state = "{{ $state }}";
                    @if ($state == "all" Or $state == "attended" Or $state == "full")
                        d.status = $('select[name=status]').val();
                    d.user_id = $('select[name=user_id]').val();
                    @endif
                }
            },
            columnDefs: [
                {
                    'targets': 0,
                    'checkboxes': {
                        'selectRow': true
                    }
                }
            ],
            select: {
                'style': 'multi'
            },
            columns: [
                {
                    orderable: false,
                    searchable: false,
                    data: 'id',
                    name : 'wf_tracks.id'
                },
                {data: 'resource_name', name: 'resource_name', searchable: false, orderable: false},
                {data: 'receive_date_formatted', name: 'receive_date'},
                {data: 'level', name: 'level'},
                {data: 'module', name: 'wf_modules.name'},
                {data: 'assign_status', name: 'assigned', searchable: false},
                {data: 'user', name: 'firstname', searchable: false},
                {data: 'resource_id', name: 'resource_id', visible: false, searchable: false, orderable: false},
                {data: 'module_group_id', name: 'wf_module_groups.id', visible: false, searchable: false, orderable: false},
                {data: 'module_id', name: 'wf_modules.id', visible: false, searchable: false, orderable: false},
            ],
            'rowCallback': function ($nRow, $aData, iDisplayIndex, iDisplayIndexFull) {
                $('td:not(:first-child)', $nRow).click(function() {
                    switch($aData['module_group_id']) {
                        // case '1':
                        //     window.open(base_url + "/compliance/employer/profile/interest_write_off_approve/" + $aData['resource_id'], "_self");
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

            $oTable.draw();
            e.preventDefault();

        });

    @permission("workflow_allocation")
        $('#assign-user').on('submit', function($e) {
            $e.preventDefault();
            let $form = this;
            let $rowsSelected = $oTable.column(0).checkboxes.selected();
            //Remove all previous selected
            $($form).find("input[name='id[]']").remove();
            // Iterate over all selected checkboxes
            $.each($rowsSelected, function($index, $rowId) {
                // Create a hidden element
                $($form).append($('<input>').attr('type', 'hidden').attr('name', 'id[]').val($rowId));
            });
            swal({
                title: "Warning",
                text: "Are you sure to allocate selected files to the selected assigned user",
                type: "warning",
                showCancelButton: true,
                cancelButtonText: "Cancel",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Confirm",
                closeOnConfirm: true
            }, function ($confirmed) {
                if ($confirmed) {
                    //$form.submit();
                    //Do the ajax submission ...
                    //route : backend.claim.notification_report.allocation.assign
                    let $options = {
                        dataType : "json",
                        type : "PUT",
                        url : $($form).attr("action"),
                        success : function (data) {
                            if (data.success) {
                                $oTable.draw();
                                $oTable.column(0).checkboxes.deselectAll();
                                /*Alert*/
                                var stack_bottomleft = {"dir1": "right", "dir2": "up", "push": "top"};
                               new PNotify({
                                    title: 'Notification',
                                    text: 'Success, user has been assigned.',
                                    type: 'success',
                                    addclass: 'stack-bottomleft',
                                    stack: stack_bottomleft
                                });
                            } else {
                                // alert(data.message);
                                /*swal({ title : "Error Assigning User to Resource(s)", text : data.message});*/

                                new PNotify({
                                    title: 'Notification',
                                    text: data.message,
                                    type: 'error',
                                    shadow: true
                                });
                            }
                        },
                        error: function (data) {

                        }
                    };
                    // pass options to ajaxForm
                    $($form).ajaxSubmit($options);
                }
            });
        });
        @endauth

    });
</script>