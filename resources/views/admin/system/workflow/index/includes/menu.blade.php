<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <ul class="list-unstyled">
                <a href="{{ route('workflow.workflow_defaults') }}" class="list-group-item list-group-item-action">
                    <h5 class="list-group-item-heading"><i class="fas fa-list"></i> @lang('label.administrator.system.workflow.assign_workflow')</h5>
                    <p class="list-group-item-text">@lang('label.administrator.system.workflow.assign_workflow_descr')</p>
                </a>
            </ul>
        </div>
    </div>


    <div class="col-md-4">
        <div class="list-group">
            <ul class="list-unstyled">
                <a href="{{ route('workflow.allocation') }}" class="list-group-item list-group-item-action">
                    <h5 class="list-group-item-heading"><i class="fas fa-users"></i> @lang('label.administrator.system.workflow.workflow_allocation')</h5>
                    <p class="list-group-item-text">@lang('label.administrator.system.workflow.workflow_allocation_descr')</p>
                </a>
            </ul>
        </div>
    </div>

</div>