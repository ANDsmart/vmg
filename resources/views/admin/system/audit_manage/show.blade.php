@extends('layouts.main', ['title' => trans('label.administrator.system.audits.audit'), 'header' => __('label.administrator.system.audits.audit')])


@include('includes.datatable_assets')


@push('after-styles')


@endpush


@section('content')

    <section class="card card-featured card-featured-primary mb-4">
        <div class = "row">
            <div class="col-md-12">
                <br/>
                {{--<div class="form-group pull-right">--}}
                    {{--<div class="btn-group">--}}
                        {{--<a href="{{ route('system.job.delete', $job->id) }}"   class="btn btn-xs  btn-danger">{{ __('label.crud.delete') }}</a>--}}
                        {{--{{  HTML::decode(link_to_route('system.job.delete', trans('label.crud.delete'), [$job->id], ['data-method' => 'delete', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('label.warning'), 'data-trans-text' => trans('alert.general.alert.delete'), 'class' => 'btn btn-danger btn-xs'])) }}--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-md-6">
                    {{--General info--}}
                    <table class="table table-striped table-bordered" id="general_info">
                        <tbody>
                        <tr style="background-color: lightgray">
                            <th width="130px">{{ __('label.field') }}</th>
                            <th>{{ __('label.value') }} </th>
                        </tr>


                        <tr>
                            <td>{{ __('label.user') }}</td>
                            <td>{{ isset($audit->user->fullname) ? $audit->user->fullname : '' }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.event') }}</td>
                            <td>{{ $audit->event }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.administrator.system.audits.auditable_type') }}:</td>
                            <td>{{ $audit->auditable_type }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.administrator.system.audits.auditable') }}:</td>
                            <td>{{ isset($audit->auditable->auditable_name) ? $audit->auditable->auditable_name  .  ' - (' . $audit->auditable_id . ')' : $audit->auditable_id  }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.url') }}</td>
                            <td>{{ $audit->url }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.user_agent') }}</td>
                            <td>{{ $audit->user_agent }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.tags') }}</td>
                            <td>{{ $audit->tags }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.ip_address') }}</td>
                            <td>{{ $audit->ip_address }} </td>
                        </tr>

                        <tr>
                            <td>{{ __('label.created_at') }}</td>
                            <td>{{ $audit->created_at }} </td>
                        </tr>

                        <tr class="values">
                            <td>{{ __('label.old_values') }}</td>
                            <td>{{ json_encode($audit->old_values) }} </td>
                        </tr>

                        <tr class="values">
                            <td>{{ __('label.new_values') }}</td>
                            <td>{{ json_encode($audit->new_values) }} </td>
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

        $(document).ready(function() {
            $('.values').expander({
                slicePoint: 300,
                widow: 2,
                expandEffect: 'show',
                userCollapseText: 'Read Less',
                expandText: 'Read More'
            });
        });


    </script>


@endpush
