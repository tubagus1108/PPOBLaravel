@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <br />
    <div class="row">
        <div class="col-sm-6">
            <br/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card-box ribbon-box">
                <div class="ribbon ribbon-primary float-left"><i class="mdi mdi-information-variant"></i> Ketentuan Layanan</div>
                    <div class="ribbon-content">
                    </div>
                    <p>Layanan Yang Disediakan Oleh {{env('APP_NAME')}} Telah Ditetapkan Kesepakatan - Kesepakatan Berikut.</p>
                    <p><b>1. Umum</b>
                    <br />Dengan Mendaftar Dan Menggunakan Layanan {{env('APP_NAME')}}, Anda Secara Otomatis Menyetujui Semua Ketentuan Layanan Kami. Kami Berhak Mengubah Ketentuan Layanan Ini Tanpa Pemberitahuan Terlebih Dahulu. Anda Diharapkan Membaca Semua Ketentuan Layanan Kami Sebelum Membuat Pesanan.
                    <br />Penolakan: {{env('APP_NAME')}} Tidak Akan Bertanggung Jawab Jika Anda Mengalami Kerugian Dalam Bisnis Anda.
                    <br />Kewajiban: {{env('APP_NAME')}} Tidak Akan Bertanggung Jawab Jika Anda Mengalami Suspensi Akun Atau Penghapusan Kiriman Yang Dilakukan Oleh Instagram, Twitter, Facebook, Youtube, Dan Lain-Lain.<hr>
                    <b>2. Layanan</b>
                    <br />{{env('APP_NAME')}} Hanya Digunakan Untuk Media Promosi Sosial Media Dan Membantu Meningkatkan Penampilan Akun Anda Saja.<hr>
                    <br />{{env('APP_NAME')}} Tidak Menjamin Pengikut Baru Anda Berinteraksi Dengan Anda, Kami Hanya Menjamin Bahwa Anda Mendapat Pengikut Yang Anda Beli.
                    <br />{{env('APP_NAME')}} Tidak Menerima Permintaan Pembatalan Atau Pengembalian Dana Setelah Pesanan Masuk Ke Sistem Kami. Kami Memberikan Pengembalian Dana Yang Sesuai Jika Pesanan Tidak Dapat Diselesaikan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection