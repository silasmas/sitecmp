@extends('site.layout.template')

@section("content")
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6"
    data-img-src="{{ asset('assets/site/images/bg/B21-2024-fbc.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Contact </h1>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="gray-bg height-100vh d-flex align-items-center page-section-ptb login">
    <div class="container">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-4 col-md-6 login-fancy-bg bg-overlay-black-30 parallax"
                style="background: url(images/signup/01.jpg);">
                <div class="login-fancy pos-r">
                    <h2 class="text-white mb-20">Offrande</h2>
                    <p class="mb-20 text-white">
                        2 Corinthiens 9:7 <br>
                        Que chacun donne comme il l’a résolu en son cœur, sans tristesse ni contrainte; car Dieu aime
                        celui qui donne avec joie.
                    </p>
                    <ul class="list-unstyled pos-bot pb-30">
                        <li class="list-inline-item"><a class="text-white" href="#"> Conditions d'utilisation</a> </li>
                        <li class="list-inline-item"><a class="text-white" href="#"> politique de confidentialité</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 white-bg">
                <div class="login-fancy pb-40 clearfix">
                    <h3 class="mb-30">Remplissez le formulaire</h3>
                    <div class="row">
                        <div class="section-field">
                            <div class="remember-checkbox mb-30">
                                <input type="checkbox" class="form-control" name="two" id="two" />
                                <label class="mb-2" for="two"> Donner de façon anonyme.</label>
                            </div>
                        </div>
                        <div id="divNom">
                            <div class="section-field mb-20">
                                <label class="mb-10" for="name">First name* </label>
                                <input id="nomcomplet" class="web form-control" type="text" placeholder="First name"
                                    name="web">
                            </div>
                        </div>
                        <div class="mb-20 section-field">
                            <label class="mb-10" for="">Choisir un type d'offrande* </label>
                            <div class="mb-4 box">
                                <select class="wide fancyselect mb-5" name="contrevention_id">
                                    @forelse ($offrandes as $inf)
                                    <option value="{{ $inf->id }}">{{$inf->nom}}</option>
                                    @empty

                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="section-field mb-20">
                            <label class="mb-10" for="name">Email* </label>
                            <input type="email" placeholder="Email*" class="form-control" name="email">
                        </div>
                        <div class="section-field mb-20">
                            <label class="mb-10" for="Password">Password* </label>
                            <input id="Password" class="Password form-control" type="password" placeholder="Password"
                                name="Password">
                        </div>
                        <a href="#" class="button" >
                            <span>Signup</span>
                            <i class="fa fa-check"></i>
                        </a>
                        <p class="mt-20 mb-0">Don't have an account? <a href="login-03.html"> Create one here</a></p>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
<!-- custom -->
<script src="{{ asset('asset/site/js/custom.js') }}"></script>
@section("script")
<script>
    $(document).ready(function () {
    const $checkbox = $("#two");
    const $input = $("#nomcomplet");
    const $divNom = $("#divNom");

    // Fonction pour activer ou désactiver l'obligation
    function toggleRequired() {
        if ($checkbox.is(":checked")) {
            $input.removeAttr("required"); // Retirer l'obligation
            $divNom.attr("hidden",true); // Retirer l'obligation
        } else {
            $divNom.removeAttr("hidden"); // Retirer l'obligation
            $input.attr("required", true); // Rendre obligatoire
        }
    }

    // Vérifier l'état au chargement de la page
    toggleRequired();

    // Ajouter un événement pour détecter les changements
    $checkbox.on("change", toggleRequired);
});

</script>

@endsection
