<!-- MENU RESPONSIVE -->
<div class="menu-responsive d-block d-lg-none">
    <div class="close-menu">
        <span></span>
        <span></span>
    </div>
    <div class="content-menu d-flex h-100 flex-column">
        <h5>Menu</h5>
        <ul class="mt-4">
            <li>
                <a class="{{ Route::current()->getName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    Accueil
                </a>
            </li>
            <li>
                <a class="dropdown-toggle {{ Route::current()->getName() == 'about' ? 'active' : '' }}"
                    data-bs-toggle="collapse" href="#collapseAbout" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    @lang('miscellaneous.main_menu.who_are_we.about')
                </a>
                <div class="collapse" id="collapseAbout">
                    <div class="card card-body p-0" style="border: none">
                        <a href="{{ route('about') }}">@lang('miscellaneous.main_menu.who_are_we.title')</a>
                    </div>
                </div>
            </li>
            <li>
                <a class="dropdown-toggle {{ Route::current()->getName() == 'articles' ? 'active' : '' }}"
                    data-bs-toggle="collapse" href="#collapseMedi" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    @lang('miscellaneous.main_menu.meditation')
                </a>
                <div class="collapse" id="collapseMedi">
                    <div class="card card-body p-0" style="border: none">
                        <a class="dropdown-item" href="{{ route('articles') }}">@lang('miscellaneous.main_menu.news')</a>
                        <a class="dropdown-item" href="{{ route('videos') }}">
                            @lang('miscellaneous.main_menu.video')
                        </a>
                        <a class="dropdown-item" href="{{ route('media') }}">
                            @lang('miscellaneous.main_menu.gallery')
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <a class="dropdown-toggle {{ Route::current()->getName() == 'bunda' ? 'active' : '' }}"
                    data-bs-toggle="collapse" href="#collapseAbout" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                   Bunda 21
                </a>
                <div class="collapse" id="collapseAbout">
                    <div class="card card-body p-0" style="border: none">
                        <a href="{{ route('bunda') }}">Pour la petite histoire</a>
                        <a  href="{{ route('playliste') }}">Play liste</a>
                    </div>
                </div>
            </li>
            <li>
                <a class="{{ Route::current()->getName() == 'missionnaire' ? 'active' : '' }}" href="{{ route('missionnaire') }}">
                   Devenir missionnaire
                </a>
            </li>
            <li>
                <a class="{{ Route::current()->getName() == 'reception' ? 'active' : '' }}" href="{{ route('reception') }}">
                    Reception pastorale
                </a>
            </li>

        </ul>
        <div class="block my-4">
          <a href="https://shorturl.at/qgvgj" target="_blank" class="btn btn-primary btn-uppertext d-lg-inline-block">
            Prendre rendez-vous
          </a>
        </div>
        <div class="block my-4">
          <a href="https://vpos.flexpaie.com/pay/advanced/Q01Q" target="blank" class="btn btn-primary btn-uppertext d-lg-inline-block">
            @lang('miscellaneous.main_menu.contribution')
          </a>
        </div>
        <p class="d-flex flex-column">
            <span>Adresse</span>
            @lang('miscellaneous.footer.address1') <br> @lang('miscellaneous.footer.address2')
        </p>
        <div class="block-items-contact mt-auto">
            <div class="item-contact mb-2">
                <a href="tel:+243897000227">
                    <i class="fa-solid fa-phone fas icon"></i>
                    +(243)897000227
                </a>
            </div>
            <div class="item-contact">
                <a href="mailto:eglisecmp@gmail.com">
                    <i class="fas fa-solid fa-envelope icon"></i>
                    eglisecmp@gmail.com
                </a>
            </div>
        </div>
    </div>
</div>
<!--  -->
