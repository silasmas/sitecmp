@extends('site.layout.template', ['titre' => 'Contact'])

@section("content")

<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="{{ asset('assets/site/images/bg/02.jpg') }}">
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


<section class="contact white-bg page-section-ptb">
  <div class="container">
   <div class="row justify-content-center">
       <div class="col-lg-8">
          <div class="section-title text-center">
            <h6>Prenez contact</h6>
            <h2>Entrez en contact avec nous</h2>
            <p>Laissez-nous un message ou appelez-nous</p>
          </div>
      </div>
      </div>
      <div class="touch-in white-bg">
       <div class="row">
       <div class="col-lg-4 col-md-4 sm-mb-30">
           <div class="contact-box text-center h-100">
              <i class="ti-map-alt theme-color"></i>
              <h5 class="uppercase mt-20">Adresse</h5>
              <p class="mt-20">4935 Av. De la Science - Gombe - Kinshasa 00243 Kinshasa, République démocratique du Congo</p>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 sm-mb-30">
           <div class="contact-box text-center h-100">
              <i class="ti-mobile theme-color"></i>
              <h5 class="uppercase mt-20"><a href="tel:+243897000227">+243 89 7000 227</a></h5>
              <p class="mt-20"> 24/7 Appelez-nous</p>
           </div>
       </div>
       <div class="col-lg-4 col-md-4 sm-mb-30">
           <div class="contact-box text-center h-100">
              <i class="ti-email theme-color"></i>
              <h5 class="uppercase mt-20"><a href="mailto:eglisecmp@gmail.com">eglisecmp@gmail.com</a></h5>
              <p class="mt-20">Ecrivez-nous</p>
           </div>
        </div>
       </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
       <p class="mt-50 mb-30">Shalom bien-aimé (e), Vous avez une question, une préoccupation? Laissez-nous un message ci-dessous.</p>
      </div>
     </div>
  <div class="row">
    <div class="col-sm-12">
         <div id="formmessage">Success/Error Message Goes Here</div>
           <form id="contactform" role="form" method="post" action="php/contact-form.php">
            <div class="contact-form clearfix">
               <div class="section-field">
                 <input id="name" type="text" placeholder="Nom*" class="form-control"  name="name">
             </div>
               <div class="section-field">
                 <input type="email" placeholder="Email*" class="form-control" name="email">
              </div>
                <div class="section-field">
                  <input type="text" placeholder="Téléphone*" class="form-control" name="phone">
              </div>
                 <div class="section-field textarea">
                   <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                 </div>
      				 <div class="section-field submit-button">
                <input type="hidden" name="action" value="sendEmail"/>
               <button id="submit" name="submit" type="submit" value="Send" class="button"> Envoyer </button>
      				 </div>
              </div>
          </form>
          <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="{{ asset('assets/site/images/pre-loader/loader-02.svg') }}" alt=""></div>
      </div>
  </div>
  </div>
</section>

<section class="contact-map clearfix o-hidden">
   <div class="container-fluid p-0">
     <div class="row">
      <div class="col-lg-12">
      <div style="width: 100%; height: 350px;" id="map" class="g-map" data-type='black'></div>
     </div>
     </div>
   </div>
</section>

 <section class="contact-box contact-box-top theme-bg" style="margin-top: 50px;">
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
