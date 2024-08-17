 <!-- partial:partials/_horizontal-navbar.html -->
 <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="search">
                      <i class="mdi mdi-magnify"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              
              <li class="nav-item nav-profile dropdown mr-0 mr-sm-2">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                  <img src="https://via.placeholder.com/40x40" alt="profile"/>
                  <span class="nav-profile-name">Mohsin Shaikh</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  
                  <a class="dropdown-item">
                    <i class="mdi mdi-logout text-primary"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a class="nav-link" href="{{route('provinces.index')}}">
                <i class="mdi mdi-home-outline menu-icon"></i>
                <span class="menu-title">Provinces</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('divisions.index')}}">
                <i class="mdi mdi-airplay menu-icon"></i>
                <span class="menu-title">Divisions</span>
              </a>
            </li>
            
            
            <li class="nav-item">
            <a class="nav-link" href="{{route('provinces.index')}}">
                <i class="mdi mdi-airplay menu-icon"></i>
                <span class="menu-title">Districts</span>
              </a>
            </li>
            
            
            <li class="nav-item">
            <a class="nav-link" href="{{route('provinces.index')}}">
                <i class="mdi mdi-airplay menu-icon"></i>
                <span class="menu-title">Tehsils</span>
              </a>
            </li>
            
            
            <li class="nav-item">
            <a class="nav-link" href="{{route('provinces.index')}}">
                <i class="mdi mdi-airplay menu-icon"></i>
                <span class="menu-title">Users</span>
              </a>
            </li>
            
          </ul>
        </div>
      </nav>
    </div>