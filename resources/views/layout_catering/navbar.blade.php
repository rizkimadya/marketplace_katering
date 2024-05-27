  <!--**********************************
            Nav header start
        ***********************************-->
  <div class="nav-header">
      <a href="{{url('/dashboard-admin')}}" class="brand-logo">
          <img class="logo-abbr" src="assets_admin/images/logo.png" alt="">
          {{-- <img class="logo-compact" src="assets_admin/images/logo-text.png" alt="">
          <img class="brand-title" src="assets_admin/images/logo-text.png" alt=""> --}}
          <p class="mb-0 align-self-center logo-compact">MARKETPLACE CATERING</p>
          <p class="mb-0 align-self-center brand-title" style="max-width:100%;">MARKETPLACE CATERING</p>
      </a>

      <div class="nav-control">
          <div class="hamburger">
              <span class="line"></span><span class="line"></span><span class="line"></span>
          </div>
      </div>
  </div>
  <!--**********************************
            Nav header end
        ***********************************-->

  <!--**********************************
            Header start
        ***********************************-->
  <div class="header">
      <div class="header-content">
          <nav class="navbar navbar-expand">
              <div class="collapse navbar-collapse justify-content-between">
                  <div class="header-left">
                      {{-- <div class="search_bar dropdown">
                          <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                              <i class="mdi mdi-magnify"></i>
                          </span>
                          <div class="dropdown-menu p-0 m-0">
                              <form>
                                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                              </form>
                          </div>
                      </div> --}}
                  </div>

                  <ul class="navbar-nav header-right">

                      <li class="nav-item dropdown header-profile">
                          <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                              <i class="mdi mdi-account"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                              <div class="dropdown-item mb-2">
                                  <i class="mdi mdi-account"></i>
                                  <span class="ml-2">{{auth()->user()->nama_lengkap}} </span>
                              </div>
                              <a href="{{ url('/logout') }}" class="dropdown-item">
                                  <i class="icon-key"></i>
                                  <span class="ml-2">Logout </span>
                              </a>
                          </div>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
  </div>
  <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
