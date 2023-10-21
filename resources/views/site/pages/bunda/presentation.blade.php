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

        <!-- Page Content Section Start -->
        <section class="page--content--section pt--80 pb--60">
            <div class="container">
                <!-- Page Content Inner Start -->
                <div class="page--content-inner">
                    <div class="title">
                        <h2 class="h1">Grande célébration Bunda 21</h2>
                    </div>

                    <div class="sub-title">
                        <h3 class="h3">Temps de consécration à la recherche de la face de Dieu</h3>
                    </div>

                    <div class="desc">
                        <p>
                        
                        La grande célébration Bunda 21 est un programme de 21 jours de jeûne et prière pendant lesquels  nous cherchons la face de Dieu pour nous-mêmes, pour nos ministères, nos mariages, pour nos business, nos Églises, notre pays.  

                        Il y a bien de choses que Dieu nous a destinées, qui nous appartiennent, mais que nous devons palper, posséder. 
                        Le prophète Elie, après avoir reçu une promesse de Dieu, a cherché Dieu à la montagne ; il s’est privé de la nourriture, a consenti des sacrifices, 
                        bien que bénéficiaire de la promesse de Dieu, et ce jusqu’à ce que la pluie soit tombée. 
                        
                        Nous n'attendons donc pas l’accomplissement des promesses de Dieu de manière passive, 
                        nous faisons notre part et cette dernière se trouve dans la prière.
                        
                        <br><br>
                       
                        {{-- Dieu cherche un homme qui se tienne à la brèche, ainsi IL nous appelle dans Sa présence --}}

                        Combats, possède et jouis de ton héritage.


                        </p>
                    </div>
                </div>
                <!-- Page Content Inner End -->
            </div>
        </section>
        <!-- Page Content Section End -->

        <!-- Portfolio Section Start -->
        <div class="portfolio--section pt--80 pb--50">
            <div class="container">
              

                <!-- Portfolio Items Start -->
                <div class="portfolio--items row">
                    <!-- Portfolio Item Start -->
                    @foreach($project->galeries as $picture)
                    <div class="portfolio--item col-md-4 col-xs-6 col-xxs-12 pb--30" data-cat="vps-hosting graphic-hosting">
                        <div class="img">
                            <img src="{{asset('storage/'.$picture->image_url)}}" alt="">

                            <a href="{{asset('storage/'.$picture->image_url)}}" class="caption">
                                <div class="caption--text">
                                    <i class="fa fa-chain"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Item End -->
                    @endforeach
                    

                </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Load More Start -->
                {{-- <div class="portfolio--load-more pt--30 pb--30 text-center">
                    <a href="http://makabo-church.com/cmphiladelphie" class="btn btn-default">Contribuer<i class="ml--8 fa fa-long-arrow"></i></a>
                </div> --}}
                <!-- Portfolio Load More End -->
            </div>
        </div>
        <!-- Portfolio Section End -->


     

        <!-- Footer Section Start -->
        @include('structures/footer')
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Login Form Start -->
    <!--div id="loginForm" class="login--form modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>

                <div class="modal-body">
                    <div class="title">
                        <h2 class="h4">Login</h2>
                    </div>

                    <form action="http://billing.ywhmcs.com/dologin.php" data-form="validate">
                        <div class="form-group">
                            <input type="email" name="username" placeholder="Your Email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                        </div>

                        <input type="hidden" name="systpl" value="CloudSky">

                        <p class="help-block"><a href="http://billing.ywhmcs.com/pwreset.php?systpl=CloudSky">Forgot Your Password?</a></p>

                        <button type="submit" class="btn btn-block btn-default text-uppercase">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div-->
    <!-- Login Form End -->

    

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn btn-lg btn-default active"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

	@include('structures/linkBottom')

</body>
</html>
