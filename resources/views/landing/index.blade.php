<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ env('APP_NAME') }}" />
    <meta name="keywords" content="{{ env('APP_NAME') }}, smm ppob, ppob termurah, smm terbaik" />
    <meta name="author" content="{{ env('APP_NAME') }}" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assetslanding/images/favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('assetslanding/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('assetslanding/css/materialdesignicons.min.css.kos') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assetslanding/css/unicons.css.kos') }}">
    <!-- Magnific -->
    <link href="{{ asset('assetslanding/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('assetslanding/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetslanding/css/owl.theme.default.min.css') }}" />
    <!-- Main Css -->
    <link href="{{ asset('assetslanding/css/main.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('assetslanding/css/main.css') }}" rel="stylesheet" id="color-opt">
</head>
<body>
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="">{{ env('APP_NAME') }}<span class="text-primary">.</span></a>
        </div>
        <div class="buy-button">
            <a href="" class="btn btn-primary">Register</a>
        </div>
        <!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Tentang Kami</a></li>
                <li><a href="">List Harga</a></li>
                <li><a href="">FAQ</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Help Center</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="">Kontak </a></li>
                        <li><a href="">Terms & Conditions</a></li>
                    </ul>
                </li>
            </ul>
            <!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="" target="_blank" class="btn btn-primary">Register</a>
            </div>
            <!--end login button-->
        </div>
    </div>
    <!--end container-->
</header>

