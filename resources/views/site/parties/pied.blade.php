
</div>
<!-- wrapper End -->
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
<div class="revel-block"></div>
<script src="{{ asset('assets/site/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/site/js/plugins-jquery.js') }}"></script>
<script>
    var plugin_path = 'assets/site/js/';
</script>
<script src="{{ asset('assets/site/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/site/revolution/js/revolution-custom.js') }}"></script>
<script src="{{ asset('assets/site/js/custom.js') }}"></script>

<script src="{{ asset('assets/site/js/contact.form.js') }}"></script>

<script src="{{ asset('assets/site/js/parsley/js/parsley.js') }}"></script>
<script src="{{ asset('assets/site/js/parsley/i18n/fr.js') }}"></script>
<script src="{{ asset('assets/site/js/sweetalert/sweetalert.min.js') }}"></script>
<script>
    $('.menu-toggle').click(function () {
        $('.menu-responsive').addClass('show')
        $('.revel-block').addClass('show')
      })
      $('.close-menu').click(function () {
        $('.menu-responsive').removeClass('show')
        $('.revel-block').removeClass('show')
      })
      $('.revel-block').click(function () {
        $(this).removeClass('show')
        $('.menu-responsive').removeClass('show')

      })
</script>
</body>

</html>
