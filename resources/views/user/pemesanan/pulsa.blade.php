@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <i class="mdi mdi-cart"></i>Pemesanan Pulsa Reguler
                    </div>
                    <div class="card-body">
                        <form action="">
                            <input type="hidden" name="tipe" id="tipe" value="Pulsa">
                            <div id="panel_list">
                                <div class="form-group">
                                    <label>Nomor Tujuan</label>
                                    <input type="text" class="form-control" id="customer_no" name="customer_no" placeholder="08229492****">
                                </div>
                                <div id="rep" class="row" style="margin-top: 5px;">
                                </div>
                                <div id="catatan"></div>
                                <div id="koin"></div>
                                <div id="ajx" class="row" style="margin-top: 5px;">
                                </div>
                            </div>
                            <!-- data hidden -->
                            <input type="hidden" name="operator" id="operator">
                            <input type="hidden" name="layanan" id="layanan">
                            <!--------------------->
                            <div class="form-group">
                                <label>PIN</label><i class="mdi mdi-lock"></i>
                                <input type="pin" class="form-control" id="pin" placeholder="Masukkan PIN Kamu">
                            </div>
                            <div class="form-group">
                                <button id="submit" type="submit" name="pesan" class="btn btn-primary">Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <i class="mdi mdi-bell-ring"></i> Informasi
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li>Pesan Pulsa Reguler Masukkan Nomor HP Dengan Benar, Contoh 0896xxx245.</li>
                            <li>Harap Masukan Nomor HP Dengan Benar, Tidak Ada Pengembalian Dana Untuk Kesalahan Pengguna Yang Pesanannya Sudah Terlajur Di Pesan.</li>
                            <li>Jika Butuh Bantuan Silahkan Hubungi Kontak Kami.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    $('#customer_no').on('keyup change input', function(e) {

            var customer_no = $("input[name=customer_no]").val();
            alert($customer_no);

    });
});
</script>
@endsection
