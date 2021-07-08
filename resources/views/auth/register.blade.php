@extends('cms.layouts.cms', ['title' => __("label.home"), 'header' => __("label.registration")])

@section('content')

    {{ Form::open(['url' => 'register', 'autocomplete' => 'off', 'class' => 'needs-validation', 'novalidate']) }}

    <section class="card">
        <div class="card-body">
            <div class="row">

                {{--First col for Registration fields--}}
                <div class="col-md-6">

                    @include('auth.includes.registration_fields')


                    <br/>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="required_asterik">
                                {{ Form::checkbox('term_check',1, false, ['required']) }}
                                {{ __('label.user_registration.agree_terms', ['url' => '']) }}
                            </div>
                            {!! $errors->first('term_check', '<span class="badge badge-danger">:message</span>')!!}
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="element-form">
                                <div class="form-group pull-left">
                                    {{ Form::button(trans('label.register'), ['class' => 'btn btn-primary', 'type'=>'submit', 'style' => 'border-radius: 5px;']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--Second col for introduction words--}}
                <div class="col-md-6 " style="">
                    <div class="card" style="margin-top: 10px;margin-left: 10px;">
                        <div class="card-body" style="background-color: whitesmoke">
                            <h3 class="dark-grey" style="text-align: center"><b>@lang('label.user_registration.instruction_title')
                                </b></h3><hr>
                            <p>

                                @lang('label.user_registration.instruction_intro')
                            </p>

                            <ul>

                                <li>
                                    <strong>Content 1</strong>
                                </li>
                                <p>
                                    Contents
                                </p>



                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <br/>

    {{ Form::close() }}
@endsection

@push('after-script')
    <script>
        function refreshCaptcha(){
            $.ajax({
                url: "/refereshcapcha",
                type: 'get',
                dataType: 'html',
                success: function(json) {
                    $('.refereshrecapcha').html(json);
                },
                error: function(data) {
                    alert('Try Again.');
                }
            });
        }


    </script>
@endpush


