<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Dashboard') ? 'active' : '' }}" aria-current="page" href="/Dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Dashboard/posts*') ? 'active' : '' }}" href="/Dashboard/posts">
            <i data-feather="file"></i>
            My Post
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">
            <i data-feather="file"></i>
            Back To Home
          </a>
        </li>
      </ul>
    </div>
  </nav>