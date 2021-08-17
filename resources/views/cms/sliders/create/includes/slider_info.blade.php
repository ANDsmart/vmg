<div class="row">
    <div class="col-4">
        {!! Form::label('title', __("label.title"), ['class' => 'required_asterik']) !!}

        {!! Form::text('title',null , ['placeholder' => __('label.title')  ,'id'=>'video_link', 'class' => 'form-control','required']) !!}
        {!! $errors->first('title', '<span class="badge badge-danger">:message</span>') !!}

    </div>
    <div class="col-md-2">
        {!! Form::label('size','Size', ['class' => 'required_asterik']) !!}

        {!! Form::text('size',null , ['placeholder' => __('Size')  ,'id'=>'video_link', 'class' => 'form-control number','number']) !!}
        <span class="badge ">eg in pixes</span>

        {!! $errors->first('size', '<span class="badge badge-danger">:message</span>') !!}
    </div>
    <div class="col-md-3">
        {!! Form::label('color','Color', ['class' => 'required_asterik']) !!}

        {!! Form::text('color',null , ['placeholder' => __('Color')  ,'id'=>'video_link', 'class' => 'form-control','required']) !!}
        {!! $errors->first('color', '<span class="badge badge-danger">:message</span>') !!}
    </div>

    <div class="col-md-3">
        {!! Form::label('position', 'Position', ['class' => 'required_asterik']) !!}

        {!! Form::text('position',null , ['placeholder' => 'Position'  ,'id'=>'video_link', 'class' => 'form-control','required']) !!}
        <span class="badge ">eg left or right</span>

        {!! $errors->first('position', '<span class="badge badge-danger">:message</span>') !!}
    </div>
</div>





<div class="row form-group ">
    <div class="col-sm-12">
        <div class="row">

            <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    {{ Form::label('slider_image', __('label.slider_image'), ['class' =>'']) }}<br>
                    {{ Form::file('slider_image',[]) }}
                    <br>
                    {!!  $errors->first('slider_image', '<span class="badge badge-danger">:message</span>') !!}
                </div>
            </div>


        </div>
    </div>
</div>

<div class="row form-group ">
    <div class="col-sm-12">
        <div class="row">

            <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    {{ Form::label('isactive', __('label.isactive'), ['class' =>'required_asterik']) }}
                    {!! Form::select('isactive',['0' => 'No', '1' => 'Yes'],1,['class'=>'form-control select2', 'id' => 'isactive','required','placeholder' => '', 'autocomplete' => 'off']) !!}
                    {!!  $errors->first('isactive', '<span class="badge badge-danger">:message</span>')  !!}
                </div>
            </div>


        </div>
    </div>
</div>
<div class="row mt-2" >
    <div class="col-lg-6">
        {!! Form::label('description', __("label.content"), ['class' => 'required_asterik']) !!}

        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '10', 'autocomplete' => 'off', 'id' => 'editor', 'aria-describedby' => 'contentHelp', 'required']) !!}
        {!! $errors->first('description', '<span class="badge badge-danger">:message</span>') !!}
    </div>
    <div class="col-md-2">
        {!! Form::label('description_size','Size', ['class' => 'required_asterik']) !!}

        {!! Form::text('description_size',null , ['placeholder' => __('Size')  ,'id'=>'video_link', 'class' => 'form-control number','number']) !!}
        <span class="badge ">eg in pixes</span>

        {!! $errors->first('size', '<span class="badge badge-danger">:message</span>') !!}
    </div>
    <div class="col-md-3">
        {!! Form::label('description_color','Color', ['class' => 'required_asterik']) !!}

        {!! Form::text('description_color',null , ['placeholder' => __('Color')  ,'id'=>'video_link', 'class' => 'form-control','required']) !!}
        {!! $errors->first('color', '<span class="badge badge-danger">:message</span>') !!}
    </div>

</div>



