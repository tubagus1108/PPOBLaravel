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
            @foreach ($errors->all() as $item)
            <div class="alert alert-success outline alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
                <p>{{ $item }}</p>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            @endforeach
            @if(session('success'))
            <div class="alert alert-success outline alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
                <p>{{session('success')['message']}}</p>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            @endif
            <form action="" method="post">@csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">MASUKKAN ID ANDA</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group">
                                    <input type="number" id="id_ml" name="id" class="form-control" placeholder="Masukkan ID Kamu">
                                    <input type="number" id="zone" name="zone" class="form-control" placeholder="Masukkan Zone Kamu">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group">
                                    <p id="res"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script> 
    $(document).ready(function() {
        $("#id_ml").on("keyup change",function(e){
            var id = $('#id_ml').val();
            $("#zone").on("keyup change",function(e){
                var zone = $('#zone').val();
                $.ajax({
                    type: 'GET',
                    url: '{{route('account-ml')}}',
                    data:{
                        id_ml: id,
                        zone: zone,
                    },
                    success: function(response) {
                        // console.log(response['result']['status'])
                        var x = response['nickname'];
                        document.getElementById("res").innerHTML = "Nickname: " + x;
                    }
                })

            })
            // console.log(zone)
        });
    })
</script>
@endsection