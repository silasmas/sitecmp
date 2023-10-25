@extends("site.layout.template", ['titre' => 'Detail projet'])

@section('content')
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="{{ asset('assets/images/portfolio-img/portfolio-single-01.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Détails du projet</h1>
                    <p>Description</p>
                </div>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><a href="{{ route('projects') }}">projets</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>portfolio single 01</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="single-portfolio-post white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="who-we-are-left port-singal">
                    <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-items="1" data-md-items="1"
                        data-sm-items="1" data-xs-items="1" data-xx-items="1">
                        <div class="item"><img src="{{ asset('assets/images/portfolio-img/01.jpg') }}" alt="">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/portfolio-img/02.jpg') }}" alt="">
                        </div>
                        <div class="item"><img src="{{ asset('assets/images/portfolio-img/0.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 port-information">
                <div class="port-title sm-mt-40">
                    <h3 class="mb-30">Titre du projet</h3>
                </div>
                <div class="tags mb-30">
                    <h5>Tags:</h5>
                    <ul>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">HTML5</a></li>
                    </ul>
                </div>
                <div class="port-meta clearfix">
                    <ul class="list-unstyled">
                        <li><b>Release:</b><span>07/07/2020 </span></li>
                        <li><b>Client:</b><span>Your client name</span></li>
                        <li><b>Live Demo: </b><span>www.projecturl.com</span></li>
                        <li><b>Date: </b><span>September 26, 2021</span></li>
                        <li><b>Skills: </b><span>Design, Photography, HTML, jQuery</span></li>
                    </ul>
                </div>
                <div class="share clearfix mt-10">

                    <div class="social mt-15 float-start">
                        <strong>Partager : </strong>
                        <ul>
                            <li>
                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-dribbble"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--=================================-->
        <div class="row">
            <div class="col-lg-12">
                <div class="port-info mt-50 mb-50">
                    <p>Proin gravida nibh vel lorem ipsum dolor sit amet of Lorem Ipsum. velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id
                        elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
                        velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat
                        auctor eu in elit. <br /> <br />

                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non
                        neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed
                        fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in
                        orci enim.
                    </p>
                </div>
            </div>
        </div>
        <!--=================================-->
        <div class="row">
            <div class="col-lg-12">
                <div class="port-navigation clearfix">
                    <div class="port-navigation-left float-start">

                    </div>
                    <div class="port-navigation-right float-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="action-box theme-bg full-width">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 position-relative">
                <div class="action-box-text">
                    <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
                    <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with
                        powerful features.</p>
                </div>
                <div class="action-box-button">
                    <a class="button button-border white" href="#">
                        <span>Purchase Now</span>
                        <i class="fa fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
