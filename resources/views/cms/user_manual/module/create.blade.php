@extends('cms.layouts.cms', ['title' => trans('label.cms.user_manual.new_module'), 'header' => trans('label.cms.user_manual.new_module')])

@include('includes.validate_assets')

@section('content')

    <div class="row">
        <div class="col-md-12">

                <div class="card-body">
                    {{ Form::open(['route' => ['cms.user_manual.module.store'], 'autocomplete' => 'off','method'=> 'Post', 'id' => 'store', 'class' => 'needs-validation', 'novalidate', 'enctype'=>"multipart/form-data"]) }}
                    <p>{{ getLanguageBlock('lang.auth.mandatory-field') }}</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                {{ Form::label('name', trans('label.name'), ['class' => 'required_asterik']) }}
                                {{ Form::text('name', null, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'name', 'aria-describedby' => 'nameHelp', 'required']) }}
                                <small id="nameHelp" class="form-text text-muted"></small>
                                {!! $errors->first('name', '<span class="badge badge-danger">:message</span>') !!}
                            </div>
                     \
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {{ Form::label('isactive', __('label.isactive'), ['class' =>'']) }}
                                    {{ Form::select('isactive',['0' => 'No', '1' => 'Yes'],1,['class'=>'form-control select2', 'id' => 'isactive','placeholder' => '', 'autocomplete' => 'off']) }}
                                    {!! $errors->first('isactive', '<span class="badge badge-danger">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('description', trans('label.description')) }}
                                {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '4', 'autocomplete' => 'off', 'id' => 'editor', 'aria-describedby' => 'contentHelp']) }}
                                {!!  $errors->first('description', '<span class="badge badge-danger">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <input name="module_group_id" value="{{$module_group->id}}" hidden>
                        </div>
                    </div>

                    <hr class="dotted">
                    <div class="form-group mt-2">
                        {{ link_to_route('cms.user_manual.modules_by_group',trans('buttons.general.cancel'),[$module_group->id],['id'=> 'cancel', 'class' => 'btn btn-primary cancel_button', ]) }}
                        {!! Form::button(trans('buttons.general.submit'), ['class' => 'btn btn-primary','id' => 'submit_btn', 'type'=>'submit'] )!!}
                    </div>
                    {{ Form::close() }}
                </div>
        </div>
    </div>

@endsection

@push('after-scripts')
    {!! Html::script(url('cms/vendor/ckeditor5/ckeditor.js')) !!}

    <script>
        $(function() {
            ClassicEditor.create( document.querySelector( '#editor' ) );

            $(".select2").select2();
        });
    </script>
@endpush
