
</div>
@include("site.parties.modale")


<!-- wrapper End -->
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
<div class="revel-block"></div>
<script src="{{ asset('assets/site/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/site/js/plugins-jquery.js') }}"></script>
<script src="{{ asset('assets/site/js/ellipsis/jquery.ellipsis.min.js') }}"></script>
<script>
    var plugin_path = '../assets/site/js/';
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
<script src="{{ asset('assets/site/js/biliap.cores.js') }}"></script>

<script src="{{ asset('assets/site/js/parsley/js/parsley.js') }}"></script>
<script src="{{ asset('assets/site/js/parsley/i18n/fr.js') }}"></script>
<script src="{{ asset('assets/site/js/sweetalert/sweetalert.min.js') }}"></script>

@yield("script")
{{-- @livewireScripts --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var myModal = new bootstrap.Modal(document.querySelector(".bd-example-modal-lg"));
        myModal.show();
    });
    document.getElementById("download-btn").addEventListener("click", function () {
        window.location.href = "{{ route('download.pdf') }}";
    });
</script>
<script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            swal({
                title: 'Text',
                text:"Lien copié dans le presse-papiers",
                icon: 'info'
                    })
        });
    }
     /* MULTILINE TEXT TRUNCATION */
     $('.paragraph-ellipsis').each(function () {
        $(this).find('.paragraph').ellipsis({
            lines: 3,             // force ellipsis after a certain number of lines. Default is 'auto'
            ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
            responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
        });

        var _this = $(this).find('.paragraph').get(0);

        $(this).find('.roll-block a').on('click', function () {
            $(_this).ellipsis({ellipClass: '_ellip'});
            $(this).html('');

            return false;
        });

        $(this).find('.paragraph2').ellipsis({
            lines: 2,             // force ellipsis after a certain number of lines. Default is 'auto'
            ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
            responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
        });

        var _this2 = $(this).find('.paragraph2').get(0);

        $(this).find('.roll-block a').on('click', function () {
            $(_this2).ellipsis({ellipClass: '_ellip'});
            $(this).html('');

            return false;
        });

        $(this).find('.paragraph3').ellipsis({
            lines: 5,             // force ellipsis after a certain number of lines. Default is 'auto'
            ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
            responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
        });

        var _this3 = $(this).find('.paragraph3').get(0);

        $(this).find('.roll-block a').on('click', function () {
            $(_this3).ellipsis({ellipClass: '_ellip'});
            $(this).html('');

            return false;
        });
    });
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

      $(document).ready(function() {
        $('#search').on('keyup', function() {
            let query = $(this).val();

            // Si le champ est vide, nettoyer les résultats
            if (!query) {
                $('#articles-results').html('');
                return;
            }

            // Envoyer une requête AJAX pour rechercher les articles
            $.ajax({
                url: '{{ route("search.articles") }}',
                type: 'GET',
                data: { query: query },
                success: function(response) {
                    let results = '';

                    if (response.length > 0) {
                        results += '<ul>';
                        response.forEach(function(article) {
                            results += `
                                <li>
                                    <h4>${article.title}</h4>
                                    <p>${article.body.substring(0, 100)}...</p>
                                    <a href="/articles/${article.id}" class="btn btn-primary">Voir plus</a>
                                </li>
                            `;
                        });
                        results += '</ul>';
                    } else {
                        results = '<p>Aucun article trouvé.</p>';
                    }

                    $('#articles-results').html(results);
                },
                error: function() {
                    $('#articles-results').html('<p>Une erreur est survenue. Veuillez réessayer.</p>');
                }
            });
        });
    });
</script>

</body>

</html>