<section class="bg-half-100 d-table w-100" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7">
                <div class="title-heading mt-4">
                    <div class="alert alert-transparent alert-pills shadow" role="alert">
                        <span class="badge badge-pill badge-primary mr-1">Hanya di</span>
                        <span class="content">{{ env('APP_URL') }}</span>
                    </div>
                    <h1 class="heading mb-3">
                        Butuh Produk Digital? <br />
                        <span class="text-primary">{{ env('APP_NAME') }}.</span> aja
                    </h1>
                    <p class="para-desc text-muted">
                        {{ env('APP_NAME') }} | Distributor Pulsa & SMM H2H Murah Di Indonesia
                        adalah Pusat Reseller Produk Digital penyedia Layanan Social Media dan Pulsa All
                        Operator seperti Kebutuhan Instagram, Facebook, Youtube, netflix Premium,youtube premium,spotify premium, dan
                        sebagainya.
                    </p>
                    <div class="mt-4">
                        <a href="{{ route('login') }}" class="btn btn-outline-danger mt-2"><i class="mdi mdi-login"></i>
                            Login</a>
                        <a href="#" target="_blank"
                            class="btn btn-outline-primary mt-2"><i class="mdi mdi-google-play"></i> Play Store</a>
                    </div>
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<div class="position-relative">
    <div class="shape overflow-hidden text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Cara Melakukan Order</h4>
                    <p class="text-muted para-desc mx-auto mb-0">
                        3 Langkah mudah untuk menggunakan layanan di
                        <span class="text-primary font-weight-bold"><{{ env('APP_NAME') }}</span>.
                    </p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-md-4 mt-4 pt-2">
                <div class="card work-process border-0 rounded shadow">
                    <div class="card-body features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="{{ asset('assetslanding/images/icon/account.svg') }}" class="avatar avatar-small" alt="" />
                        </div>
                        <h4 class="title">Daftar Menjadi Member</h4>
                        <p class="text-muted para">
                            Pendaftaran member {{ env('APP_NAME') }} gratis, mudah, & memerlukan
                            aktivasi untuk dapat mengaktifkan akun anda
                        </p>
                        <ul class="list-unstyled d-flex justify-content-between mb-0 mt-2">
                            <li class="step-icon">
                                <i class="mdi mdi-chevron-double-right mdi-36px"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 pt-2">
                <div class="card work-process border-0 rounded shadow">
                    <div class="card-body features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="{{ asset('assetslanding/images/icon/bank.svg') }}" class="avatar avatar-small" alt="" />
                        </div>
                        <h4 class="title">Deposit Saldo</h4>
                        <p class="text-muted para">
                            Deposit saldo 24 jam online, Saldo Otomasis masuk, Bank
                            transfer lengkap, Minimal deposit hanya 10rb
                        </p>
                        <ul class="list-unstyled d-flex justify-content-between mb-0 mt-2">
                            <li class="step-icon">
                                <i class="mdi mdi-chevron-double-right mdi-36px"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 pt-2">
                <div class="card work-process border-0 rounded shadow">
                    <div class="card-body features text-center">
                        <div class="image position-relative d-inline-block">
                            <img src="{{ asset('assetslanding/images/icon/shop.svg') }}" class="avatar avatar-small" alt="" />
                        </div>
                        <h4 class="title">Transaksi</h4>
                        <p class="text-muted para">
                            Setelah saldo terisi, langsung bisa transaksi produk digital
                            yang telah kami sediakan.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-between mb-0 mt-2">
                            <li class="step-icon">
                                <i class="mdi mdi-check-all mdi-36px"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<!-- Features Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Mengapa {{ env('APP_NAME') }}?</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">
                        Berbagai Alasan untuk Memilih {{ env('APP_NAME') }} Sebagai Partner
                        Bisnis Anda, Transaksi Aman & Nyaman Dengan
                        <span class="text-primary font-weight-bold">{{ env('APP_NAME') }}</span>
                    </p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 col-md-8">
                <div mt-4 pt-2 class="row">
                    <div class="col-md-6 col-12">
                        <div class="media features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                <i data-feather="check-circle" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="title">Google Play Store</h4>
                                <p class="text-muted para mb-0">
                                    Anda dapat mengunduh aplikasi resmi kami dalam
                                    <span class="text-primary font-weight-bold">Google Play store</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="media features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                <i data-feather="credit-card" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="title">Pembayaran Otomatis</h4>
                                <p class="text-muted para mb-0">
                                    Deposit saldo dapat diverifikasi otomatis tanpa harus
                                    konfirmasi pembayaran.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="media features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                <i data-feather="refresh-cw" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="title">Pembaruan</h4>
                                <p class="text-muted para mb-0">
                                    Layanan selalu diperbarui agar lebih ditingkatkan dan
                                    memberi Anda pengalaman terbaik.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="media features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                <i data-feather="upload-cloud" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="title">Proses Otomatis</h4>
                                <p class="text-muted para mb-0">
                                    Setelah anda melakukan order, secara otomatis server akan
                                    memproses pesanan anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="media features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                <i data-feather="smartphone" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="title">Fully Responsive</h4>
                                <p class="text-muted para mb-0">
                                    Website kami dapat diakses melalui berbagai
                                    device/perangkat baik PC, tablet, maupun mobile phone.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="media features pt-4 pb-4">
                            <div class="icon text-center rounded-circle text-primary mr-3 mt-2">
                                <i data-feather="heart" class="fea icon-ex-md text-primary"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="title">Layanan Berkualitas</h4>
                                <p class="text-muted para mb-0">
                                    Kami menyediakan berbagai layanan terbaik untuk kebutuhan
                                    Sosial Media & Pulsa Untuk Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Feature End -->
{{-- Feature Covid - 19 --}}
<section class="section" id="data-covid">
    <div class="container">
        <div class="row">
            <div class="col-12 justify-content-center">
                <div class="section-title mb-4 pb-2">
                    <h2 class="text-center">Data Covid - 19 di {{ $json[0]['name'] }}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 text-center">
                <h5>Positif : {{ $json[0]['positif'] }}</h5>
                <p>Update Terakhir {{ $realtime_date }}</p>
            </div>
            <div class="col-4 text-center">
                <h5>Sembuh : {{ $json[0]['sembuh'] }}</h5>
                <p>Update Terakhir {{ $realtime_date }}</p>
            </div>
            <div class="col-4 text-center">
                <h5>Meninggal : {{ $json[0]['meninggal'] }}</h5>
                <p>Update Terakhir {{ $realtime_date }}</p>
            </div>
            <!--end col-->
        </div>
    </div>
