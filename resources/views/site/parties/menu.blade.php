<header id="header" class="header default">
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 xs-mb-10 d-none d-sm-block">
                    <div class="topbar-call text-center text-md-start">
                        <ul class="d-flex align-items-center">
                            <li class="d-flex align-items-center"><i class="fa fa-envelope-o me-1" style="color: #fff;"></i><a href="">eglisecmp@gmail.com</a> </li>
                            <li class="d-flex align-items-center"><i class="fa fa-phone me-1" style="color: #fff;"></i> <a href="tel:+243897000227">
                                    <span>+(243)897000227 </span> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-social text-center text-md-end">
                        <ul class="d-flex align-items-center justify-content-center justify-content-sm-end">
                            <li><a href="https://www.facebook.com/Eglisecmp?mibextid=LQQJ4d" target="blank"><span class="ti-facebook"></span></a></li>
                            <li><a href="https://instagram.com/eglisecmp?igshid=OGQ5ZDc2ODk2ZA==" target="blank"><span class="ti-instagram"></span></a></li>
                            <li><a href="#">
                                <i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#"><span class="ti-youtube"></span></a></li>
                            <li><a href="#">
                                <i class="fa-brands fa-tiktok"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-3 position-relative">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="{{ route('home') }}"><img id="logo_img"
                                            src="{{ asset('assets/site/images/logo.png') }}" alt="logo"> </a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-10 col-9">
                            <!-- menu links -->
                            <div class="menu-bar d-flex align-items-center w-100">
                                <ul class="menu-links d-lg-flex align-items-center mx-auto">
                                    {{-- <li class="{{ Route::current()->getName() == 'home' ? 'active' : ''}}">
                                        <a href="{{ route('home') }}">@lang('miscellaneous.main_menu.home') </a>
                                    </li> --}}
                                    <li
                                        class="hoverTrigger {{ Route::current()->getName() == 'about' ? 'active' : ''}}">

                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="link-drop" type="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">@lang('miscellaneous.main_menu.who_are_we.about')
                                                <i class="fa fa-angle-down fa-indicator"></i> </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('about') }}">@lang("miscellaneous.main_menu.who_are_we.title")</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <!-- drop down full width -->
                                    <div class="drop-down grid-col-12">
                                        <!--grid row-->
                                        <div class="grid-row">
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="{{ route('about') }}">Webster default <span
                                                                class="badge bg-primary">Default</span> </a></li>
                                                    <li><a href="index-02.html">Classic Business </a></li>
                                                    <li><a href="index-03.html">Business Parallax</a></li>
                                                    <li><a href="index-04.html">Digital Agency </a></li>
                                                    <li><a href="index-05.html">Corporate </a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <li
                                        class="hoverTrigger {{ Route::current()->getName() == 'articles' ? 'active' : ''}}">

                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="link-drop" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                @lang('miscellaneous.main_menu.meditation')
                                                <i class="fa fa-angle-down fa-indicator"></i> </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('articles') }}">@lang('miscellaneous.main_menu.news')</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('videos') }}">
                                                        @lang("miscellaneous.main_menu.video")
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('media') }}">
                                                        @lang('miscellaneous.main_menu.gallery')
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=" {{ Route::current()->getName() == 'bunda' ? 'active' : '' }}"><a
                                            href="{{ route('bunda') }}">
                                            Bunda 21
                                        </a>
                                    </li>
                                    {{-- <li class=" {{ Route::current()->getName() == 'events' ? 'active' : '' }}">
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="link-drop" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                @lang('miscellaneous.main_menu.events')
                                                <i class="fa fa-angle-down fa-indicator"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('bunda') }}">
                                                        Bunda 21
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                    <li class=" {{ Route::current()->getName() == 'projects' ? 'active' : '' }}"><a
                                            href="{{ route('projects') }}">@lang('miscellaneous.main_menu.projects')
                                        </a></li>
                                    {{-- <li
                                        class=" {{ Route::current()->getName() == 'contact' ? 'active' : '' }} link"><a
                                            href="{{ route('contact') }}">@lang('miscellaneous.main_menu.who_are_we.contact')
                                        </a></li> --}}
                                </ul>

                                <a href="{{ route('contributions') }}" class="btn btn-primary btn-uppertext d-none d-lg-inline-block">
                                    @lang('miscellaneous.main_menu.contribution')
                                </a>
                                <div class="search-cart d-none d-lg-inline-block">
                                    <div class="shpping-cart">
                                        <div class="dropdown">
                                            <a class="cart-btn" href="#" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false"> <i class="fa fa-language icon"
                                                    style="color: #650f1c;"></i></a>
                                            <ul class="dropdown-menu">
                                                @foreach ($available_locales as $locale_name => $available_locale)
                                                @if ($available_locale === $current_locale)
                                                <li>
                                                    <a class="dropdown-item disabled d-flex align-items-center"
                                                        href="#">
                                                        @switch($available_locale)
                                                        @case('en')
                                                        <span class="fi fi-us me-2 align-middle"></span>
                                                        @break
                                                        @case('ln')
                                                        <span class="fi fi-cd me-2 align-middle"></span>
                                                        @break
                                                        @default
                                                        <span class="fi fi-be me-2 align-middle"></span>
                                                        {{-- <span
                                                            class="fi fi-{{ $available_locale }} me-2 align-middle"></span>
                                                        --}}
                                                        @endswitch
                                                        {{ $locale_name }}
                                                    </a>
                                                </li>
                                                @else
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="{{ route('change_language', ['locale' => $available_locale]) }}">
                                                        @switch($available_locale)
                                                        @case('en')
                                                        <span class="fi fi-us me-2 align-middle"></span>
                                                        @break

                                                        @case('ln')
                                                        <span class="fi fi-cd me-2 align-middle"></span>
                                                        @break

                                                        @default
                                                        <span class="fi fi-be me-2 align-middle"></span>
                                                        {{-- <span
                                                            class="fi fi-{{ $available_locale }} me-2 align-middle"></span>
                                                        --}}
                                                        @endswitch

                                                        {{ $locale_name }}
                                                    </a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="shpping-cart">
                                        <a class="cart-btn" href="{{ route('contact') }}"> <i
                                                class="fa fa-envelope" style="color: #650f1c;"></i></a>
                                    </div>
                                </div>
                                <div class="menu-toggle d-flex flex-column d-lg-none ms-auto align-items-end">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>
