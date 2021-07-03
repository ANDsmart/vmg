{{--pending workflows count summary --}}
<div class="row">
    <div class="col-md-12">
        @foreach(array_chunk($group_counts, 4) as $group_count)
            <br/>
            <div class="row">
                @foreach($group_count as $value)
                    <div class="col-sm-4 mb-3">
                        <a class="module_summary" id="{{ $value['id'] }}"  href="{{ url("/") . "/" . request()->route()->uri() }}?wf_module_id={{ $value['id'] }}"   @if(!empty
                        ($value['description']))
                        data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="{{ $value['description'] }}"
                                @endif >
                            <section class="card card-featured-left card-featured-dark">
                                <div class="card-body">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col">
                                            <h4> {{ $value['name'] }}&nbsp;<span class="badge badge-pill badge-dark" style="font-size: 18px">{{ $value['count'] }}</span></h4>
                                            {{--<span style="color: #7f8c8d">&rdsh;&nbsp;{{ $value['group'] }}</span>--}}
                                        </div>
                                    </div>


                                    {{--Application categories--}}
                                    {{--@include('system/workflow/application_categories')--}}


                                </div>


                            </section>







                        </a>




                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>

<br/>

