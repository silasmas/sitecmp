@include('site.parties.entete')
<div class="bg-overlay-black-60 parallax" style="background-image: url(../assets/site/images/bg/bg.jpg);">
    <section class="section-transparent page-section-pb">
        <div class="container">
            <div class="row justify-content-center position-relative">
                <div class="col-lg-6 col-md-8">
                    <div class="mt-10 mb-10 text-center logo">
                        <a href="{{ route('home') }}"><img class="logo-small"
                                style="height: 120px; width: 120px;"id="logo_img"
                                src="{{ asset('storage/' . $setting->site_logo) }}" alt="logo">
                        </a>
                    </div>
                    <div class="clearfix login-bg">
                        <div class="login-title">
                            <h2 class="mb-0 text-white">Offrez au Seigneur</h2>
                            <small class="text-white"> 2 Corinthiens 9:7 <br> Que chacun donne comme il l'a décidé dans
                                son cœur, sans regret ni contrainte ; car Dieu aime celui qui donne avec joie.</small>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="clearfix">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </symbol>
                                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                        </symbol>
                                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </symbol>
                                    </svg>
                                    <h3 class="mb-20">Etat de la transaction</h3>
                                    @if (isset($order_details))
                                        @switch($order_details["status"])
                                            @case('Payée')
                                            <div class="alert alert-Success d-flex align-items-center" role="alert">
                                                <svg class="bi flex-shrink-0 me-2" width="50" height="50"
                                                    role="img" aria-label="Success:">
                                                    <use xlink:href="#exclamation-triangle-fill" />
                                                </svg>
                                                <div>
                                                    <h4>{{ $order_details['message'] }}</h4>
                                                    <hr>
                                                    <div>
                                                        <p>Référence : {{ $order_details['order_reference'] }}</p>
                                                        <p>Montant :
                                                            {{ $order_details['amount'] . $order_details['currency'] }} </p>
                                                        <p>Moyen de paiement : {{ $order_details['chanel'] }}</p>
                                                        <a href="{{ route('contributions') }}" class="btn">CONTINUER</a>
                                                    </div>

                                                </div>
                                            </div>
                                            @break

                                            @case('En cours')
                                            <div class="alert alert-Warning d-flex align-items-center" role="alert">
                                                <svg class="bi flex-shrink-0 me-2" width="50" height="50"
                                                    role="img" aria-label="Warning:">
                                                    <use xlink:href="#exclamation-triangle-fill" />
                                                </svg>
                                                <div>
                                                    <h4>{{ $order_details['message'] }}</h4>
                                                    <hr>
                                                    <div>
                                                        <p>Référence : {{ $order_details['order_reference'] }}</p>
                                                        <p>Montant :
                                                            {{ $order_details['amount'] . $order_details['currency'] }} </p>
                                                        <p>Moyen de paiement : {{ $order_details['chanel'] }}</p>
                                                        <a href="{{ route('contributions') }}" class="btn">CONTINUER</a>
                                                    </div>

                                                </div>
                                            </div>
                                            @break

                                            @case('Annulée')

                                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                    <svg class="bi flex-shrink-0 me-2" width="50" height="50"
                                                        role="img" aria-label="Danger:">
                                                        <use xlink:href="#exclamation-triangle-fill" />
                                                    </svg>
                                                    <div>
                                                        <h4>{{ $order_details['message'] }}</h4>
                                                        <hr>
                                                        <div>
                                                            <p>Référence : {{ $order_details['order_reference'] }}</p>
                                                            <p>Montant :
                                                                {{ $order_details['amount'] . $order_details['currency'] }} </p>
                                                            <p>Moyen de paiement : {{ $order_details['chanel'] }}</p>
                                                            <a href="{{ route('contributions') }}" class="btn">CONTINUER</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            @break

                                            @default
                                        @endswitch
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="clearfix text-center login-social medium color">
                            <h4 class="theme-color mb-30">Suivez-nous :</h4>
                            <ul>
                                <li {{ $settings['facebook'] == null ? 'hidden' : $settings['facebook'] }}>
                                    <a class="social-facebook" href="{{ $settings['facebook'] }}" target="blank"><i
                                            class="fa fa-facebook"></i></a>
                                </li>
                                <li {{ $settings['instagram'] == null ? 'hidden' : $settings['instagram'] }}>
                                    <a class="social-instagram" href="{{ $settings['instagram'] }}" target="blank"><i
                                            class="fa fa-instagram"></i></a>
                                </li>
                                <li {{ $settings['x_twitter'] == null ? 'hidden' : $settings['x_twitter'] }}>
                                    <a class="social-twitter" href="{{ $settings['x_twitter'] }}" target="blank"><i
                                            class="fa fa-x-twitter"></i> </a>
                                </li>
                                <li {{ $settings['youtube'] == null ? 'hidden' : $settings['youtube'] }}>
                                    <a class="social-youtube" href="{{ $settings['youtube'] }}" target="blank"><i
                                            class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('site.parties.pied')
