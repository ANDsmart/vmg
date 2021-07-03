<div class="custom_filter">
    {{ Form::open(['role' => 'form', 'id' => 'search-form']) }}
    <div class="row">
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="module">@lang('label.administrator.system.workflow.module')&nbsp;:</label>
                    {{ Form::select('wf_module_id', $wf_modules,  request()->input('wf_module_id'), ['class' => 'form-control wf-module-select', 'placeholder' => '', 'data-group' => '', 'id' => 'module']) }}
                </div>

                {{-- start: Choose filter for statuses & users --}}
                @if ($state == "all" Or $state == "attended" Or $state == "full")
                    <div class="form-group col-md-3 status_select">
                        <label for="status">{{ __('label.status') }}:</label>
                        {{ Form::select('status', $statuses,  request()->input('status'), ['class' => 'form-control search-select', 'id' => 'status', 'placeholder' => '']) }}
                    </div>

                    <div class="form-group col-md-3 user_select">
                        <label for="user">{{ __('label.user') }}:</label>
                        {{ Form::select('user_id', $users,  request()->input('user_id'), ['class' => 'form-control search-select', 'id' => 'user',  'placeholder' => '', 'width' => '100%']) }}
                    </div>
                @endif
                {{-- end: Choose filter for statuses & users --}}

            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="submit" class="btn btn-success btn-sm btn-submit submit" value="@lang('buttons.general.search')" />
                </div>
            </div>
        </div>
    </div>

    {{ Form::close() }}
</div>