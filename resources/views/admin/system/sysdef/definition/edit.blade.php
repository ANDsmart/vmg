@extends('cms.layouts.cms', ['title' => trans('label.administrator.system.sysdef.crud.edit'), 'header' => trans('label.administrator.system.sysdef.crud.edit')])

@include('includes.validate_assets')
@push('after-styles')

    <style>

    </style>
@endpush
@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="card card-featured card-featured-primary mb-4">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                    </div>
                    <h2 class="card-title">{{ $sysdef->display_name }}</h2>
                </header>
                <div class="card-body">
                    {{ Form::model($sysdef,['route' => [$route , $param], 'autocomplete' => 'off', 'method' => 'put', 'class' => 'needs-validation', 'novalidate', 'enctype'=>'multipart/form-data']) }}
                    {{ Form::hidden('data_type', $sysdef->data_type, []) }}
                    <p>{{ getLanguageBlock('lang.auth.mandatory-field') }}</p>
                    {{ Form::label('sysdef_value', trans('label.value'), ['class' => 'required_asterik']) }}
                    <div class="form-group">
                        @switch($sysdef->data_type)
                            @case('integer')
                            {{ Form::number('sysdef_value', $sysdef->value, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'sysdef_value', 'aria-describedby' => 'sysdef_valueHelp', 'required']) }}
                            @break
                            @case('numeric')
                            {{ Form::number('sysdef_value', $sysdef->value, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'sysdef_value', 'aria-describedby' => 'sysdef_valueHelp', 'required']) }}
                            @break
                            @case('string')
                            {{ Form::text('sysdef_value', $sysdef->value, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'sysdef_value', 'aria-describedby' => 'sysdef_valueHelp', 'required']) }}
                            @break
                            @case('text')
                            {{ Form::textarea('sysdef_value', $sysdef->value, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'editor', 'aria-describedby' => 'sysdef_valueHelp', 'required']) }}
                            @break
                            @case('boolean')
                            {{ Form::select('sysdef_value', ['false' => 'false' , 'true' => 'true', ] , [], [ 'class' => 'form-control select2', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'country_id', 'required']) }}
                            @break
                        @endswitch
                    </div>
                    <small id="sysdef_valueHelp" class="form-text text-muted"></small>
                    {!! $errors->first('sysdef_value', '<span class="badge badge-danger">:message</span>') !!}
                    <div class="form-group">
                        {{ Form::button(trans('buttons.general.submit'), ['class' => 'btn btn-primary','id' => 'submit_btn', 'type'=>'submit']) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </section>
        </div>
    </div>

@endsection

@push('after-scripts')

    {{ Html::script(url('vendor/ckeditor5/ckeditor.js')) }}
    <script>
        $(function() {
            ClassicEditor.create( document.querySelector( '#editor' ) );

            $(".select2").select2();
        });
    </script>

@endpush