</section>
{{-- End Feature Covid - 19 --}}
<!-- Show Brand Start -->
<section class="section">
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Produk</h4>
                    <p class="text-muted para-desc mx-auto mb-0">
                        <span class="text-primary font-weight-bold">{{ env('APP_NAME') }}</span>
                        Menyediakan berbagai produk (Pulsa All operator, Pulsa Internet,
                        Voucher Game Online, Token Listrik dan lain - lain).
                    </p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/grapari.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/axiata.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/indosat.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/smartfren.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/tri.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/Wifi.id.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/gplay.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/token.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/gopay.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/dana.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('assetslanding/images/operator/ovo.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="page-job-detail.html">
                    <div class="media key-feature align-items-center p-3 rounded shadow">
                        <div class="media-body text-center">
                            <img src="{{ asset('images/operator/grab.png') }}" class="avatar avatar-ex-medium-mx" alt="" />
                        </div>
                    </div>
                </a>
            </div>
            <!--end col-->

            <div class="col-12 text-center mt-4 pt-2">
                <a href="#" class="btn btn-primary">Lihat Semua <i class="mdi mdi-chevron-right"></i></a>
            </div>
        </div>
        <!--end row-->
    </div>
</section>
<!-- Show Brand End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->
<!-- Testi n Download cta start -->
<section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="customer-testi" class="owl-carousel owl-theme">
                    <div class="card customer-testi border-0 text-center">
                        <div class="card-body">
                            <img src="https://lh3.googleusercontent.com/a-/AOh14GhesexQT9MeAiic2Z4PIyqopuY-Z6_9Ezd5ce5m=w48-h48-n-rw"
                                class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="" />
                            <p class="text-muted mt-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, fuga incidunt. Dolore ut debitis quam facilis minima, quibusdam cum reiciendis. Dolorem totam fugiat reiciendis accusantium soluta, quam odio ea impedit?
                            </p>
                            <h6 class="text-primary">- ALIF PUTRA DARMAWAN</h6>
                        </div>
                    </div>

                    <div class="card customer-testi border-0 text-center">
                        <div class="card-body">
                            <img src="https://lh3.googleusercontent.com/a-/AOh14GhVNChxd6JhocTmJtP_Pt80k3tcPkL2e0mWVvmEkw=w48-h48-n-rw"
                                class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="" />
                            <p class="text-muted mt-4">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis odio, iure expedita corrupti officia, totam maxime magni ex ut pariatur eligendi, praesentium iusto voluptas id! Quia voluptatem reiciendis ab perspiciatis.
                            </p>
                            <h6 class="text-primary">- Aman Skuyy</h6>
                        </div>
                    </div>

                    <div class="card customer-testi border-0 text-center">
                        <div class="card-body">
                            <img src="https://lh3.googleusercontent.com/a-/AOh14Ghhvi7YMflH8i-EPjuShNL46KGW8TTqebWQElC7WA=w48-h48-n-rw"
                                class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="" />
                            <p class="text-muted mt-4">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quibusdam libero modi laboriosam. Quidem rem magni quibusdam voluptate error, harum accusamus, ipsam quasi tempore cumque consectetur ducimus molestias incidunt repellendus.
                            </p>
                            <h6 class="text-primary">- Rohid Tutorial</h6>
                        </div>
                    </div>

                    <div class="card customer-testi border-0 text-center">
                        <div class="card-body">
                            <img src="https://lh3.googleusercontent.com/-d85j2UqF6yc/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnP9IqZ9srnjSosq_-yK35H8K6-oQ/w48-h48-n-rw/photo.jpg"
                                class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="" />
                            <p class="text-muted mt-4">
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint maiores quo expedita nisi voluptatibus. Asperiores obcaecati nisi eveniet tempore, sint nemo ab eum accusantium facilis dignissimos, earum totam, laboriosam aliquam?
                            </p>
                            <h6 class="text-primary">- Adenz 11</h6>
                        </div>
                    </div>

                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title mb-4">Get the App now !</h4>
                    <p class="text-muted para-desc mx-auto">
                        Download segera
                        <span class="text-primary font-weight-bold">{{ env('APP_NAME') }}</span>
                        app, Dapatkan promo menarik yang telah kami sediakan.
                    </p>
                    <div class="mt-4">
                        <a href="/link/sibad.apk" target="_blank"
                            class="btn btn-outline-primary mt-2"><i class="mdi mdi-google-play"></i> Play Store</a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Testi n Download cta End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-footer">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->
<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a class="logo-footer" href="#">{{ env('APP_NAME') }}<span class="text-primary">.</span></a>
                <p class="mt-4">{{ env('APP_NAME') }} adalah Website
                    penyedia Layanan Social Media dan Pulsa All Operator seperti Kebutuhan Instagram, Facebook,
                    Youtube, dan sebagainya.</p>
                <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item"><a href="https://instagram.com/" target="_blank"
                                class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="https://instagram.com/" target="_blank"
                                class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a href="#"
                                class="rounded"><i data-feather="at-sign" class="fea icon-sm fea-social"></i></a></li>
                        <li class="list-inline-item"><a
                                href="https://api.whatsapp.com/send?phone=6282171686143&text=Hallo%20Customer%20Services%20Go%Pulsa&source=&data=&app_absent="
                                target="_blank" class="rounded"><i data-feather="message-circle"
                                    class="fea icon-sm fea-social"></i></a></li>
                    </ul>
                <!--end icon-->
            </div>
            <!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Company</h4>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="#" class=" text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                            Tentang Kami</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                            List Harga</a></li>
                    <li><a href="/auth/reset-password" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                            Forgot Password</a></li>
                    <li><a href="/auth/register" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                            Register</a></li>
                </ul>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h4 class="text-light footer-head">Usefull Links</h4>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms &
                            Conditions</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
                            FAQ</a></li>
                </ul>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</footer>
<!--end footer-->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left">
                    <p class="mb-0">© 2020 {{ env('APP_NAME') }}; . Design with <i class="mdi mdi-heart text-danger"></i>
                        by <a href="https://go-pulsa.web.id/" target="_blank"
                            class="text-success">RAP Code</a>.
                    </p>
                </div>
            </div>
            <!--end col-->

            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <ul class="list-unstyled payment-cards text-sm-right mb-0">
                    <li class="list-inline-item"><a href="javascript:void(0)"><img class="avatar avatar-ex-sm"
                                src="{{ asset('assetslanding/images/payments/indopayment/Logo-BCA.png') }}" title="BCA"></a>
                    </li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img class="avatar avatar-ex-sm"
                                src="{{ asset('assetslanding/images/payments/indopayment/Logo-BNI.png') }}" title="BNI"></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img class="avatar avatar-ex-sm"
                                src="{{ asset('assetslanding/images/payments/indopayment/Logo-GOPAY.png') }}" title="GOPAY"></a>
                    </li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img class="avatar avatar-ex-sm"
                                src="{{ asset('assetslanding/images/payments/indopayment/Logo-OVO.png') }}" title="OVO"></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img class="avatar avatar-ex-sm"
                                src="{{ asset('assetslanding/images/payments/indopayment/Logo-Shopee-Pay.png') }}" title="Shoope Pay"></a>
                    </li>
                </ul>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</footer>
<!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i data-feather="chevron-up" class="icons d-inline-block"></i>
</a>
<!-- Back to top -->

<!-- javascript -->
<script src="{{ asset('assetslanding/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assetslanding/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assetslanding/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assetslanding/js/scrollspy.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('assetslanding/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assetslanding/js/magnific.init.js') }}"></script>
<!-- SLIDER -->
<script src="{{ asset('assetslanding/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assetslanding/js/owl.init.js') }}"></script>
<!-- Icons -->
<script src="{{ asset('assetslanding/js/feather.min.js') }}"></script>
<script src="{{ asset('assetslanding/js/unicons-monochrome.js') }}"></script>
<script src="{{ asset('assetslanding/js/bundle.js') }}"></script>
<!-- Switcher -->
<script src="{{ asset('assetslanding/js/switcher.js') }}"></script>
<!-- Main Js -->
<script src="{{ asset('assetslanding/js/app.js') }}"></script>
</body>
</html>
