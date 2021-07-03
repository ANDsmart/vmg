@extends('layouts.main', ['title' => trans('label.administrator.system.jobs.job'), 'header' => __('label.administrator.system.jobs.job')])


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
                        {!!  HTML::decode(link_to_route('system.job.delete', trans('label.crud.delete'), [$job->id], ['data-method' => 'delete', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('label.warning'), 'data-trans-text' => trans('alert.general.alert.delete'), 'class' => 'btn btn-danger btn-xs']))  !!}
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
                            <td>{{ __('label.queue') }}</td>
                            <td>{{ $job->queue }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.payload') }}:</td>
                            <td>{{ $job->payload }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.attempts') }}:</td>
                            <td>{{ $job->attempts }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.reserved_at') }}</td>
                            <td>{{ convert_int_to_datetime($job->reserved_at) }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.available_at') }}</td>
                            <td>{{ convert_int_to_datetime($job->available_at) }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.created_at') }}</td>
                            <td>{{ convert_int_to_datetime($job->created_at) }} </td>
                        </tr>

                        </tbody>
                    </table>


                </div>
            </div>
        </div>

    </section>

@endsection

@push('after-scripts')

    <script  type="text/javascript">



    </script>


@endpush
