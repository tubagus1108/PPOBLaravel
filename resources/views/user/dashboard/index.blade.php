@extends('layouts.master')
@section('content')
<div class="container">
    {{-- Slide Banner --}}
    <section class="iklan">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://jssors8.azureedge.net/demos/img/gallery/980x380/045.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://winkit.dexignlab.com/plugins/jssor.slider.devpack/img/gallery/980x380/006.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://yamaha-bahana.com/wp-content/uploads/2021/07/Slide-Banner-XMax.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>
    {{-- Akhir Slide Banner --}}
    <section class="pemesanen mt-4">
        <div class="card">
            <div class="card-header">
                <i class="mdi mdi-cart"></i>Kategori Pemesanan
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <center>
                            <a href="{{ route('pulsa-reguler') }}">
                              <img src="{{ asset('assetslanding/pulsa-reguler.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                              Pulsa
                              </h3>
                            </a>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/tf.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                              Pulsa Transfer
                              </h3>
                            </a>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/paket internet.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                              Internet
                              </h3>
                            </a>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/phone&sms.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                                Tlp/Sms
                              </h3>
                            </a>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/token pln.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                                Token
                              </h3>
                            </a>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/ojek_online.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                                Voucher Internet
                              </h3>
                            </a>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/top up game.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                                Top up Game
                              </h3>
                            </a>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/icon-emoney.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                                E-Money
                              </h3>
                            </a>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/tagihan.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                                Bayar Tagihan
                              </h3>
                            </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Kategori Lainya --}}
    <section class="kategori-lainya mt-3">
        <div class="card">
            <div class="card-header">
                <i class="mdi mdi-cart"></i>Kategori Lainya
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/vcr1.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                              Bantuan
                              </h3>
                            </a>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/vcr2.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                              Pertanyaan Umum
                              </h3>
                            </a>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <a href="">
                              <img src="{{ asset('assetslanding/h2h.png') }}" style="height: 3.5rem;width: 3.5rem;">
                              <h3 class="text-dark mt-3" style="color: black; font-family: verdana; font-size: 12px; margin-top: 3px;">
                              Promo
                              </h3>
                            </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
