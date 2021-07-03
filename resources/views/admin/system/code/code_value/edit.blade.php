@extends('cms.layouts.cms', ['title' => trans('label.administrator.system.code_values.crud.edit'), 'header' => trans('label.administrator.system.code_values.crud.edit')])

@include('includes.validate_assets')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="card card-featured card-featured-primary mb-4">
                <header class="card-header">
                    <h2 class="card-title">{{ code_value()->name($code_value->id) }}</h2>

                    {{--Deactivate button--}}
                        <div class="float-right">
                            @if($code_value->isactive == 1)
                            <a href="{{ route('code.value.deactivate', $code_value->id) }}"  class="btn btn-danger btn-xs" ><i class="icon fa fa-plus-circle"></i>&nbsp;@lang('buttons.general.deactivate')</a>
                                @else
                                <a href="{{ route('code.value.activate', $code_value->id) }}"  class="btn btn-success btn-xs" ><i class="icon fa fa-plus-circle"></i>&nbsp;@lang('buttons.general.activate')</a>
                                @endif
                        </div>


                </header>
                <div class="card-body">
                    {{ Form::model($code_value,['route' => ['code.value.update',$code_value->id], 'autocomplete' => 'off', 'method' => 'put', 'class' => 'needs-validation', 'novalidate']) }}
                    <p>{{ getLanguageBlock('lang.auth.mandatory-field') }}</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                {{ Form::label('code_name', trans('label.name'), ['class' => 'required_asterik']) }}
                                {{ Form::text('code_name', $code_value->name, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'code_name', 'aria-describedby' => 'code_nameHelp', 'required']) }}
                                <small id="code_nameHelp" class="form-text text-muted"></small>
    {!! $errors->first('code_name', '<span class="badge badge-danger">:message</span>') !!}
</div>
<div class="col-md-6">
    {{ Form::label('code_name_sw', trans('label.name').' ('.trans('label.sw').')', ['class' => 'required_asterik']) }}
    {{ Form::text('code_name_sw', $code_value->lang, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'code_name_sw', 'aria-describedby' => 'code_name_swHelp', 'required']) }}
    <small id="code_name_swHelp" class="form-text text-muted"></small>
    {!! $errors->first('code_name_sw', '<span class="badge badge-danger">:message</span>') !!}
</div>
</div>
<div class="row">
<div class="col-md-6">
    {{ Form::label('status', trans('label.status'), ['class' => 'required_asterik']) }}
    {{ Form::select('status', ['yes'=>trans('label.active'), 'no'=>trans('label.inactive')], ($code_value->isactive == 1)?'yes':'no', ['class' => 'form-control', 'placeholder' => '', 'autocomplete' => 'off', 'id' => 'status', 'aria-describedby' => 'statusHelp', 'required']) }}
    <small id="statusHelp" class="form-text text-muted"></small>
    {!! $errors->first('status', '<span class="badge badge-danger">:message</span>') !!}
 </div>
 </div>
 </div>
 <div class="form-group">
 {{ Form::label('description', trans('label.description')) }}
 {{ Form::textarea('description', $code_value->description, ['class' => 'form-control', 'rows' => '4', 'autocomplete' => 'off', 'id' => 'editor', 'aria-describedby' => 'contentHelp']) }}
     {!! $errors->first('description', '<span class="badge badge-danger">:message</span>') !!}
    </div>
    <div class="form-group text-center">
    {{ link_to_route('code.values',trans('buttons.general.cancel'),[$code_value->code_id],['id'=> 'cancel', 'class' => 'btn btn-primary cancel_button', ]) }}
    {{ Form::button(trans('buttons.general.submit'), ['class' => 'btn btn-primary','id' => 'submit_btn', 'type'=>'submit']) }}
    </div>
    {{ Form::close() }}
    </div>
    </section>
    </div>
    </div>

    @endsection
