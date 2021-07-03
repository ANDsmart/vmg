@extends('layouts.main', ['title' => __('label.administrator.system.workflow.assign_workflow'), 'header' => __('label.administrator.system.workflow.assign_workflow')])


@push('after-styles')

    {{ Html::style(url("vendor/jstree/themes/default/style.css")) }}
    {{ Html::style(asset_url() . "/nextbyte/plugins/duallistbox/css/prettify.min.css") }}
    {{ Html::style(asset_url() . "/nextbyte/plugins/duallistbox/css/bootstrap-duallistbox.min.css") }}
    {{ Html::style(url("vendor/pnotify/pnotify.custom.css")) }}

    <style>

        .btn-secondary{
            background-color: grey !important;
            border-color: grey !important;
        }

        .btn-secondary:hover{
            background-color: #f96960 !important;
            border-color: #f96960 !important;
        }

    </style>

@endpush

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="card card-featured card-featured-primary mb-4">

                <div class="card-body">
                    {{--{{ Form::model($role,['route' => ['access.role.update', $role->id], 'method'=>'put','autocomplete' => 'off',--}}
                    {{--'id' => 'update','class' => 'form-horizontal  needs-validation', 'novalidate']) }}--}}
                    @if(isset($first_group_category->id))
                        @include('admin.system.workflow.assign_default.includes.wf_modules')
                    @endif
                    {{--{{ Form::close() }}--}}

                    <br/>

                    <legend style="background-color: lightgray; color: grey;"> {{ __('label.administrator.system.workflow.assign_users') }}</legend>
                    {{ Form::open(['id' => 'users_form', 'method' => 'get']) }}

                    {{ Form::select('users_select[]',$users, [], ['multiple' => 'multiple', 'size' => 10, 'class' => 'users_select']) }}

                    {{ Form::hidden('wf_definition_id', null, ['id' => 'wf_definition_id']) }}
                    <br>
                    <button type="submit" class="btn btn-success btn-block">@lang('buttons.general.save')</button>
                    {{ Form::close() }}
                    <br/>
                    <p>
                        {{ getLanguageBlock('lang/workflow/select-users-explanation') }}
                    </p>
                </div>



                {{--</div>--}}
            </section>
        </div>
    </div>

@endsection
@push('after-scripts')

    {{ Html::script(url("vendor/jstree/jstree.js")) }}
    {{--{{ Html::script(url("js/examples/examples.treeview.js")) }}--}}
    {{ Html::script(asset_url(). "/nextbyte/plugins/duallistbox/js/jquery.bootstrap-duallistbox.min.js") }}
    {{ Html::script(asset_url(). "/nextbyte/plugins/duallistbox/js/run_prettify.min.js") }}
    {{ Html::script(url("vendor/pnotify/pnotify.custom.js")) }}
    <script>
        var url = "{{ url("/") }}";
        $(function () {
            $('.text_content').on( 'change keyup keydown paste cut', 'textarea', function (){
                $(this).height(0).height(this.scrollHeight);
            }).find( 'textarea' ).change();


            $(".select2").select2();


            $('#treeBasic').jstree({
                'core' : {
                    'themes' : {
                        'responsive': false
                    }
                },
                'types' : {
                    'default' : {
                        'icon' : 'fas fa-boxes',
                    },
                    'wf_module' : {
                        'icon' : 'fas fa-code-branch'
                    },
                    'definition' : {
                        'icon' : 'fas fa-align-center'
                    }
                },
                'plugins': ['types']
            });

            /*On Load - Set module group to appear*/
            $(".wf_modules").hide();
            $(".wf_group_category" + '{{ isset($first_group_category->id) ? $first_group_category->id : null }}').show();



            /*DualListbox*/
            var users_select = $('select[name="users_select[]"]');
            var dualListBox = users_select.bootstrapDualListbox({
                nonSelectedListLabel: 'Non-selected Users',
                selectedListLabel: 'Selected Users',
                moveOnSelect: false,
                filterPlaceHolder: 'Search User',
                eventMoveAllOverride: true
            });



            /*On select node - Definition*/
            $('#treeBasic').on("select_node.jstree", function (e, data) {
                var $element_id = event.target.id;
                var node_type = $element_id.slice(0,13);
                if(node_type == 'wf_definition'){
                    var definition_id = $element_id.substring(13);
                    $("#wf_definition_id").val(definition_id);
                    $(".removeall").trigger("click");
                    if ($.isNumeric(definition_id)) {
                        $.get(url + "/workflow/get_users/" + definition_id, function (data) {
                            $.each(data, function (index, value) {
                                $('.users_select option[value=' + value + ']').prop('selected', true);
                            });
                        }).done(function () {
                            $(".move").trigger("click");
                        });
                    }
                }

            });


            $("#users_form").submit(function(event) {
                event.preventDefault();
                $(".btn-success").prop("disabled", true);

                var $form = $( this ),
                    users = users_select.val(),
                    definition = $form.find( "input[name='wf_definition_id']" ).val(),

                    posting = $.post( url + "/workflow/update_definition_users/" + definition, { users: users, _method : "GET" } );
                posting.done(function( data ) {
                    /* console.log(data); */
                    var stack_bottomleft = {"dir1": "right", "dir2": "up", "push": "top"};
                    new PNotify({
                        title: 'Notification',
                        text: 'Success, user(s) have been assigned to selected workflow level.',
                        type: 'success',
                        addclass: 'stack-bottomleft',
                        stack: stack_bottomleft
                    });
                    $(".btn-success").prop("disabled", false);
                });
            });


        });



    </script>



@endpush
