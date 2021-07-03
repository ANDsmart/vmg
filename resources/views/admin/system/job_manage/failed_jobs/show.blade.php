@extends('layouts.main', ['title' => trans('label.administrator.system.jobs.failed_job'), 'header' => __('label.administrator.system.jobs.failed_job')])


@include('includes.datatable_assets')
@include('includes.sweetalert_assets')

@push('after-styles')


@endpush


@section('content')

    <section class="card card-featured card-featured-primary mb-4">
        <div class = "row">
            <div class="col-md-12">
                <br/>
                <div class="form-group pull-right">
                    <div class="btn-group">
                        {{--<a href="{{ route('system.job.delete', $job->id) }}"   class="btn btn-xs  btn-danger">{{ __('label.crud.delete') }}</a>--}}
                        {!! HTML::decode(link_to_route('system.failed_job.delete', trans('label.crud.delete'), [$failed_job->id], ['data-method' => 'delete', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('label.warning'), 'data-trans-text' => trans('alert.general.alert.delete'), 'class' => 'btn btn-danger btn-xs'])) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {{--General info--}}
                    <table class="table table-striped table-bordered" id="general_info">
                        <tbody>
                        <tr style="background-color: lightgray">
                            <th width="130px">{{ __('label.field') }}</th>
                            <th>{{ __('label.value') }} </th>
                        </tr>

                        <tr>
                            <td>{{ __('label.connection') }}</td>
                            <td>{{ $failed_job->connection }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.queue') }}:</td>
                            <td>{{ $failed_job->queue }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.payload') }}:</td>
                            <td>{{ $failed_job->payload }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.exception') }}:</td>
                            <td id="exception_id">{{ $failed_job->exception }} </td>
                        </tr>


                        <tr>
                            <td>{{ __('label.failed_at') }}:</td>
                            <td>{{ ($failed_job->failed_at) }} </td>
                        </tr>



                        </tbody>
                    </table>


                </div>
            </div>
        </div>

    </section>

@endsection

@push('after-scripts')
    {{ Html::script(url('vendor/jquery-expander/jquery.expander.js')) }}
    <script  type="text/javascript">

        $(document).ready(function() {
            $('#exception_id').expander({
                slicePoint: 300,
                widow: 2,
                expandEffect: 'show',
                userCollapseText: 'Read Less',
                expandText: 'Read More'
            });
        });

    </script>


@endpush
