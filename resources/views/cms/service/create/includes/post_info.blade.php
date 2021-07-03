<div class="row">
    <div class="col-12">
        {!! Form::label('title', __("label.title"), ['class' => 'required_asterik']) !!}

        {!! Form::text('title',null , ['placeholder' => __('label.title')  ,'id'=>'title', 'class' => 'form-control','required']) !!}
        {!! $errors->first('title', '<span class="badge badge-danger">:message</span>') !!}

    </div>
</div>

<div class="row">
    <div class="col-12">
        {!! Form::label('service_type_cv_id', __("label.type"), ['class' => 'required_asterik']) !!}

        {!! Form::select('service_type_cv_id',$service_types,null , ['placeholder' => __('label.title')  ,'id'=>'title', 'class' => 'form-control','required']) !!}
        {!! $errors->first('service_type_cv_id', '<span class="badge badge-danger">:message</span>') !!}

    </div>
</div>

<div class="row mt-2" >
    <div class="col-lg-12">
        {!! Form::label('content', __("label.content"), ['class' => 'required_asterik']) !!}

        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '10', 'autocomplete' => 'off', 'id' => 'editor', 'aria-describedby' => 'contentHelp', 'required']) !!}
        {!! $errors->first('content', '<span class="badge badge-danger">:message</span>') !!}
    </div>
</div>


