<!-- Header Section Start -->
<header class="header--section">

    <!-- Header Topbar End -->

    <!-- Header Navbar Start -->
    <nav class="header--navbar navbar cmp-header" data-trigger="sticky">
    
            
        <ul class="socialLink float--right hidden-xs">
            <li><a href="https://web.facebook.com/Eglisecmp" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/eglisecmp" title="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/eglisecmp/" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCBIVcaYtQHKDbfvD2sh-AJw" title="youtube"><i class="fa fa-youtube"></i></a></li>
            <!--li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li-->
        </ul>
        <a href="/contact" class="btn btn-sm btn-primary float--right hidden-xs" style="margin:10px;">Contact</a>

        <a href="/" class="navbar-brand">
                    <img class="cmp-header-logo" src="{{asset('media/img/logo.png')}}" alt="">
        </a>

        <div class="container">
            <div class="navbar-header" style="margin-left: 150px !important;">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo Start -->
               
                <!-- Logo End -->
            </div>

            <!-- Header Cart Start -->
            <!--div class="header--cart-btn float--right">
                        <a href="cart.html" class="btn-link"><i class="fa fa-shopping-cart"></i><span>3</span></a>
                    </div-->
            <!-- Header Cart End -->

            <div id="headerNav" class="navbar-collapse collapse float--center">
                <!-- Header Nav Links Start -->
               <ul class="header--nav-links nav" style="font-size:16px">
                    <li class="{{$EnteteState[0]}}"><a href="/">Accueil</a></li>
                    <li class="dropdown {{$EnteteState[3]}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">A propos</a>
                        <ul class="dropdown-menu">
                            <li><a href="/aboutcmp">Qui sommes-nous ?</a></li>
                            <!--li><a href="/unite/1">Nos départements</a></li-->
                            <li><a href="/programme">Nos programmes</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collège Pastorale</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/welcome">Pasteur Titulaire</a></li>
                                    <li><a href="/team/1">Pasteurs associés</a></li>
                                    <li><a href="/team/4">Pasteurs stagiaires</a></li>
                                </ul>
                            </li>
                            <li><a href="/unite/3">Nos extensions</a></li>
                            <li><a href="/unite/2">Nos cellules</a></li>
                        </ul>
                        
                    </li>
                    <li class="dropdown {{$EnteteState[4]}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Méditation</a>

                        <ul class="dropdown-menu">
                            <li><a href="/blog/3">Article</a></li>
                            <li><a href="/blog/1">Vidéo</a></li>
                            <!--li><a href="/blog/2">Audio</a></li-->
                        </ul>
                    </li>
                    <li class="{{$EnteteState[2]}}"><a href="/evenement">Evénements</a></li>
                    <li class="dropdown {{$EnteteState[1]}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bâtisseur</a>

                        <ul class="dropdown-menu">
                            <li><a href="/batisseur/presentation">Présentation du projet</a></li>
                            <li><a href="/batisseur/contribution">Informations générales</a></li>
                            <li><a href="/batisseur/boutique">Boutique du bâtisseur</a></li>
                            <li><a href="http://makabo-church.com/cmphiladelphie">Contribuer</a></li>
                            <!--li><a href="/batisseur/objectif">Objectif mensuel</a></li-->
                            <!--li><a href="/batisseur/guide">Guide du bâtisseur</a></li-->
                            <!--li><a href="/batisseur/boutique">La boutique du bâtisseur</a></li>
                            <li><a href="/batisseur/boutique">La boutique du bâtisseur</a></li-->
                            <!--li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contribuer</a>

                                <ul class="dropdown-menu">
                                    <li><a href="/batisseur/contribution">Informations générales</a></li>
                                    <li><a href="/batisseur/abonnement">Abonnement</a></li>
                                    <li><a href="/batisseur/partenaire">Devenir partenaire</a></li>
                                </ul>
                            </li-->
                        </ul>
                    </li>

                    <li class="dropdown {{$EnteteState[7]}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bunda 21</a>

                        <ul class="dropdown-menu">
                            <li><a href="/bunda21/presentation">Informations générales</a></li>
                            <li><a href="/bunda21/alimentaire">Plan Alimentaire </a></li>
                            <li><a href="/bunda21/logement">Logements</a></li>
                            <li><a href="/bunda21/boutique">Boutique</a></li>                            
                        </ul>
                    </li>
                    
                    
                   
                    {{-- <li class="dropdown {{$EnteteState[5]}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Près de chez-vous</a>

                        <ul class="dropdown-menu">
                            <li><a href="/unite/3">Nos extensions</a></li>
                            <li><a href="/unite/2">Nos cellules</a></li>
                        </ul>
                    </li> --}}
                    {{-- <!--li class="dropdown {{$EnteteState[6]}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collège Pastorale</a>

                        <ul class="dropdown-menu">
                            <li><a href="/welcome">Pasteur Titulaire</a></li>
                            <li><a href="/team/1">Pasteurs associés</a></li>
                            <li><a href="/team/4">Pasteurs stagiaires</a></li>
                        </ul>
                    </li--> --}}
                    <!--li><a href="contact.html">Contact</a></li-->
                </ul>
            
                <!-- Header Nav Links End -->
            </div>
        </div>
    </nav>
    <!-- Header Navbar End -->
</header>
@include('structures/session')

<!-- Header Section End -->