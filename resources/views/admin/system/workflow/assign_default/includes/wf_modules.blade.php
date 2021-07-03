
<div class = col-md-12>
    {{--<div class="form-group pull-right">--}}
    {{--<div class="btn-group">--}}
    {{--<button id="select_all" type="button" class="btn btn-xs btn-primary">{{ __('label.select_all') }}</button>--}}
    {{--<button id="deselect_all"  style="background-color: red; border-color: red; "   type="button" class="btn btn-xs  btn-primary">{{ __('label.deselect_all') }}</button>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="row" style="margin-top: -20px">
        <div class="col-md-6">
            <div class=" row input-group text_content">
                <h4 class='' >{{ __('label.administrator.system.workflow.group_category')}}:</h4>&nbsp;
                <h4 id="wf_group_category_title"   style="font-weight: bold;" ><b>  {{ $first_group_category->name }}</b></h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <ol  class="list-styled">
                @foreach($group_categories as $group_category)
                    <li >
                        <a style="font-weight: bold;" id="{{ 'wf_group_category'. $group_category->id }}" href="#" >{{ $group_category->name }}</a>
                        <p  hidden="true" id="{{ 'wf_group_category_name'. $group_category->id }}">{{ $group_category->name }}</p>
                        {{--<p id="{{ 'permission_groups'. $permission_group->id }}">This is some <b>bold</b> text in a paragraph.</p>--}}
                    </li>
                @endforeach
            </ol>

        </div>


        <div class="col-md-9">


            <div id="treeBasic" class="jstree jstree-1 jstree-default" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="j1_7" aria-busy="false">

                <ul class="jstree-container-ul jstree-children" role="group" >
                    @foreach($wf_module_groups as $wf_module_group)

                        <li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="{{ 'wf_group_category' . $wf_module_group->id }}" aria-expanded="true" id= "{{ 'wf_group_category' . $wf_module_group->id }}" class="jstree-node jstree-closed wf_modules {{ 'wf_group_category'. $wf_module_group->wf_group_category_id }}"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor jstree-clicked" href="#" tabindex="-1" id="{{ 'wf_group_category' . $wf_module_group->id }}"><i class="jstree-icon jstree-themeicon fas fa-folder jstree-themeicon-custom" role="presentation"></i>
                                {{ $wf_module_group->name }}
                            </a>
                            <ul role="group" class="jstree-children ">
                                {{--Wf module--}}
                                @foreach($wf_module_group->modules as $wf_module)
                                    {{--<div class="wf_modules {{ 'wf_group_category'. $wf_module->wfModuleGroup->wf_group_category_id  }}">--}}
                                    <li  role="treeitem" data-jstree="{ &quot;type&quot; : &quot;wf_module&quot; }" aria-selected="false" aria-level="2" aria-labelledby="{{ 'j1_3_anchor' . $wf_module->id }}" aria-expanded="true" id="{{ 'j1_3' . $wf_module->id  . ' ' . 'wf_module' . $wf_module->id }}" class="jstree-node jstree-closed"><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id= "{{ 'j1_3_anchor' . $wf_module->id }}" ><i class="jstree-icon jstree-themeicon fas fa-folder jstree-themeicon-custom" role="presentation"></i>
                                            {{ $wf_module->name }}
                                        </a>
                                        <ul role="group" class="jstree-children" style="" id="wf_definitions" >
                                            {{--Definitions--}}
                                            @foreach($wf_module->definitions as $wf_definition)
                                                <li role="treeitem" aria-selected="false"  data-jstree="{ &quot;type&quot; : &quot;definition&quot; }" aria-level="1" aria-labelledby="{{ 'j1_10_anchor' . $wf_definition->id }}" id= "{{ 'wf_definition' . $wf_definition->id }}"  class="jstree-node folder jstree-leaf jstree-last "><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor wf_definitions" href="#" tabindex="-1" id= "{{ 'wf_definition' . $wf_definition->id }}"  ><i class="jstree-icon jstree-themeicon fas fa-folder jstree-themeicon-custom" role="presentation"></i>
                                                        {{ $wf_definition->level_description }}
                                                    </a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        {{--</div>--}}
                    @endforeach
                </ul>

            </div>


        </div>



    </div>

</div>





@push('after-scripts')

    {{ Html::script(url("vendor/jstree/jstree.js")) }}

    <script>

        $(function () {

            /*Class of the active permission group*/
            var $wf_group_category_class_global = '{{ 'wf_group_category' . $first_group_category->id }}' ;

            onLoadSetup();

            /*Start Triggers*/
            $("a").click(function(event) {
                $element_id = event.target.id;
                onWfGroupCategoryClick($element_id);
            });


            /*select all on click*/
            $("#select_all").click(function(event) {
                selectAll($wf_group_category_class_global);
            });

            /*deselect all on click*/
            $("#deselect_all").click(function(event) {
                deselectAll($wf_group_category_class_global);
            });

            /*end triggers*/




            /*Hide Permissions on page load*/
            function onLoadSetup()
            {
                $(".wf_modules").hide();
                $(".wf_group_category" + '{{ $first_group_category->id }}').show();

            }

            /*Show wf_modules when group category is clicked*/
            function onWfGroupCategoryClick($element_id)
            {
                var $group_id = null;
                $group_id = $element_id.substring(17);
                $(".wf_modules").hide();
                $(".wf_group_category" +  $group_id).show();
                $("#wf_group_category_title").text($('#wf_group_category_name'+ $group_id).text());

                $wf_group_category_class_global = "wf_group_category" + $group_id;
                // alert();
            }

            /*Select all permissions*/
            function selectAll($element_class_id)
            {
                $("." + $element_class_id). prop("checked", true);
            }

            /*Deselect all permissions*/
            function deselectAll($element_class_id)
            {
                $("." + $element_class_id). prop("checked", false);
            }
        });



    </script>

@endpush


