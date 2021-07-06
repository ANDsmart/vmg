@push('after-styles')
{{ Html::style(url('vendor/sweetalert/sweetalert.css')) }}
<style>

</style>

@endpush

@push('after-scripts')
{{ Html::script(url('vendor/sweetalert/sweetalert.min.js')) }}
{{ Html::script(url('assets/vmg/js/sweetalert.js')) }}
<script>

</script>
@endpush
