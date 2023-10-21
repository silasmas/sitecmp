<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HEGHC8L0HM"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HEGHC8L0HM');
    </script>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>CMP | {{$title}}</title>
	@include('structures/linkUp')
</head>
<body>

    <!-- Preloader Start -->
    @include('structures/preloader')
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        @include('structures/header')
        <!-- Header Section End -->

   
        <!-- Page Header Section Start -->
        @include('structures/subheader')
        <!-- Page Header Section End -->
        <!-- FAQ Section Start -->
        <section class="faq--section pt--80 pb--20">
            <div class="container">
                <!-- Portfolio Featured Start -->
                <div class="portfolio--featured pb--60">
                    <img src="{{asset('media/img/bunda-img/bunda21.jpg')}}" alt="">
                </div>
                <!-- Portfolio Featured End -->
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    {{-- <h2 class="h1 text-uppercase">BUNDA 21: Fais-moi voir ta face</h2> --}}

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <p>Du 31 octobre au 20 Novembre 2O22, 21 jours de jeûne et prière</p>
                        </div>
                        <br><br>
                        <div class="col-md-6 col-md-offset-3">
                           <!-- <a href="{{asset('media/docs/B21-PlanAlimentaire.pdf')}}" class="btn btn-primary">Télécharger le plan alimentaire en PDF (1.4M)</a> -->
                            <a href="http://plancmp.silasmas.com/plan/Plan_Alimentaire.pdf" target="blank" class="btn btn-primary">Télécharger le plan alimentaire en PDF (1.21M)</a>
                        </div>
                        
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-3 pb--60">
                        <!-- Sidebar Start -->
                        <div class="sidebar">
                            <!-- Widget Start -->
                            <div class="widget">
                                <!-- Tab Nav Widget Start -->
                                <div class="tab-nav--widget">
                                    <ul class="nav">
                                        <li class="active">
                                            <a href="#faqTab01" data-toggle="tab">
                                                <span class="icon">
                                                    <img src="{{asset('media/img/services-img/tab-nav-02-normal.png')}}" alt="">
                                                    <img src="{{asset('media/img/services-img/tab-nav-02-hover.png')}}" alt="">
                                                </span>

                                                <span>Semaine 1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#faqTab02" data-toggle="tab">
                                                <span class="icon">
                                                    <img src="{{asset('media/img/services-img/tab-nav-02-normal.png')}}" alt="">
                                                    <img src="{{asset('media/img/services-img/tab-nav-02-hover.png')}}" alt="">
                                                </span>

                                                <span>Semaine 2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#faqTab03" data-toggle="tab">
                                                <span class="icon">
                                                    <img src="{{asset('media/img/services-img/tab-nav-02-normal.png')}}" alt="">
                                                    <img src="{{asset('media/img/services-img/tab-nav-02-hover.png')}}" alt="">
                                                </span>

                                                <span>Semaine 3</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- Tab Nav Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                        <!-- Sidebar End --> 
                    </div>
                    <div class="col-md-9 pb--60">
                        <!-- Tab Content Start -->
                        <div class="tab-content">
                            <!-- Tab Pane Start -->
                            <div class="tab-pane fade in active" id="faqTab01">
                                @include('bunda/weeks/week1')
                            </div>
                            <!-- Tab Pane End -->
                            <div class="tab-pane fade" id="faqTab02">
                                @include('bunda/weeks/week2')
                            </div>
                            <!-- Tab Pane End -->
                            <div class="tab-pane fade" id="faqTab03">
                                @include('bunda/weeks/week3')
                            </div>
                            <!-- Tab Pane End -->

                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section End -->
        <!-- Page Content Section Start -->
        <section class="page--content--section pt--80 pb--60">
            <div class="container">
                <!-- Page Content Inner Start -->
                <div class="page--content-inner">
                    <!-- <div class="title">
                        <h2 class="h1">Projet "Les bâtisseurs"</h2>
                    </div> -->

                    <div class="sub-title">
                        <h3 class="h3">Instructions sur les jeûnes</h3>
                    </div>

                    <div class="desc">
                        <ul>
                                <li>Boire 3 litres de liquide par jour, au moins 2 litres d’eau potable et des tisanes, jus des légumes verts dilué, bouillon;</li>
                                <li>Evitez les jus d’orange et de tomate ;</li>
                                <li>Les jus les plus recommandés sont les jus de carotte, raisin, céleri, pomme, chou, betterave, mangue, pastèque, papaye;</li>
                                <li>Le jeûne est contre – indiqué  en cas de :
                                    <ul> 
                                        <li>Insuffisance rénale (reins), hépatique (foie), diabète de type 1 et 2 (les personnes qui doivent prendre l’insuline pour le diabète ou encore souffrent d’autres problèmes de sucre dans le sang tel que l’hyperglycémie);</li>
                                        <li>Les gastritiques;</li>
                                        <li>Les femmes enceintes ou qui allaitent;</li>
                                        <li>Les personnes qui souffrent d’anémie  (perte de sang) ou de fatigue chronique; </li>
                                        <li>Les personnes qui souffrent des tumeurs, des ulcères qui saignent, le cancer, problèmes sanguins ou des problèmes cardiaques;</li>
                                        <li>Les personnes souffrant d’hyperthyroïdie, anorexie (manque d’appétit), boulimie (gourmandise); </li>
                                        <li>Carences nutritionnelles; </li>
                                        <li>Prise de médicaments (demander un avis médical).</li>

                                    </ul>   
                                </li>
                            </ul>

                    </div>
                </div>
                <!-- Page Content Inner End -->
            </div>
        </section>
        <!-- Page Content Section End -->
       

       

        <!-- Footer Section Start -->
        @include('structures/footer')
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

   

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn btn-lg btn-default active"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

	@include('structures/linkBottom')

</body>
</html>
