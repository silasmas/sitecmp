<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.parties.entete')

<body>
    <!-- .app -->
    <div class="app">
        <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
        @include('admin.parties.menu')
        <!-- .app-main -->
        <main class="app-main">

            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .page -->
                <div class="page">
                    <!-- .page-inner -->
                    <div class="page-inner">
                        @yield("content")
                    </div><!-- /.page-inner -->
                </div><!-- /.page -->
            </div>
        </main>
        <!-- /.app-main -->
    </div>
    <!-- /.app -->
    @include('admin.parties.pied')
</body>

</html>