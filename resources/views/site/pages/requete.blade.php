@include("site.parties.entete")
<style>.fade-out {
    opacity: 0; /* Rendre invisible */
    transition: opacity 0.3s ease; /* Animation fluide */
  }

  .fade-in {
    opacity: 1; /* Rendre visible */
    transition: opacity 0.3s ease; /* Animation fluide */
  }

</style>

<div class="bg-overlay-black-60 parallax" style="background-image: url(../assets/site/images/bg/bg.jpg);">
    <section class="section-transparent page-section-pb">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <div class="col-lg-6 col-md-8">
                    <div class="mt-10 mb-10 text-center logo">
                        <a href="{{ route('home') }}"><img class="logo-small" style="height: 120px; width: 120px;"id="logo_img" src="{{asset('storage/'.$setting->site_logo)}}" alt="logo">
                        </a>
                    </div>
                    <div class="clearfix login-bg">
                        <div class="login-title">
                            <h2 class="mb-0 text-white">Laissez-nous votre requête de prière</h2>
                            <small class="text-white"> Jacques 5:16 <br>
                                Confessez vos fautes les uns aux autres, et priez les uns pour les autres,
                                 afin que vous soyez guéris. La prière fervente du juste a une grande efficacité
                            </small>
                        </div>
                        <form action="{{ route('storeRequete') }}" method="POST"  id="FormPaiment" data-parsley-validate>
                            <div class="login-form">
                                <div class="row" id="ifAnonymat">
                                    <div class="mb-20 section-field col-sm-12">
                                        <label class="mb-10" for="fullname">Nom complet* </label>
                                        <input required id="fullname" name="fullname" class="web form-control" type="text" placeholder="Votre nom au complet">
                                    </div>
                                    <div class="mb-20 section-field col-sm-6">
                                        <label class="mb-10" for="email">Email </label>
                                        <input  id="email" name="email" class="web form-control" type="email" placeholder="Email (optionel)">
                                    </div>
                                    <div class="mb-20 section-field col-sm-6">
                                        <label class="mb-10" for="phone">Téléphone* </label>
                                        <input  id="phone" name="phone" class="web form-control"
                                        type="text" placeholder="Téléphone (optionel)">
                                    </div>
                                    <div class="mb-20 section-field col-sm-12">
                                        <label class="mb-10" for="">Pays* </label>
                                          @include('site.parties.pays')
                                    </div>
                                </div>
                                <div>
                                    <div class="section-field">
                                        <div class="remember-checkbox mb-30">
                                           <input type="checkbox" class="form-control" name="anonymat" id="two" />
                                           <label class="mb-2" for="two">Envoyer dans l'anonymat</label>
                                           {{-- <a href="password-recovery.html" class="float-end">Forgot Password?</a> --}}
                                          </div>
                                        </div>
                                </div>
                                <div class="mb-20 section-field col-sm-12">
                                    <label class="mb-10" for="requete">Votre requete* </label>
                                    <textarea required id="requete" name="requete" class="web form-control" type="text"></textarea>
                                </div>

                                <button type="submit" class="button">
                                    <span>Envoyer</span>
                                    <i class="fa fa-check"></i>
                                </button>
                                <p class="mt-20 mb-0"> <a href="{{ route('home') }}">Retourner à l'accueil</a>
                                </p>
                            </div>
                        </form>
                        <div class="clearfix text-center login-social medium color">
                            <h4 class="theme-color mb-30">Suivez-nous :</h4>
                            <ul>
                                <li {{ $settings['facebook']==null?'hidden':$settings['facebook'] }}>
                                    <a class="social-facebook" href="{{ $settings['facebook'] }}" target="blank"><i class="fa fa-facebook"></i></a></li>
                                <li {{ $settings['instagram']==null?'hidden':$settings['instagram'] }}>
                                    <a class="social-instagram" href="{{ $settings['instagram'] }}" target="blank"><i class="fa fa-instagram"></i></a></li>
                                <li {{ $settings['x_twitter']==null?'hidden':$settings['x_twitter'] }}>
                                    <a class="social-twitter" href="{{ $settings['x_twitter'] }}" target="blank"><i class="fa fa-x-twitter"></i> </a></li>
                                <li {{ $settings['youtube']==null?'hidden':$settings['youtube'] }}>
                                    <a class="social-youtube" href="{{ $settings['youtube'] }}" target="blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include("site.parties.pied")
<script>
   $(document).ready(function () {
        // alert('ok')
        const $checkbox = $("#two");
        const $fullname = $("#fullname");
        const $phone = $("#phone");
        const $pays = $("#country");
        const $divNom = $("#ifAnonymat");

        // Fonction pour activer ou désactiver les champs obligatoires et gérer la visibilité
        function toggleRequired() {
            if ($checkbox.is(":checked")) {
                $divNom.addClass("fade-out"); // Ajouter l'animation de disparition
                $fullname.removeAttr("required"); // Retirer l'obligation
                $phone.removeAttr("required");
                $pays.removeAttr("required");
                setTimeout(() => {
                $divNom.addClass("d-none").removeClass("fade-out"); // Masquer complètement après l'animation
            }, 300); // Durée de l'animation
                // $divNom.slideUp(300); // Cacher la section des informations
            } else {
                $divNom.removeClass("d-none").addClass("fade-in");
                $fullname.attr("required", true); // Ajouter l'obligation
                $phone.attr("required", true);
                $pays.attr("required", true);
                setTimeout(() => {
                $divNom.removeClass("fade-in"); // Supprimer la classe une fois l'animation terminée
            }, 300); // Durée de l'animation
                // $divNom.slideDown(300); // Afficher la section des informations
            }
        }
        initRadio();
        // Afficher la section correspondant au bouton radio sélectionné par défaut;
        $('input[name="toggleOption"]').on('change', function() {
                const selectedValue = $(this).val();
                // Cacher tous les champs
                $('#mobileMoneyField').addClass('d-none');
                $('#mobileMoneyField').addClass('d-none');

                // Afficher le champ correspondant
                if (selectedValue === 'mobile') {
                    $('#mobileMoneyField').removeClass('d-none');
                    $('#mobileMoneyField').slideDown(300);
                } else if (selectedValue === 'carte') {
                    // $('#cardField').removeClass('d-none');
                }
            });
        function initRadio(){
         // Sélectionne tous les boutons radio du formulaire et les désélectionne
         const radios = document.querySelectorAll('input[type="radio"]');
            radios.forEach(radio => {
                radio.checked = false;
            });

    }


        // Vérifier l'état au chargement de la page
        toggleRequired();

        // Ajouter un événement pour détecter les changements
        $checkbox.on("change", toggleRequired);


        $(document).on("submit", "#FormPaiment", function (e) {
            e.preventDefault();
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                swal({
                    title: 'Merci de patienter...',
                    icon: 'info'
                });

            $.ajax({
                url: '../storeRequete',
                type: "POST",
                data: new FormData(this),
                processData: false, // Empêche jQuery de traiter les données
                contentType: false, // Empêche jQuery de définir un type de contenu incorrect
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                            },
                success: function (data) {
                    if (!data.reponse) {
                        swal({
                            title: data.msg,
                            icon: 'error'
                        });
                    } else {
                        swal({
                            title: data.msg,
                            icon: 'success'
                        });
                        $("#FormPaiment")[0].reset();

                    }
                },
                error: function (xhr, status, error) {
                    // Gérer les erreurs
                    console.error("Erreur lors de la requête :", error);
                    swal({
                        title: 'Une erreur est survenue',
                        icon: 'error'
                    });
                }
            });

    });
});

</script>

