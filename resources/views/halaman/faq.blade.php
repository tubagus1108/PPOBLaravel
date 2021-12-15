@extends('layouts.master')
@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <i class="h1 mdi mdi-comment-multiple-outline text-muted"></i>
                <h3 class="mb-3">Pertanyaan Yang Sering Ditanyakan.!</h3>
                <p class="text-muted"> Berikut Telah Kami Rangkum Beberapa Pertanyaan Yang Sering Ditanyakan Client Terkait Dengan Layanan Kami.</p>
                <a href="" target="BLANK"> <button type="button" class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-whatsapp mr-1"></i>Hubungi Kami Di WhatSapp</button></a>
            </div>
        </div>
    </div>
    <br>    
    <div class="row">
        <div class="col-md-6">
            <div class="card-box ribbon-box">
                <div class="ribbon ribbon-primary float-left"><i class="fa fa-edit"></i> Pertanyaan Umum</div>
                    <div class="ribbon-content">
                    </div>
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question" data-wow-delay=".1s">Apa Itu {{env('APP_NAME')}}?</h4>
                    <p class="faq-answer mb-4">{{env('APP_NAME')}} Adalah Sebuah Platform Bisnis Yang Menyediakan Berbagai Layanan Multy Media Marketing Yang Bergerak Terutama Di Indonesia. Dengan Bergabung Bersama Kami, Anda Dapat Menjadi Penyedia Jasa Sosial Media Atau Reseller Sosial Media Seperti Jasa Penambah Followers, Likes, Views, Subscribe, Dll.
                    Saat Ini Tersedia Berbagai Layanan Untuk Sosial Media Terpopuler Seperti Instagram, Facebook, Twitter, Youtube, Dll. Dan Kamipun Juga Menyediakan Panel Pulsa & PPOB Seperti Pulsa All Operator, Paket Data, Saldo Gojek/Grab, Token PLN, All Voucher Game Online, Dll.</p>
                </div>
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">Bagaimana Cara Mendaftarnya? Apakah Ada Biaya Pendaftaran?</h4>
                    <p class="faq-answer mb-4">Pendaftaran Cukup Klik Daftar, Dan Isi Data Sesuai Yang Dibutuhkan, Anda Sudah Terdaftar Di <b>{{env('APP_NAME')}}</b>. Untuk Pendaftaran <i>GRATIS</i> Tidak Dipungut Biaya Seperserpun.</p>
                </div>
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">Bagaimana Cara Membuat Pesanan?</h4>
                    <p class="faq-answer mb-4">Untuk Membuat Pesanan Sangatlah Mudah, Anda Hanya Perlu Masuk Terlebih Dahulu Ke Akun Anda Dan Menuju Halaman Pemesanan Dengan Mengklik Menu Yang Sudah Tersedia. Selain Itu Anda Juga Dapat Melakukan Pemesanan Melalui Request <b>API</b>.</p>
                </div>
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">Apa Itu Partial?</h4>
                    <p class="faq-answer mb-4">Status Partial Adalah Ketika Kami Mengembalikan Sebagian Sisa - Sisa Pesanan. Terkadang Karena Beberapa Alasan Kami Tidak Dapat Mengirimkan Pesanan Penuh, Jadi Kami Mengembalikan Saldo Sesuai Jumlah Yang Belum Terkirim Kepada Anda. Contoh: Anda Membeli Pesanan Dengan Jumlah 1.000 <i>Followers</i> Dan Membebankan Biaya Rp 10.000, Katakanlah Kami Mengirimkan 900 <i>Followers</i> Dan Kurang 100 <i>Followers</i> Tidak Dapat Kami Kirim, Maka Kami Akan <i>"Kembalikan Saldo"</i> Pesanan Dan Mengembalikan Kurang 100 <i>Followers</i> Kepada Anda Dalam Contoh Ini.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box ribbon-box">
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question" data-wow-delay=".1s">Apa Itu {{env('APP_NAME')}}?</h4>
                    <p class="faq-answer mb-4">{{env('APP_NAME')}} Adalah Sebuah Platform Bisnis Yang Menyediakan Berbagai Layanan Multy Media Marketing Yang Bergerak Terutama Di Indonesia. Dengan Bergabung Bersama Kami, Anda Dapat Menjadi Penyedia Jasa Sosial Media Atau Reseller Sosial Media Seperti Jasa Penambah Followers, Likes, Views, Subscribe, Dll.
                    Saat Ini Tersedia Berbagai Layanan Untuk Sosial Media Terpopuler Seperti Instagram, Facebook, Twitter, Youtube, Dll. Dan Kamipun Juga Menyediakan Panel Pulsa & PPOB Seperti Pulsa All Operator, Paket Data, Saldo Gojek/Grab, Token PLN, All Voucher Game Online, Dll.</p>
                </div>
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">Bagaimana Cara Mendaftarnya? Apakah Ada Biaya Pendaftaran?</h4>
                    <p class="faq-answer mb-4">Pendaftaran Cukup Klik Daftar, Dan Isi Data Sesuai Yang Dibutuhkan, Anda Sudah Terdaftar Di <b>{{env('APP_NAME')}}</b>. Untuk Pendaftaran <i>GRATIS</i> Tidak Dipungut Biaya Seperserpun.</p>
                </div>
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">Bagaimana Cara Membuat Pesanan?</h4>
                    <p class="faq-answer mb-4">Untuk Membuat Pesanan Sangatlah Mudah, Anda Hanya Perlu Masuk Terlebih Dahulu Ke Akun Anda Dan Menuju Halaman Pemesanan Dengan Mengklik Menu Yang Sudah Tersedia. Selain Itu Anda Juga Dapat Melakukan Pemesanan Melalui Request <b>API</b>.</p>
                </div>
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">Apa Itu Partial?</h4>
                    <p class="faq-answer mb-4">Status Partial Adalah Ketika Kami Mengembalikan Sebagian Sisa - Sisa Pesanan. Terkadang Karena Beberapa Alasan Kami Tidak Dapat Mengirimkan Pesanan Penuh, Jadi Kami Mengembalikan Saldo Sesuai Jumlah Yang Belum Terkirim Kepada Anda. Contoh: Anda Membeli Pesanan Dengan Jumlah 1.000 <i>Followers</i> Dan Membebankan Biaya Rp 10.000, Katakanlah Kami Mengirimkan 900 <i>Followers</i> Dan Kurang 100 <i>Followers</i> Tidak Dapat Kami Kirim, Maka Kami Akan <i>"Kembalikan Saldo"</i> Pesanan Dan Mengembalikan Kurang 100 <i>Followers</i> Kepada Anda Dalam Contoh Ini.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection