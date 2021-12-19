<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Evoltion-Pedia Adalah Sebuah Platform Bisnis Yang Menyediakan Berbagai Layanan Multy Media Marketing Yang Bergerak Terutama Di Indonesia. Dengan Bergabung Bersama Kami, Anda Dapat Menjadi Penyedia Jasa Sosial Media Atau Reseller Sosial Media Seperti Jasa Penambah Followers, Likes, Views, Subscribe, Dll. Saat Ini Tersedia Berbagai Layanan Untuk Sosial Media Terpopuler Seperti Instagram, Facebook, Twitter, Youtube, Dll. Dan Kamipun Juga Menyediakan Panel Pulsa & PPOB Seperti Pulsa All Operator, Paket Data, Saldo Gojek/Grab, Token PLN, All Voucher Game Online, Dll.">
    <title>{{env('APP_NAME')}} | HOME</title>
    <link rel="stylesheet" href="{{asset('landingpage/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('landingpage/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('landingpage/css/style.css')}}" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style type="text/css">
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #fff;
    }
    .preloader .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        font: 14px arial;
    }
    </style>
</head>
<body>
    <div class="preloader">
            <div class="loading">
                <img src="assets/images/diamond.gif" width="150">
                <center><p>Tunggu Sebentar...</p></center>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid">
           

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#features" class="nav-link">Kelebihan Kami</a>
                        </li>
                        <li class="nav-item">
                            <a href="#pricing" class="nav-link">Daftar Harga</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Kontak Kami</a>
                        </li>
                    </ul>
                    <a href="{{url('auth/login')}}" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-login"></i> Masuk</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- home start -->
        <section class="bg-home bg-gradient" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="home-title mo-mb-20">
                                    <h1 class="mb-4 text-black"><i class="mdi mdi-hexagon-multiple"></i>{{env('APP_NAME')}}</h1>
                                    <p class="text-black-50 home-desc mb-5">{{env('APP_NAME')}}  | Distributor Pulsa & SMM H2H Murah Di Indonesia adalah Pusat Reseller Produk Digital penyedia Layanan Social Media dan Pulsa All Operator seperti Kebutuhan Instagram, Facebook, Youtube, Paket Internet, Voucher Game, dll.</p>
                                    <a href="{{url('auth/login')}}" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-login"></i> Masuk</a> 
                                    <a href="{{url('auth/register')}}" class="btn btn-light"><i class="mdi mdi-account-plus"></i> Daftar</a>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
            </div>
        </section>
        <!-- home end -->
        <!-- clients start -->
        <section>
            <div class="container-fluid">
                <div class="clients p-4 bg-white">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <h2>10</h2>
                            <p class="text-muted"> Pengguna Aktif</p>
                 
                        </div>
                        <div class="col-md-4">
                            <h2>10</h2>
                            <p class="text-muted">Total Pesanan SosMed</p>
                        </div>
                        <div class="col-md-4">
                            <h2>10</h2>
                            <p class="text-muted">Total Pesanan Pulsa PPOB</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end container-fluid -->
        </section>
        <!-- clients end -->

        <!-- features start -->
        <section class="section-sm" id="features">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <h1><img src="{{asset('landingpage/assets/images/plan.png')}}" width="50" height="50" alt="benefits"></h1>
                            </div>
                            <h4 class="mb-2">Layanan Terbaik</h4>
                            <p class="text-muted">Kami Menyediakan Berbagai Layanan Terbaik Untuk Kebutuhan Sosial Media & Pulsa PPOB Untuk Anda.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <h1><img src="{{asset('landingpage/assets/images/megaphone.png')}}" width="50" alt="benefits"></h1>
                            </div>
                            <h4 class="mb-2">Pelayanan Bantuan</h4>
                            <p class="text-muted">Kami Selalu Siap Membantu Jika Anda Membutuhkan Kami Dalam Penggunaan Layanan Kami.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <h1><img src="{{asset('landingpage/assets/images/admin.png')}}" width="50" alt="benefits"></h1>
                            </div>
                            <h4 class="mb-2">Desain Web Responsive</h4>
                            <p class="text-muted">Kami Menggunakan Desain Website Yang Dapat Diakses Dari Berbagai <i>Device</i>, Daik Smartphone Android Maupun Deskop.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <h1><img src="{{asset('landingpage/assets/images/api.png')}}" width="50" alt="benefits"></h1>
                            </div>
                            <h4 class="mb-3">API Pengguna</h4>
                            <p class="text-muted">Tersedia API Beserta Dokumentasinya Untuk Reseller Anda.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <h1><img src="{{asset('landingpage/assets/images/debit-card.png')}}" width="50" alt="benefits"></h1>
                            </div>
                            <h4 class="mb-3">Deposit Saldo</h4>
                            <p class="text-muted">Deposit Otomatis 24 Jam, Memudahkan Anda Deposit Kapan Saja.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-4">
                                <h1><img src="{{asset('landingpage/assets/images/timeline.png')}}" width="50" alt="benefits"></h1>
                            </div>
                            <h4 class="mb-3">Kemudahan Penggunaan</h4>
                            <p class="text-muted">Kami Menyediakan Fitur Yang Mudah Di Mengerti Oleh Para Pengguna.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
                             

        <!-- features start -->
        <section class="section bg-light">
            <div class="container-fluid">

               

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="feature-img">
                            <img src="{{asset('landingpage/assets/images/img-2.png')}}" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5 features-content">
                            <div class="features-icon mb-4">
                                <i class="mdi mdi-chart-bar h4 text-white text-center"></i>
                            </div>
                            <h3 class="mb-3">Sistem Pemesanan Di {{env('APP_NAME')}}</h3>
                            <p class="text-muted mb-4">
                                Sistem Pemesanan Di {{env('APP_NAME')}} Sangat Direkomendasikan karena seluruhnya berjalan secara otomatis dan online 24 Jam, Jaramg sekali adanya gangguan pada server kami.
                            </p>
                            <p class="text-muted mb-4">
                                Bergabunglah bersama kami dan raih kesuksesan anda!
                                </p>
                            <a href="{{url('auth/register')}}" class="btn btn-primary btn-sm">Daftar Sekarang <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </section>
        <!-- features end -->

        <!-- pricing start -->
        <section class="section pb-0 bg-gradient" id="pricing">
            <div class="bg-shape">
                <img src="" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h3 class="text-white">Harga Kode Undangan</h3>
                            <p class="text-white-50">Berikut adalah harga kode undangan.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="pricing-plan bg-white p-4 mt-4">
                                    <div class="pricing-header text-center">
                                        <h5 class="plan-title text-uppercase mb-4">MEMBER</h5>
                                        <h1><sup><small>Rp</small></sup>15.000</h1>
                                        <div class="plan-duration text-muted">GOPAY,OVO,DANA</div>
                                    </div>
                                    <ul class="list-unstyled pricing-list mt-4">
                                        <li>
                                            <p>Full Akses Website</p>
                                        </li>
                                        <li>
                                            <p> Full Akses API</p>
                                        </li>
                                        <li>
                                            <p>Bantuan Pemasangan</p>
                                        </li>
                                        <li>
                                            <p>Bonus Saldo Rp 5.000</p>
                                        </li>
                                        <li><p>Tidak Dapat membuat kode undangan</p></li>
                                    </ul>
                                    <div class="text-center mt-5">
                                        <a href="{{url('auth/register')}}" class="btn btn-primary">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                             <div class="col-lg-4">
                                <div class="pricing-plan bg-white p-4 mt-4">
                                    <div class="pricing-header text-center">
                                        <h5 class="plan-title text-uppercase mb-4">AGEN</h5>
                                        <h1><sup><small>Rp</small></sup>60.000</h1>
                                        <div class="plan-duration text-muted">GOPAY,OVO,DANA</div>
                                    </div>
                                    <ul class="list-unstyled pricing-list mt-4">
                                        <li>
                                            <p>Full Akses Website</p>
                                        </li>
                                        <li>
                                            <p>Full Akses API</p>
                                        </li>
                                        <li>
                                            <p>Bantuan Pemasangan</p>
                                        </li>
                                        <li>
                                            <p>Bonus Saldo Rp 20.000</p>
                                        </li>
                                        <li>
                                            <p>Hak Khusus membuat kode undangan</p>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-5">
                                        <a href="{{url('auth/register')}}" class="btn btn-primary">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-4">
                                <div class="pricing-plan bg-white p-4 mt-4">
                                    <div class="pricing-header text-center">
                                        <h5 class="plan-title text-uppercase mb-4">RESELLER</h5>
                                        <h1><sup><small>Rp</small></sup>120.000</h1>
                                        <div class="plan-duration text-muted">GOPAY,OVO,DANA</div>
                                    </div>
                                    <ul class="list-unstyled pricing-list mt-4">
                                        <li>
                                            <p>Full Akses Website</p>
                                        </li>
                                        <li>
                                            <p>Full Akses API</p>
                                        </li>
                                        <li>
                                            <p>Bantuan Pemasangan</p>
                                        </li>
                                        <li>
                                            <p>Bonus Saldo Rp 40.000</p>
                                        </li>
                                        <li>
                                            <p>Hak Khusus membuat kode undangan</p>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-5">
                                        <a href="{{url('auth/register')}}" class="btn btn-primary">Daftar Sekarang</a>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end col-xl-10 -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- pricing end -->
                      
        <!-- contact start -->
        <section class="section pb-0 bg-gradient" id="contact">
            <div class="bg-shape">
                <img src="" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center mb-4">
                            <h3 class="text-white">Butuh sesuatu bantuan ?</h3>
                            <p class="text-white-50">Silahkan Hubungi kontak kami dibawah jika butuh bantuan.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row mb-4">
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-email-outline text-info h2"></i>
                            </div>
                            <div class="contact-details text-white">
                                <h5 class="text-white">E-mail</h5>
                                <p class="text-white-50">hello@evolution.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-cellphone-iphone text-info h2"></i>
                            </div>
                            <div class="contact-details">
                                <h5 class="text-white">WhatsApp</h5>
                                <p class="text-white-50">08887366966</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-map-marker text-info h2"></i>
                            </div>
                            <div class="contact-details">
                                <h5 class="text-white">Alamat</h5>
                                <p class="text-white-50">Sumatra Utara, Medan</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                
                    </div>
                    <!-- end col -->
              
            <!-- end container-fluid -->
        </section>
        <!-- contact end -->

        <!-- footer start -->
        <footer class="bg-dark footer">
            <div class="container-fluid">
                <div class="row mb-5">
                    
                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">About</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Home</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Features</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Faq</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Clients</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">Social Media</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Facebook </a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Twitter</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Behance</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Dribble</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">Support</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Help & Support</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">More Info</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Pricing</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>For Marketing</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>For Agencies</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Our Apps</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left pull-none">
                            <center><p class="text-white-50">{{env('APP_NAME')}} © ODEVS Code 2021</p></center>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </footer>
        <!-- footer end -->
        
        <!-- Back to top -->    
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>
        
        <!-- javascript -->
        <script src="{{asset('landingpage/js/jquery.min.js')}}"></script>
        <script src="{{asset('landingpage/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('landingpage/js/jquery.easing.min.js')}}"></script>
        {{-- <script src="{{asset('landingpage/js/scrollspy.min.js')}}"></script> --}}

        <!-- custom js -->
        <script src="{{asset('landingpage/js/app.js')}}"></script>
        <script>
            $(document).ready(function(){
                $(".preloader").fadeOut();
            })
        </script>
</body>
</html>