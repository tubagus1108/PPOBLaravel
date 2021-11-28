<header id="topnav">
  <!-- Topbar Start -->
  <div class="navbar-custom">
      <div class="container-fluid">
          <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>
                @if (Auth::user() == true)
                    <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('assets/images/users/avatar-1.png')}}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                
                                <!-- item-->
                                <a href="user/pengaturan-akun" class="dropdown-item notify-item">
                                    <i class="ti-settings m-r-5 text-primary"></i>
                                    <span>Pengaturan Akun</span>
                                </a>

                                <!-- item-->
                                <a href="" class="dropdown-item notify-item">
                                    <i class="fa fa-wallet text-primary"></i>
                                    <span>Penggunaan Saldo</span>
                                </a>

                                <!-- item-->
                                <a href="" class="dropdown-item notify-item">
                                    <i class="fa fa-history text-primary"></i>
                                    <span>Aktifitas Akun</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="{{route('logout')}}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    <span>Keluar</span>
                                </a>
                            </div>
                    </li> 
                @endif
          </ul>

          <!-- LOGO -->
          <div class="logo-box">
              <a href="" class="logo">
                  <span class="logo-large"><i class="mdi mdi-cart"></i> EvolutionPedia</span>
              </a>
          </div>

          <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
              
          </ul>
      </div> <!-- end container-fluid-->
  </div>
  <div class="topbar-menu">
      <div class="container-fluid">
          <div id="navigation">
              <!-- Navigation Menu-->
              <ul class="navigation-menu">
                  <!-- <li class="has-submenu">
                      <a class="nav-link dropdown-toggle waves-effect" href="admin"><i class="fa fa-user text-primary"></i> Halaman Admin</a>
                  </li>   -->
                  <!-- <li class="has-submenu">
                      <a class="nav-link dropdown-toggle waves-effect" href="#"><i class="fa fa-users text-primary"></i>Menu Staff<i class="mdi mdi-chevron-down"></i></a>
                      <ul class="submenu">
                          <li>
                              <a href="staff/tambah-pengguna">
                              <i class="mdi mdi-account-plus"></i>
                              <span>Tambah Pengguna</span>
                              </a>
                          </li>
                          <li>
                              <a href="staff/transfer-saldo">
                              <i class="fa fa-exchange-alt"></i>
                              <span>Transfer Saldo</span>
                              </a>
                          </li>
                          <li>
                              <a href="staff/kode-undangan">
                              <i class="fa fa-key mr-1"></i>
                              <span>Buat Kode Undangan</span>
                              </a>
                          </li>
                          <li>
                              <a href="staff/kode-voucher">
                              <i class="fe-shopping-bag mr-1"></i>
                              <span>Buat Kode Voucher</span>
                              </a>
                          </li>
                          <li>
                              <a href="staff/kelola-uplink">
                              <i class="fa fa-history"></i>
                              <span>Kelola Uplink</span>
                              </a>
                          </li>
                          <li>
                              <a href="staff/kelola-transfer-saldo">
                              <i class="fa fa-history"></i>
                              <span>Kelola Transfer Saldo</span>
                              </a>
                          </li>
                      </ul>
                  </li> -->
                    <li class="has-submenu">
                        <a class="nav-link dropdown-toggle waves-effect" href="{{route('landing')}}">
                            <i class="fa fa-home text-primary"></i>Halaman Utama</a>
                    </li>
                    @if (Auth::user() == true)
                    <li class="has-submenu">
                        <a class="nav-link dropdown-toggle waves-effect" href="user/hall-of-fame">
                            <i class="fa fa-bullhorn text-primary"></i>Hall Of Fame</a>
                    
                            <li class="has-submenu">
                        <a class="nav-link dropdown-toggle waves-effect" href="#"> <i class="fa fa-cart-plus text-primary"></i>Riwayat Pemesanan<i class="mdi mdi-chevron-down"></i></a>
                        <ul class="submenu">
                            <li>
                                <a href="sosial-media/riwayat">
                                    <i class="fe-instagram mr-1"></i>
                                    <span>Sosial Media</span>
                                </a>
                            </li>
                            <li>
                                <a href="pulsa/riwayat">
                                    <i class="mdi mdi-cellphone-android mr-1"></i>
                                    <span>Pulsa & PPOB</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if (Auth::user() == true)
                    <li class="has-submenu">
                        <a class="nav-link dropdown-toggle waves-effect" href="#"> <i class="fa fa-credit-card text-primary"></i>Deposit Saldo<i class="mdi mdi-chevron-down"></i></a>
                        <ul class="submenu">
                            <li>
                                <a href="deposit-saldo">
                                    <i class="fa fa-balance-scale"></i>
                                    <span> Deposit Baru</span>
                                </a>
                            </li>
                            <li>
                                <a href="deposit-saldo/redem-voucher">
                                    <i class="fe-shopping-bag mr-1"></i>
                                    <span>Kode Voucher</span>
                                </a>
                            </li>
                            <li>
                                <a href="deposit-saldo/riwayat">
                                    <i class="fa fa-history"></i>
                                    <span> Riwayat Deposit</span>
                                </a>
                            </li>                                    
                        </ul>
                    </li>
                    @endif
                    @if (Auth::user() == true)
                    <li class="has-submenu">
                        <a class="nav-link dropdown-toggle waves-effect" href="tiket">
                            <i class="fa fa-envelope text-primary"></i>Tiket</a>
                    </li>
                    @endif
                    @if (Auth::user() == true)
                    <li class="has-submenu">
                        <a class="nav-link dropdown-toggle waves-effect" href="#"> <i class="fa fa-file text-primary"></i>Halaman<i class="mdi mdi-chevron-down"></i></a>
                        <ul class="submenu">
                            <li>
                                <a href="halaman/api-dokumentasi">
                                    <i class="fa fa-code"></i>
                                    <span>API Dokumentasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="halaman/kontak">
                                    <i class="fe-phone-call mr-1"></i>
                                    <span>Hubungi Kami</span>
                                </a>
                            </li>
                            <li>
                                <a href="halaman/staff">
                                    <i class="fa fa-users"></i>
                                    <span>Staff Kami</span>
                                </a>
                            <li>
                                <a href="halaman/tos">
                                    <i class="mdi mdi-information-variant"></i>
                                    <span>Ketentuan Layanan</span>
                                </a>
                            </li>
                            <li>
                                <a href="halaman/faq">
                                    <i class="fa fa-edit"></i>
                                    <span>Pertanyaan Umum</span>
                                </a>
                            </li>
                            <li>
                                <a href="halaman/tentang-status">
                                    <i class="mdi mdi-alert-outline"></i>
                                    <span>Penjelasan Status</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    
                        <!-- <li class="has-submenu">
                            <a class="nav-link dropdown-toggle waves-effect" href="">
                                <i class="fa fa-home text-primary"></i>Halaman Utama</a>
                        </li> -->
                        @if (Auth::user() == false)
                        <li class="has-submenu">
                            <a class="nav-link dropdown-toggle waves-effect" href="{{url('auth/login')}}">
                            <i class="mdi mdi-login text-primary"></i>Masuk</a>
                        </li>
                        <li class="has-submenu">
                            <a class="nav-link dropdown-toggle waves-effect" href="{{url('auth/register')}}">
                                <i class="fa fa-user-plus text-primary"></i>Daftar</a>
                        </li>
                        <li class="has-submenu">
                            <a class="nav-link dropdown-toggle waves-effect" href="{{url('auth/forgot-password')}}">
                                <i class="fa fa-key text-primary"></i>Lupa Kata Sandi</a>
                        </li>
                        @endif
                        @if (Auth::user() == false)
                        <li class="has-submenu">
                            <a class="nav-link dropdown-toggle waves-effect" href="#"> <i class="fa fa-list text-primary"></i>Daftar Harga<i class="mdi mdi-chevron-down"></i></a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{route('price-smm')}}">
                                        <i class="fe-instagram mr-1"></i>
                                        <span>Sosial Media</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="list-pricesppob.html">
                                        <i class="mdi mdi-cellphone-android mr-1"></i>
                                        <span>Pulsa & PPOB</span>
                                    </a>
                                </li>
                                <li>                                                                       
                            </ul>
                        </li>
                        @endif
                        @if (Auth::user() == false)
                        <li class="has-submenu">
                            <a class="nav-link dropdown-toggle waves-effect" href="#"> <i class="fa fa-file text-primary"></i>Halaman<i class="mdi mdi-chevron-down"></i></a>
                            <ul class="submenu">
                                <li>
                                    <a href="kontak.html">
                                        <i class="fe-phone-call mr-1"></i>
                                        <span>Hubungi Kami</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('tos')}}">
                                        <i class="mdi mdi-information-variant"></i>
                                        <span>Ketentuan Layanan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="halaman/faq">
                                        <i class="fa fa-edit"></i>
                                        <span>Pertanyaan Umum</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
              </ul>
              <!-- End navigation menu -->

              <div class="clearfix"></div>
          </div>
          <!-- end #navigation -->
      </div>
      <!-- end container -->
  </div>
  <!-- end navbar-custom -->
</header>