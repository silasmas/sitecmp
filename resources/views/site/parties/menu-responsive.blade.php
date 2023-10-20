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
          <a class="active" href="#home">
            Accueil
          </a>
        </li>
        <li>
          <a href="#about" class="{{ Route::current()->getName() == 'about' ? 'active' : ''}}">
            @lang('miscellaneous.main_menu.who_are_we.about')
          </a>
        </li>
        <li>
          <a href="#services">
            @lang('miscellaneous.main_menu.meditation')
          </a>
        </li>
        <li>
          <a class="" href="#secteurs">
            @lang('miscellaneous.main_menu.events')
          </a>
        </li>
        <li>
          <a class="scrollTop" href="#contact">
            @lang('miscellaneous.main_menu.projects')
          </a>
        </li>
      </ul>
      <p class="d-flex flex-column">
        <span>Adresse</span>
        17 Av Chef Katanga-Lubumbashi-RD Congo
      </p>
      <div class="block-items-contact mt-auto">
        <div class="item-contact mb-2">
          <a href="tel:+243820000907">
            <i class="fa-solid fa-phone fas icon"></i>
            +243 820-000-907
          </a>
        </div>
        <div class="item-contact">
          <a href="mailto:info@daniel-consulting.cd">
            <i class="fas fa-solid fa-envelope icon"></i>
            info@daniel-consulting.cd
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--  -->