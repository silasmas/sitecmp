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

<div class="bg-overlay-black-60 parallax" style="background-image: url(../assets/images/bg/17.jpg);">
    <section class="section-transparent page-section-pb">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <div class="col-lg-6 col-md-8">
                    <div class="logo text-center mb-30 mt-30">
                        <a href="{{ route('home') }}"><img class="logo-small" style="height: 150px; width: 150px;"id="logo_img" src="{{asset('storage/'.$setting->site_logo)}}" alt="logo">
                        </a>
                    </div>
                    <div class="login-bg clearfix">
                        <div class="login-title">
                            <h2 class="text-white mb-0">Offrez au Seigneur</h2>
                            <small class="text-white"> 2 Corinthiens 9:7 <br> Que chacun donne comme il l'a décidé dans son cœur, sans regret ni contrainte ; car Dieu aime celui qui donne avec joie.</small>
                        </div>
                        <div class="login-form">
                            <div class="row" id="ifAnonymat">
                                <div class="section-field mb-20 col-sm-6">
                                    <label class="mb-10" for="fullname">Nom complet* </label>
                                    <input id="fullname" name="fullname" class="web form-control" type="text" placeholder="Votre nom au complet">
                                </div>
                                <div class="section-field mb-20 col-sm-6">
                                    <label class="mb-10" for="phoneNumber">Téléphone* </label>
                                    <input id="phoneNumber" class="web form-control" type="text" placeholder="Numéro de téléphone">
                                </div>
                                <div class="section-field mb-20 col-sm-12">
                                    <label class="mb-10" for="phoneNumber">Pays* </label>
                                      @include('site.parties.pays')
                                </div>
                            </div>
                            <div>
                                <div class="section-field">
                                    <div class="remember-checkbox mb-30">
                                       <input type="checkbox" class="form-control" name="anonymat" id="two" />
                                       <label class="mb-2" for="two">Donner dans l'anonymat</label>
                                       {{-- <a href="password-recovery.html" class="float-end">Forgot Password?</a> --}}
                                      </div>
                                    </div>
                            </div>
                            <div class="mb-20 section-field">
                                <label class="mb-10" for="">Selectionnez un type d'offrande* </label>
                                <div class="mb-4 box">
                                    <select class="wide fancyselect mb-5" name="contrevention_id">
                                        <option data-display="Type d'offrande">Type d'offrande</option>
                                        @forelse ($offrandes as $of)
                                        <option value="{{ $of->id}}">{{$of->nom}}</option>
                                        @empty

                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="section-field mb-20 col-sm-8">
                                    <label class="mb-10" for="montant">Montant* </label>
                                    <input id="montant" name="montant" class="web form-control" type="number" placeholder="Ecrivez un montant en entier">
                                </div>
                                <div class="section-field mb-20 col-sm-4">
                                    <label class="mb-10" for="fullname">Monnaie*</label>
                                    <select class="wide fancyselect mb-5" id="monaie" name="monaie">
                                        <option data-display="La monaie">La monnaie</option>
                                        <option value="CDF">Franc congolais</option>
                                        <option value="USD">Dollard</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 box">
                                <label>
                                    <input type="radio" name="toggleOption" value="mobile"> Mobile Money
                                </label>
                                <label>
                                    <input type="radio" name="toggleOption" value="carte"> Carte bancaire
                                </label>

                            </div>
                            <div class="mb-20 section-field d-none" id="mobileMoneyField">
                                <label class="mb-10" for="numero">Numéro de téléphone :</label>
                                <input id="toggleField" class="web form-control" type="text"
                                    placeholder="Ex :24382700000" name="number">
                            </div>
                            <a href="#" class="button">
                                <span>Signup</span>
                                <i class="fa fa-check"></i>
                            </a>
                            <p class="mt-20 mb-0"> <a href="{{ route('home') }}">Retourner à l'accueil</a>
                            </p>
                        </div>
                        <div class="login-social text-center  medium color clearfix">
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
        const $phone = $("#phoneNumber");
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

        function check(reference){
        // Démarrer un intervalle pour vérifier l'état de la transaction
        const transactionReference = reference; // Remplacez par la vraie référence
        let attempts = 0; // Compteur de tentatives
        const maxAttempts = 5; // Limite du nombre de tentatives

            // Fonction pour arrêter tout (intervalle et compteur de tentatives)
        const stopChecking = (message, icon = 'info',sms=0) => {
            clearInterval(interval); // Arrête l'intervalle
        attempts = maxAttempts; // Définit les tentatives au maximum pour indiquer la fin
        var message=sms==1?" Un Sms à été envoyé au proprietaire!!":'';
        Swal.fire({
            title: "Etat de la transaction.",
            text: message + message,
            icon: icon
        });
    };
        const interval = setInterval(() => {
            attempts++;
            console.log("quota : "+attempts)
            $.ajax({
                url: '/checkTransactionStatus', // Route qui vérifie le statut
                method: 'GET',
                data: { reference: transactionReference },
                success: function (response) {
                    console.log("retour : "+response.reponse)
                    console.log("retour sms : "+response.sms)
                    if (response.reponse==true) {
                        // Arrêter l'intervalle
                        clearInterval(interval);

                        // Afficher un message ou rediriger

                        stopChecking(response.message || "La transaction a été complétée avec succès.", 'success',response.sms);
                        $("#FormPaiment")[0].reset();
                                $("#formSearchRef")[0].reset();
                                $('#identite').text("");
                                $('#infraction').text("");
                                $('#mobileMoneyField, #cashField').addClass('d-none');
                                $('#interfacePaiement').addClass("d-none");
                                initRadio();
                        // Rechargez la page ou mettez à jour l'interface
                         location.reload();
                    }else if (!response.reponse && attempts >= maxAttempts) {
                    // Arrêter les vérifications après le nombre maximum de tentatives
                    clearInterval(interval);

                    Swal.fire({
                        title: "Etat de la transaction.",
                        text:response.message,
                        icon: 'error'
                    });
                }
                },
                error: function () {
                    console.error('Erreur lors de la vérification du statut.');
                    if (attempts >= maxAttempts) {
                     // Arrêter après des erreurs répétées et atteindre la limite
                     stopChecking("Impossible de vérifier le statut de la transaction. Veuillez réessayer.", 'error');
                }
                }
            });
        }, 5000); // Vérifier toutes les 5 secondes

    }
});

</script>

