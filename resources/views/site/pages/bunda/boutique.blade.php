<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
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

        <!-- Products Section Start -->
        <section class="products--section pt--80 pb--50">
            <div class="container">
                <!-- Products List Start -->
                <div class="products--list row AdjustRow" data-scroll-reveal="group">
                    @foreach($project->goods as $good)
                    <!-- Product Item Start -->
                    <div class="product--item col-md-3 col-xs-6 col-xss-12 pb--30">
                        <div class="product--img">
                            <img src="{{asset('storage/'.$good->image_url)}}" alt="">

                            <div class="action bg--overlay bg--overlay-90 bg--c-main--b">
                                <div class="action--inner">
                                    <a href="#" class="btn btn-sm btn-primary active"><i class="mr--5 fa fa-shopping-cart"></i>Achat sur place</a>

                                    <div class="buttons">
                                        <a href="#" class="btn-link"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" class="btn-link"><i class="fa fa-refresh"></i></a>
                                        <a href="#" class="btn-link"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product--info">
                            <div class="name">
                                <h3 class="h4"><a href="#" class="btn-link">{{$good->designation}}</a></h3>
                            </div>

                            <div class="price">
                                <p>{{$good->price}}</p>
                            </div>

                            <div class="rating">
                                <ul class="nav">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Product Item End -->
                    @endforeach

                </div>
                <!-- Products List End -->

                <!-- Pagination Start -->
                <!--nav class="pagination--nav text-center pt--30 pb--30">
                    <ul class="pagination">
                        <li class="prev"><a href="#" class="btn btn-default active"><i class="fa fa-angle-double-left"></i></a></li>
                        <li class="active"><a href="#" class="btn btn-default">1</a></li>
                        <li><a href="#" class="btn btn-default">2</a></li>
                        <li><a href="#" class="btn btn-default">3</a></li>
                        <li><a href="#" class="btn btn-default">4</a></li>
                        <li><a href="#" class="btn btn-default">5</a></li>
                        <li class="next"><a href="#" class="btn btn-default active"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </nav-->
                <!-- Pagination End -->
            </div>
        </section>
        <!-- Products Section End -->

     

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
