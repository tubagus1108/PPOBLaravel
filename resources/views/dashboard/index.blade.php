@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <br/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success">
                <div  scrollamount="10" align="center">
                <font color="black">
                Selamat Datang Bagus, Selamat Bertransaksi & Semoga Hari Anda Menyenangkan.<br>Ayok Ikut Group <b><i class="mdi mdi-whatsapp text-primary"></i> WhatsApp</b> Biar Tau Informasi Terbaru Dari Hello World. <a class="btn btn-rounded btn-primary" href="" target="_blank"><i class="mdi mdi-whatsapp"></i> Gabung Grub WhatsApp</a></li>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-12" style="margin-top: -17px;">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="mb-0 text-primary" style="margin-top: -5px !important; margin-bottom: -10px !important;"><i class="mdi mdi-android mdi-18px"></i> Aplikasi</h4>
                        </div>
                        <div class="col-6 text-right" style="margin-top: -10px !important; margin-bottom: -10px !important;">
                            <a href="ExcellentPedia.apk" class="btn btn-primary btn-sm"> <i class="fas fa-download"></i> Download Aplikasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -17px;">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="mb-0 text-primary" style="margin-top: -5px !important; margin-bottom: -10px !important;"><i class="fa fa-wallet text-primary"></i> Rp {{ number_format(Auth::user()->balance)}}</h4>
                        </div>
                        <div class="col-6 text-right" style="margin-top: -10px !important; margin-bottom: -10px !important;">
                            <a href="{{route('deposit')}}" class="btn btn-primary btn-sm"> <i class="fas fa-plus-circle"></i> Deposit Saldo</a>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol> 
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('assets/images/slide/slide-1.jpg')}}" alt="First Slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets/images/slide/slide-2.jpg')}}" alt="Second Slide">                        
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets/images/slide/slide-3.jpg')}}" alt="Three Slide">
                        
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Sebelumnya</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Selanjutnya</span>
                    </a>
                </div>
                <br>
            </div>
            <br>
            <div class="col-md-6">
                <div class="card text-center">
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr>
                                <th>
                                    <a href="" class="text-primary">
                                        <a href="{{route('pulsa')}}" class="btn-loading"><i class="mdi mdi-cellphone-android fa-3x text-primary"></i>
                                        <a href="{{route('pulsa')}}" class="btn-loading"><h5 class="text-primary">Pulsa</h5>
                                    </a>
                                </th>
                                <th>
                                    <a href="" class="text-primary">
                                        <a href="{{route('paket-data')}}" class="btn-loading"><i class="mdi mdi-earth fa-3x text-primary"></i>
                                        <a href="{{route('paket-data')}}" class="btn-loading"><h5 class="text-primary">Paket Data Internet</h5>
                                    </a>
                                </th>
                                <th>
                                    <a href="" class="text-primary">
                                        <a href="pemesanan-baru/paket-sms-telepon" class="btn-loading"><i class="mdi mdi-phone fa-3x text-primary"></i>
                                        <a href="pemesanan-baru/paket-sms-telepon" class="btn-loading"><h5 class="text-primary">Paket SMS & Telepon</h5>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <a href="" class="text-primary">
                                        <a href="{{route('pln-token')}}" class="btn-loading"><i class="mdi mdi-flash fa-3x text-primary"></i>
                                        <a href="{{route('pln-token')}}" class="btn-loading"><h5 class="text-primary">Token PLN</h5>
                                    </a>
                                </th>
                                <th>
                                    <a href="" class="text-primary">
                                        <a href="pemesanan-baru/saldo" class="btn-loading"><i class="mdi mdi-wallet fa-3x text-primary"></i>
                                        <a href="pemesanan-baru/saldo" class="btn-loading"><h5 class="text-primary">Saldo E-Money</h5>
                                    </a>
                                </th>
                                <th>
                                    <a href="" class="text-primary">
                                        <a href="pemesanan-baru/voucher-game" class="btn-loading"><i class="mdi mdi-gamepad-variant fa-3x text-primary"></i>
                                        <a href="pemesanan-baru/voucher-game" class="btn-loading"><h5 class="text-primary">Voucher Game</h5>
                                    </a>
                                </th> 
                            </tr>
                            <tr>
                                <th>
                                    <a href="" class="text-primary">
                                        <a href="{{route('mobile-legends')}}" class="btn-loading"><i class="mdi mdi-gamepad-variant fa-3x text-primary"></i>
                                        <a href="{{route('mobile-legends')}}" class="btn-loading"><h5 class="text-primary">Mobile Legends</h5>
                                    </a>
                                </th>
                                <th>
                                    <a href="" class="text-primary">
                                        <a href="pemesanan-baru/voucher-game" class="btn-loading"><i class="mdi mdi-gamepad-variant fa-3x text-primary"></i>
                                        <a href="pemesanan-baru/voucher-game" class="btn-loading"><h5 class="text-primary">Free Fire</h5>
                                    </a>
                                </th>
                                <th>
                                    <a href="" class="text-primary">
                                        <a href="pemesanan-baru/voucher-game" class="btn-loading"><i class="mdi mdi-plus-circle fa-3x text-primary"></i>
                                        <a href="pemesanan-baru/voucher-game" class="btn-loading"><h5 class="text-primary">Bpjs Kesehataan</h5>
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center">
                    
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title"><i class="fa fa-history text-primary"></i> 5 Transaksi Pulsa Terakhir</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal & Waktu</th>
                                        <th>Nama Layanan</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><label class="btn btn-xs btn-danger"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                        <i class="mdi mdi-cart-outline font-22 avatar-title text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="">Rp. {{number_format($count_order)}}</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Total Pemesanan</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                        <i class="mdi mdi-cart-plus font-22 avatar-title text-success"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="">{{$order_buy}}</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Total Pembelian</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                        <i class="mdi mdi-credit-card font-22 avatar-title text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="">Rp. {{number_format($count_depo)}}</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Total Deposit Saldo</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                    <div class="card widget-user">
                        <div class="card-body">
                            <div class="pull-right">
                                <div class="text-right">
                                <a class="btn btn-rounded btn-primary" href="user/pengaturan-akun"><i class="fas fa-cog"></i> Pengaturan Akun</a>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/businessman.svg')}}" width="100px" class="mdi mdi-user img-fluid d-block rounded-circle" alt="user">
                                <h5 class="m-t-20 m-b-5"><b></b></h5>
                                <p class="text-muted font-5"><b>Nama Pengguna</b> : {{Auth::user()->username}}<br/><b>Sisa Saldo</b> : Rp {{number_format(Auth::user()->balance)}}<br/><b>Level</b> : {{Auth::user()->level}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    
@endsection