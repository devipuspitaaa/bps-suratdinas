<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile border-bottom">
        <a href="#" class="nav-link flex-column">
          <div class="nav-profile-image">
            <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile" />
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
            <span class="font-weight-semibold mb-1 mt-2 text-center">Ririn Mayangsari</span>
          </div>
        </a>
      </li>
      <li class="nav-item pt-3">
        <a class="nav-link d-block" href="/">
          <img class="sidebar-brand-logo" width="160px" src="{{ asset('assets/images/1.png') }}" alt="" />
        </a>

      </li>
      <li class="pt-2 pb-1">
        <span class="nav-item-head">Pages</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="mdi mdi-compass-outline menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
          <span class="menu-title">Master Data</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="/pegawai">Data Pegawai</a>
            </li>
          </ul>
        </div>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="#">Tamplate Surat</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav> 