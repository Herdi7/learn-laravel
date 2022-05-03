<header class="section page-header rd-navbar-dark">
  <!-- RD Navbar-->
  <div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
      <div class="rd-navbar-panel">
        <!-- RD Navbar Toggle-->
        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
        <!-- RD Navbar Panel-->
      </div>
      <div class="rd-navbar-main">
        <div class="rd-navbar-main-bottom rd-navbar-darker">
          <div class="rd-navbar-main-container container">
            <!-- RD Navbar Nav-->
                              <ul class="rd-navbar-nav">
                                <li class="rd-nav-item {{ ($active == 'Home') ? 'active' : '' }}"><a class="rd-nav-link" href="/">Beranda</a>
                                </li>
                                <li class="rd-nav-item {{ ($active == 'Blog') ? 'active' : '' }}"><a class="rd-nav-link" href="/Blog">Blog</a>
                                </li>
                                <li class="rd-nav-item {{ ($active == 'Category') ? 'active' : '' }}"><a class="rd-nav-link" href="/Category">Category</a>
                                </li>
                                <li class="rd-nav-item {{ ($active == 'About') ? 'active' : '' }}"><a class="rd-nav-link" href="/About">About</a>
                                </li>
                              </ul>
                              {{-- login btn --}}
                              <ul class="rd-navbar-nav">
                                @auth
                                <div class="cart-inline-toggled-outer">
                                  <!-- Link Cart-->
                                  <button class="link link-cart cart-inline-toggle" data-rd-navbar-toggle="#cart-inline"><span class="link-cart-icon fl-bigmug-line-user143"></span></button>
                                  <article class="cart-inline cart-inline-toggled bg-light" id="cart-inline">
                                    <div class="cart-inline-inner">
                                      <div class="cart-inline-header">
                                        <li class="rd-nav-item"><a class="text-black rd-nav-link link link-icon link-icon-left link-classic" href="/Dashboard" class="rd-nav-link"><span class="icon fl-bigmug-line-menu40"></span>My Dashboard</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li class="rd-nav-item">
                                          <form action="/Logout" method="post">
                                            @csrf
                                              <button class="text-black btn rd-nav-link link link-icon link-icon-left link-classic" type="submit"><span class="icon fl-bigmug-line-login9"></span>Logout</button>
                                            </form>
                                          </li>
                                      </div>
                                    </div>
                                  </article>
                                </div>
                                @else
                                <li class="rd-nav-item btn btn-primary"><a href="/Login" class="rd-nav-link">Login</a></li>
                                @endauth
                              </ul>
              <!-- RD Navbar Search-->
              <div class="rd-navbar-search">
                <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                  <form class="rd-search" action="/Blog/" data-search-live="rd-search-results-live" method="GET">
                    <div class="form-wrap">
                      <label class="form-label" for="rd-navbar-search-form-input">Enter your search request here...</label>
                      <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="search" autocomplete="off">
                      @if (request('category'))
                      <input type="hidden" name="category" value="{{ request('category') }}">
                      @endif
                      <div class="rd-search-results-live" id="rd-search-results-live"></div>
                    </div>
                    <button class="rd-search-form-submit fl-budicons-launch-search81" type="submit"></button>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>