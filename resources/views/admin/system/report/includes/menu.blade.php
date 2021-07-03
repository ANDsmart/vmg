<div class="row">
    @foreach($report_groups as $report_group)
        <div class="col-md-4">
            <div class="list-group">
                <ul class="list-unstyled">
                    <a href="{{ route('admin.report.reports_by_group', $report_group->id) }}" class="list-group-item list-group-item-action">
                        <h5 class="list-group-item-heading"><i class="fas fa-clipboard"></i> {{ $report_group->name }}</h5>
                        {{--<p class="list-group-item-text">@lang('label.business.tender_label')</p>--}}
                    </a>
                </ul>
            </div>
        </div>
    @endforeach

</div>
