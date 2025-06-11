<footer class="footer page-section-pt black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                    <ul>
                        <li ><a href="index.html">@lang('miscellaneous.main_menu.home') </a></li>
                                    <li><a href="{{ route('about') }}">@lang('miscellaneous.main_menu.who_are_we.about')  </a></li>
                                    <li><a href="{{ route('articles') }}">@lang('miscellaneous.main_menu.news')  </a></li>
                                    <li><a href="{{ route('events') }}">BUNDA 21</a></li>
                                    {{-- <li><a href="{{ route('projects') }}">@lang('miscellaneous.main_menu.projects')  </a></li> --}}
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">@lang('miscellaneous.main_menu.who_are_we.title')</h6>
                    <ul>
                        <li><a href="#">@lang('miscellaneous.main_menu.who_are_we.about')</a></li>
                        <li><a href="#">Company Philosophy</a></li>
                        <li><a href="#">Corporate Culture</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Client Management</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-4 col-sm-6 xs-mb-30">
                <h6 class="text-white mb-30 mt-10 text-uppercase"> @lang('miscellaneous.footer.contact_us')</h6>
                <ul class="addresss-info">
                    <li><i class="fa fa-map-marker"></i>
                        <p>Address: @lang('miscellaneous.footer.address1') <br> @lang('miscellaneous.footer.address2')</p>
                    </li>
                    <li><i class="fa fa-phone"></i>
                         <a href="tel:243897000227"> <span>+243897000227 </span> </a>
                         <a href="tel:243818772740"> <span>+243818772740</span> </a>
                        </li>
                    <li><i class="fa fa-envelope-o"></i>Email:
                        eglisecmp@gmail.com
                        Support: dev@eglisecmp.com
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h6 class="text-white mb-30 mt-10 text-uppercase">@lang('miscellaneous.footer.newsletter.title')</h6>
                <p class="mb-30">@lang('miscellaneous.footer.newsletter.description')</p>
                <div class="footer-Newsletter">
                    <div id="mc_embed_signup_scroll">
                        <form action="{{ route('newsletter') }}" method="POST"
                            name="mc-embedded-subscribe-form" class="validate" id="newsletter">
                            @csrf
                            <div id="msg"> </div>
                            <div id="mc_embed_signup_scroll_2">
                                <input id="mce-EMAIL" class="form-control" type="email" placeholder="Email address"
                                    name="email" value="">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
                            </div>
                            <div class="clear">
                                <button type="submit"  name="submitbtn" id="btnNews"
                                    class="button button-border mt-20 form-button">@lang('miscellaneous.footer.newsletter.btn')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-widget mt-20">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p class="mt-15"> &copy;Copyright <span id="copyright">
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>
                        </span> <a href="#"> CMP </a> All Rights Reserved </p>
                </div>
                <div class="col-lg-6 col-md-6 text-start text-md-end">
                    <div class="social-icons color-hover mt-10">
                        <ul>
                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-linkedin"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            <li class="social-dribbble"><a href="#"><i class="fa fa-instagram"></i> </a></li>
                            <li class="social-twitter"><a href="#">
                                <i class="fa-brands fa-x-twitter"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fa fa-tiktok"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
