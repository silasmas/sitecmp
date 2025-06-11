<header id="header" class="header default">
    <div class="topbar">
        <div class="container">
            @if(isNull($setting))
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 xs-mb-10 d-none d-sm-block">
                    <div class="topbar-call text-center text-md-start">
                        <ul class="d-flex align-items-center">
                            <li class="d-flex align-items-center"><i class="fa fa-envelope-o me-1"
                                    style="color: #fff;"></i><a
                                    href="mail:{{isNull($setting->support_email)?$setting->support_email:""}}">
                                    {{isNull($setting->support_email)?$setting->support_email:""}}</a> </li>
                            <li class="d-flex align-items-center"><i class="fa fa-phone me-1" style="color: #fff;"></i>
                                <a href="tel:{{isNull($setting->support_email)? $setting->support_phone:"" }}">
                                    <span>{{isNull($setting->support_email)?$setting->support_phone:"" }} </span> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-social text-center text-md-end">
                        <ul class="d-flex align-items-center justify-content-center justify-content-sm-end">
                            <li {{ $settings['facebook']==null?'hidden':$settings['facebook'] }}><a
                                    href="{{ $settings['facebook'] }}" target="blank"><span
                                        class="ti-facebook"></span></a></li>
                            {{-- <li><a href="https://www.facebook.com/Eglisecmp?mibextid=LQQJ4d" target="blank"><span
                                        class="ti-facebook"></span></a></li> --}}
                            <li {{ $settings['instagram']==null?'hidden':$settings['instagram'] }}><a
                                    href="{{ $settings['instagram'] }}" target="blank"><span
                                        class="ti-instagram"></span></a></li>
                            {{-- <li><a href="https://instagram.com/eglisecmp?igshid=OGQ5ZDc2ODk2ZA=="
                                    target="blank"><span class="ti-instagram"></span></a></li> --}}
                            <li {{ $settings['x_twitter']==null?'hidden':$settings['x_twitter'] }}><a
                                    href="{{ $settings['x_twitter'] }}" target="blank"><i
                                        class="fa-brands fa-x-twitter"></i></a></li>
                            {{-- <li><a href="https://twitter.com/EgliseCMP" target="blank"><i
                                        class="fa-brands fa-x-twitter"></i></a></li> --}}
                            <li {{ $settings['youtube']==null?'hidden':$settings['youtube'] }}><a
                                    href="{{ $settings['youtube'] }}"><span class="ti-youtube"
                                        target="blank"></span></a></li>
                            {{-- <li><a href="https://www.youtube.com/channel/UCBIVcaYtQHKDbfvD2sh-AJw"><span
                                        class="ti-youtube" target="blank"></span></a></li> --}}
                            <li {{ $settings['tiktok']==null?'hidden':$settings['tiktok'] }}><a
                                    href="{{ $settings['tiktok'] }}" target="blank"><i
                                        class="fa-brands fa-tiktok"></i></a></li>
                            {{-- <li><a href="https://vm.tiktok.com/ZML7XqTPn/" target="blank"><i
                                        class="fa-brands fa-tiktok"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            @endif
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
                                    @if($setting !== null && $setting->site_logo!==null)
                                    <a href="{{ route('home') }}"><img id="logo_img"
                                            src="{{asset('storage/'.$setting->site_logo)}}" alt="logo"> </a>
                                    @else
                                    <a href="{{ route('home') }}"><img id="logo_img"
                                            src="{{ asset('assets/images/Logo-CMP-2023-red.png') }}" alt="logo"> </a>
                                    @endif
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-10 col-9">
                            <!-- menu links -->
                            <div class="menu-bar d-flex align-items-center w-100">
                                <ul class="menu-links d-lg-flex align-items-center mx-auto">
                                    <li class="hoverTrigger {{ Route::current()->getName() == 'about' ? 'active' : ''}}">
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
                                    <li class="hoverTrigger {{ Route::current()->getName() == 'bunda' ? 'active' : '' }}">
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="link-drop" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Bunda 21
                                                <i class="fa fa-angle-down fa-indicator"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('bunda') }}">Pour la petite
                                                        histoire</a>
                                                </li>
                                                <li><a class="dropdown-item" href="{{ route('playliste') }}">Play liste</a>
                                                </li>
                                            </ul>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="hoverTrigger {{ Route::current()->getName() == 'missionnaire' ? 'active' : '' }}">
                                        <div class="dropdown">
                                            <a href="{{ route('missionnaire') }}" class="link-drop" type="button">
                                                Devenir missionnaire
                                            </a>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="hoverTrigger {{ Route::current()->getName() == 'reception' ? 'active' : '' }}">
                                        <div class="dropdown">
                                            <a href="{{ route('reception') }}" class="link-drop" type="button">
                                               Reception pastorale
                                            </a>
                                        </div>
                                        </a>
                                    </li>

                                </ul>

                                <a href="https://vpos.flexpaie.com/pay/advanced/Q01Q" target="blank"
                                    class="btn btn-primary btn-uppertext d-none d-lg-inline-block">
                                    @lang('miscellaneous.main_menu.contribution')
                                </a>
                                {{-- <a href="{{ route('contributions') }}"
                                    class="btn btn-primary btn-uppertext d-none d-lg-inline-block">
                                    @lang('miscellaneous.main_menu.contribution')
                                </a> --}}
                                <div class="search-cart d-none d-lg-inline-block">
                                    {{-- <div class="shpping-cart">
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

                                                        @endswitch

                                                        {{ $locale_name }}
                                                    </a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>--}}
                                    <div class="shpping-cart">
                                        {{-- <a class="cart-btn" href="{{ route('contact') }}"> <i class="fa fa-envelope"
                                                style="color: #650f1c;"></i></a> --}}
                                                <a class="cart-btn" href="https://shorturl.at/qgvgj" target="_blank">
                                                Prendre RDV</a>
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
