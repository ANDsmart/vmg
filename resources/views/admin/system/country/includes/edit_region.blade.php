@extends('layouts.main', ['title' => trans('label.system.country.edit_region'), 'header' => trans('label.system.country.edit_region')])

@include('includes.validate_assets')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="card card-featured card-featured-primary mb-4">
                <header class="card-header">
                    {{--<h2 class="card-title">{{ $code->name }}</h2>--}}
                </header>
                <div class="card-body">
                    {{ Form::open(['route' => ['country.update_region',$region], 'autocomplete' => 'off','method'=> 'Post', 'id' => 'store', 'class' => 'needs-validation', 'novalidate', 'enctype'=>"multipart/form-data"]) }}
                    <p>{{ getLanguageBlock('lang.auth.mandatory-field') }}</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                {{ Form::label('region_name', trans('label.system.country.region_name'), ['class' => 'required_asterik']) }}
                                {{ Form::text('region_name', $region->name, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'code_name', 'aria-describedby' => 'code_nameHelp', 'required']) }}
                                <small id="code_nameHelp" class="form-text text-muted"></small>
    {!! $errors->first('country_name', '<span class="badge badge-danger">:message</span>') !!}
 </div>
 <div class="col-md-6">
     {{ Form::label('hasc', trans('label.hsc'), ['class' => 'required_asterik']) }}
     {{ Form::text('hasc', $region->hasc, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'code_name_sw', 'aria-describedby' => 'code_name_swHelp', 'required']) }}
     <small id="code_name_swHelp" class="form-text text-muted"> </small>
    {!! $errors->first('code_name_sw', '<span class="badge badge-danger">:message</span>') !!}
 </div>
</div>

</div>

<div class="form-group text-center">
{{ link_to_route('country.profile',trans('buttons.general.cancel'),[$country->code],['id'=> 'cancel', 'class' => 'btn btn-primary cancel_button', ]) }}
{{ Form::button(trans('buttons.general.submit'), ['class' => 'btn btn-primary','id' => 'submit_btn', 'type'=>'submit']) }}
</div>
{{ Form::close() }}
</div>
</section>
</div>
</div>

@endsection
