@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <br/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h4 class="text-uppercase">
                <i class="mdi mdi-bullhorn"></i> <b class="text-uppercase">Penting!</b>
            </h4>
            <div class="card">
                <div class="card-body">
                    Halo {{auth()->user()->name}}, Sebelum Membuat Pesanan Disarankan Untuk Membaca <b>Informasi</b> Terlebih Dahulu, Jika Anda Masuk Menggunakan PC Maka <b>Informasi</b> Terletak Disebelah Kanan Form Pesanan, Jika Anda Masuk Menggunakan <i>Smartphone / Mobile Phone</i> Maka <b>Informasi</b> Terletak Dibagian Bawah Form Pesanan.
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
           <div class="card">
               <div class="card-body">
                <div id="panel_list" class="">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tujuan </label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" id="nomor" name="target" class="form-control" placeholder="Nomor HP">
                        </div>
                    </div>
                    <p id="tes">hello</p>
                    <div id="rep" class="row" style="margin-top: 5px;"></div>
                    <div id="catatan"></div>
                    <div id="ajx" class="row"></div>
                </div>
               </div>
           </div>
        </div>
    </div>
    
</div>
@endsection
@section('script')
<script> 
$(document).ready(function() {
    var char = $("#nomor").on("keyup change", function(e) {

        var char = $('#nomor').val();
        $.ajax({
        type: 'GET',
        url: '{{route('layanan')}}',
        data:{
            nomor: char,
        },
        success: function(response) {
            var data = '';
            for (var i = 0; i < response.length; i++) {
                var la = response[i]['code'];
                
            }
            // $('#ajx').html(data);
        }
        });
    })
  
    
})
</script>
@endsection