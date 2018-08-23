<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->

<!-- Laravel App -->
{{-- <script src="{{ asset('/js/apis.js') }}" type="text/javascript"></script> --}}
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/mask/dist/jquery.mask.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/mask/dist/jquery.mask.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/icheck/icheck.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/select2/js/select2.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/pace/pace.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/pace/pace.min.js') }}" type="text/javascript"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 {{--   NÃO USAR ESSA BIBLIOTECA AJAX !!! DAR PAU EM TUDO
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

