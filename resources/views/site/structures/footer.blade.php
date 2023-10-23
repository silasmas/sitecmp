<!-- Footer Section Start -->
        <footer class="footer--section" data-bg-img="{{asset('media/img/footer-img/footer-widget-bg.jpg')}}">
            <!-- Footer Widgets Start -->
            <div class="footer--widgets pt--90 pb--30">
                <div class="container">
                    <div class="row AdjustRow">
                        <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <!-- About Widget Start -->
                                <div class="about--widget">
                                    <div class="logo">
                                        <img src="{{asset('media/img/logoFooter.png')}}" alt="">
                                    </div>

                                    <address>
                                        <p>4935 Av. De la Science - Gombe - Kinshasa 00243 Kinshasa, République démocratique du Congo</p>
                                    </address>

                                    <dl>
                                        <dt><i class="fa fa-envelope-o"></i>Email</dt>
                                        <dd>
                                            <p>
                                                <span>Administratif:</span>
                                                <a href="mailto:eglisecmp@gmail.com" class="btn-link">eglisecmp@gmail.com</a>
                                            </p>
                                            <p>
                                                <span>Support:</span>
                                                <a href="mailto:dev@eglisecmp.com" class="btn-link">dev@eglisecmp.com</a>
                                            </p>

                                            
                                        </dd>
                                    </dl>

                                    <dl>
                                        <dt><i class="fa fa-phone"></i>Phone</dt>
                                        <dd>
                                            <p>
                                                <span>Administratif:</span>
                                                <a href="tel:00243897000227" class="btn-link">00243810466883</a>
                                            </p>
                                            <p>
                                                <span>Support:</span>
                                                <a href="tel:00243818772740" class="btn-link">00243818772740</a>
                                            </p>

                                            
                                        </dd>
                                    </dl>

                                    <dl>

                                    <dt></dt>
                                        <dd>
                                        <p>
                                                <a href="/contact" class="btn btn-sm btn-primary">Contactez nous</a>
                                            </p>
                                        </dd>
                                    </dl>

                                    
                                </div>
                                <!-- About Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 widget--title text-uppercase">Bâtisseur</h2>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#">Présentation du projet</a></li>
                                        <li><a href="#">Objectif mensuel</a></li>
                                        <li><a href="#">Guide du bâtisseur</a></li>
                                        <li><a href="#">La boutique du bâtisseur</a></li>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 widget--title text-uppercase">Qui sommes-nous ?</h2>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#">Notre histoire</a></li>
                                        <li><a href="#">Notre vision</a></li>
                                        <li><a href="#">Notre mission</a></li>
                                        <li><a href="#">Nos départements</a></li>
                                        <li><a href="#">Nos programmes</a></li>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 widget--title text-uppercase">NewsLetter</h2>

                                <!-- Newsletter Widget Start -->
                                <div class="newsletter--widget">
                                    <div class="desc">
                                        <p>Abonnez-vous à notre newsletter afin de recevoir les informations relatives à notre église</p>
                                    </div>

                                    <form action="/newsletter" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="validate">
                                        {{csrf_field()}}    
                                        <input type="text" name="email" placeholder="Email" class="form-control" required>

                                        <button type="submit" class="btn btn-primary">Souscrire</button>
                                    </form>
                                </div>
                                <!-- Newsletter Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 widget--title text-uppercase">Méthode de paiement</h2>

                                <!-- Image Widget Start -->
                                <div class="img---widget">
                                    <img src="{{asset('media/img/footer-img/payment-methods.png')}}" alt="">
                                </div>
                                <!-- Image Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widgets End -->

            <!-- Footer Copyright Start -->
            <div class="footer--copyright pt--30 pb--30">
                <div class="container">
                    <ul class="social nav">
                    <li><a href="https://web.facebook.com/Eglisecmp"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com/eglisecmp"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/eglisecmp/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCBIVcaYtQHKDbfvD2sh-AJw"><i class="fa fa-youtube"></i></a></li>
                        
                    </ul>

                    <p class="copyright--text">Copyright 2020 &copy; <a href="#">CMP</a>. All Rights Reserved.</p>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
       

        <!-- Default Statcounter code for Eglise CMP https://eglisecmp.com -->
            <script type="text/javascript">
        var sc_project=12669460;
        var sc_invisible=1;
        var sc_security="839c8c6e";
        </script>
        <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
        <noscript><div class="statcounter"><a title="Web Analytics Made Easy - Statcounter" href="https://statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/12669460/0/839c8c6e/1/" alt="Web Analytics Made Easy - Statcounter" referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
        <!-- End of Statcounter Code -->
