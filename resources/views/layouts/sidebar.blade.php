<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile border-bottom">
      <a href="#" class="nav-link flex-column">
        <div class="nav-profile-image">
          <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile" />
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
          <span class="font-weight-semibold mb-1 mt-2 text-center">{{ Auth::user()->name }}</span>
        </div>
      </a>
    </li>
    <li class="nav-item pt-3">
      <a class="nav-link d-block" href="/">
        <img class="sidebar-brand-logo" width="160px" src="{{ asset('assets/images/1.png') }}" alt="" />
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="mdi mdi-view-dashboard menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    @if (Auth::user()->role=='admin')
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#masterdata" aria-expanded="false" aria-controls="masterdata">
        <i class="mdi mdi-database menu-icon"></i>
        <span class="menu-title">Master Data</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="masterdata">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/pegawai">Data Pegawai</a></li>
          <li class="nav-item"> <a class="nav-link" href="TamplateSurat">Tamplate Surat</a></li>
        </ul>
      </div>
    </li>
    @endif
    @if (Auth::user()->role=='pegawai')
    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="mdi mdi-account-card-details menu-icon"></i>
        <span class="menu-title">Profile</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#surat" aria-expanded="false" aria-controls="surat">
        <i class="mdi mdi-email menu-icon"></i>
        <span class="menu-title">Surat</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="surat">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#">Pembuatan Surat</a></li>
          <li class="nav-item"> <a class="nav-link" href="PengajuanSurat">Pengajuan Surat</a></li>
        </ul>
      </div>
    </li>
    @endif
  </ul>
</nav>
