<header class="container d-lg-flex justify-content-between header">
  <figure class="d-flex m-0">
  <a class="mr-3" href="{{ home_url('/') }}">
    <picture>
        <source media="(min-width: 992px)" srcset="@asset('images/cambodia-logo@3x.png')" type="image/jpeg">
        <source media="(min-width: 768px)" srcset="@asset('images/cambodia-logo@2x.png')" type="image/jpeg">
        <source media="(max-width: 767px)" srcset="@asset('images/cambodia-logo@1x.png 1x'), @asset('images/cambodia-logo@2x.png 2x" type="image/jpeg')">
        <img class="d-md-none1" src="@asset('images/cambodia-logo@1x.png" type="image/jpeg')">
    </picture>
  </a>
    <figcaption class="title">
        <h2 class="site-title">The Kingdom of Cambodia</h2>
        <p class="tagline">By the People, For the People</p>
    </figcaption>
  </figure>
  <ul class="my-auto text-center list-inline d-none d-lg-block language">
      <li class="list-inline-item">
          <a href="#">
              <img srcset="@asset('images/kh@2x.jpg 2x')" src="@asset('mages/kh.jpg')">
              <span>KH</span>
          </a>
      </li>
      <li class="list-inline-item">
          <a href="#">
              <img srcset=@asset('images/en@2x.jpg 2x')" src="@asset('mages/en.jpg')">
              <span>EN</span>
          </a>
      </li>
  </ul>
</header>

<nav class="navbar navbar-expand-lg navbar-light p-0" id="main-menu">
  <div class="container">
    <button class="mr-3 my-2 navbar-toggler navbar-toggler-right text-white nav-icon collapsed" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div></div>
    </button>
    <div class="collapse navbar-collapse" id="main-menu">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </div>
  </div>
</nav>
