
<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ asset('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#"
                data-toggle="dropdown" aria-expanded="false">
                <small class="designation text-muted">{{ Auth::user()->level }}</small>
                @if (Auth::user()->status_akun == 'Sudah Verifikasi')
                    <span><i class="mdi mdi-check-decagram"></i></span>
                @else
                    <span><i class="mdi mdi-alert"></i></span>
                @endif
              </a>
            </div>
          </div>
        </div>
        <h4 class="menu-title">Saldo : Rp. {{ Auth::user()->balance}}</h4>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('home-member') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    {{-- <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded=""
        aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-cart"></i>
        <span class="menu-title">Order</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="basic-ui">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item ">
                <a class="nav-link" href="">Pembelian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Riwayat Pemesanan</a>
            </li>
        </ul>
      </div>
    </li> --}}
    <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="menu-icon mdi mdi-history"></i>
          <span class="menu-title">Riwayat Pemesanan</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="menu-icon mdi mdi-bank"></i>
          <span class="menu-title">Deposit</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="menu-icon mdi mdi-trophy-variant"></i>
          <span class="menu-title">Peringkat</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="menu-icon mdi mdi mdi-message"></i>
          <span class="menu-title">Tiket</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('price') }}">
          <i class="menu-icon mdi mdi mdi-cash-multiple"></i>
          <span class="menu-title">Daftar Harga</span>
        </a>
    </li>
  </ul>
</nav>
