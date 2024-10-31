@extends('site.layout.template', ['titre' => 'Media'])

@section("content")
<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="{{ asset('assets/site/images/bg/B21-2024-fbc.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Notre gallerie</h1>
          <p>En images et en vidéos</p>
        </div>

       </ul>
     </div>
     </div>
  </div>
</section>
@include("site.parties.info")
<section class="white-bg page-section-ptb">
  <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
         <div class="isotope-filters">
            <button data-filter="" class="active">Tout</button>
            <button data-filter=".photography">Dimanche</button>
            <button data-filter=".illustration">Mercredi</button>
            <button data-filter=".branding">Jeudi</button>
          </div>
            <div class="isotope columns-5 popup-gallery">
              <div class="grid-item photography branding">
                  <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/01.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/01.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
               </div>
              <div class="grid-item photography branding">
               <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/02.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/02.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
              <div class="grid-item illustration">
               <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/03.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/03.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
                </div>
              <div class="grid-item illustration">
            <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/04.gif') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/04.gif') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
              <div class="grid-item branding illustration">
                <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/05.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
                </div>
              <div class="grid-item branding illustration">
               <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/06.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/06.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
              <div class="grid-item web-design photography">
              <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/07.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/07.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
                 </div>
                <div class="grid-item web-design photography">
                 <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/08.gif') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/08.gif') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
              <div class="grid-item web-design photography">
               <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/09.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/09.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
              <div class="grid-item web-design photography">
                 <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/10.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/10.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
              <div class="grid-item web-design photography">
                   <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/01.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/01.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
              <div class="grid-item web-design photography">
                <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/02.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/02.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
            </div>
            <div class="grid-item web-design photography">
                <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/03.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/03.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
            </div>
            <div class="grid-item web-design photography">
                <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/05.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/05.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
            </div>
            <div class="grid-item web-design photography">
                <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/06.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/06.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
            </div>
            <div class="grid-item web-design photography">
                <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/07.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/07.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
            </div>
            <div class="grid-item web-design photography">
                <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/02.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/02.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
            </div>
            <div class="grid-item photography branding">
                  <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/09.jpg') }}" alt="">
                     <div class="portfolio-overlay">
                        <h4 class="text-white"> <a href="portfolio-single-09.html"> Your title here </a> </h4>
                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/01.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
               </div>
              <div class="grid-item photography branding">
               <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/10.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/10.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
              <div class="grid-item illustration">
               <div class="portfolio-item">
                   <img src="{{ asset('assets/site/images/portfolio/small/03.jpg') }}" alt="">
                     <div class="portfolio-overlay">

                        <span class="text-white"> <a href="#">Courte description</a> </span>
                      </div>
                    <a class="popup portfolio-img" href="{{ asset('assets/site/images/portfolio/small/03.jpg') }}"><i class="fa fa-arrows-alt"></i></a>
                </div>
                </div>
         </div>
       </div>
     </div>
    </div>
   </section>

<section class="contact-box contact-box-top theme-bg">
  <div class="container">
    <div class="row pt-20 pb-40">
      <div class="col-md-4 sm-mb-30">
        <div class="contact-box">
          <div class="contact-icon">
            <i class="ti-map text-white"></i>
          </div>
          <div class="contact-info">
            <h5 class="text-white"> Adresse</h5>
            <span class="text-white">Details</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 sm-mb-30">
        <div class="contact-box">
          <div class="contact-icon">
            <i class="ti-headphone text-white"></i>
          </div>
          <div class="contact-info">
            <h5 class="text-white">Téléphone</h5>
            <span class="text-white">Heure de rdv</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-box">
          <div class="contact-icon">
            <i class="ti-email text-white"></i>
          </div>
          <div class="contact-info">
            <h5 class="text-white">Email</h5>
          <span class="text-white">Fax</span>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
