<!-- BEGIN BASE JS -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper.js/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script> <!-- END BASE JS -->
<!-- BEGIN PLUGINS JS -->
<script src="{{ asset('assets/vendor/pace-progress/pace.min.js') }}"></script>
<script src="{{ asset('assets/vendor/stacked-menu/js/stacked-menu.min.js') }}"></script>
<script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


<!-- END PLUGINS JS -->
<!-- BEGIN THEME JS -->
<script src="{{ asset('assets/javascript/theme.min.js') }}"></script> <!-- END THEME JS -->
<!-- BEGIN PAGE LEVEL JS -->
{{-- <script src="{{ asset('assets/javascript/pages/dashboard-demo.js') }}"></script> --}}
<!-- END PAGE LEVEL JS -->

@yield('autres-script')
