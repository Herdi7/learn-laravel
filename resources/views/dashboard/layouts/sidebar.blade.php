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
            <i data-feather="arroe-left"></i>
            Back To Home
          </a>
        </li>
      </ul>

      @can('must_be_admin') 
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('Dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/Dashboard/categories">
              <span data-feather="grid"></span>
              Post Categories
            </a>
          </li>
        </ul>
      @endcan
    </div>
  </nav>