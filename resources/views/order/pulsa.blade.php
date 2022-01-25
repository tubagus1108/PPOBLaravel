@extends('layouts.master')
@section('css')
<style type="text/css">

	.form-group {
		margin-bottom: 0;
	}

	.isi_p {
		padding: 5px;
		-webkit-box-shadow: 0px 0px 15px -5px rgba(0, 0, 0, 0.75);
		-moz-box-shadow: 0px 0px 15px -5px rgba(0, 0, 0, 0.75);
		box-shadow: 0px 0px 15px -5px rgba(0, 0, 0, 0.75);
	}

	.exs {
		float: right;
		color: #ea6666;
		cursor: pointer;
	}

	.exs:hover {
		float: right;
		color: red;
		cursor: pointer;
	}

	.clasesItem:hover,
	.hovCard:hover {
		color: #fff;
		background-color: #27c819;
	}
</style>
@endsection
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
            <form action="{{route('order-pulsa')}}" method="post">@csrf
                <div class="card">
                    <div class="card-body">
                            <div id="panel_list">
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Tujuan </label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile text-primary"></i></span></div>
                                        <input type="number" id="nomor" name="target" class="form-control" placeholder="Nomor HP">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div id="rep" class="row" style="margin-top: 5px;"></div>
                                <div id="catatan"></div>
                                <div id="ajx" class="row"></div>
                            </div>
                            <input type="hidden" name="code" id="operator">
                            <input type="hidden" name="service" id="layanan">
                            <input type="hidden" name="price" id="price">
                            <br>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">PIN</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock text-primary"></i></span></div>
                                        <input type="number" name="pin" class="form-control" placeholder="Masukkan PIN Kamu">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <button id="submit" type="submit" name="pesan" class="btn btn-primary btn-elevate btn-pill btn-elevate-air">Submit</button>
                                    <button type="reset" class="btn btn-danger btn-elevate btn-pill btn-elevate-air">Ulangi</button>
                                </div>
                            </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title"><i class="mdi mdi-information-outline text-primary"></i> Peraturan Pemesanan</h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Pesan Pulsa/Kuota/Voucher Game. Masukkan Nomor Telepon Dengan Benar, Contoh 082136611003.</li>
                        <li>Pesan Token PLN Masukkan Nomor Meter.</li>
                        <li>Harap Masukan Target Dengan Benar, Tidak Ada Pengembalian Dana Untuk Kesalahan Pengguna Yang Pesanannya Sudah Terlajur Di Pesan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
@section('script')
<script> 
$(document).ready(function() {
    $('.exs').hide();
    $('.exs').click(function() {
        $('.exs').hide();
        $('#panel_list').removeClass('isi_p');
        $('#ajx').hide();
        $('#rep').show();
    });
    $("#nomor").on("keyup change", function(e) {
        var char = $('#nomor').val();
        $.ajax({
        type: 'GET',
        url: '{{route('layanan')}}',
        data:{
            nomor: char,
        },
        success: function(response) {
            var data = '';
            var check_length = response.length;
            for (var i = 0; i < response.length; i++) {     
                // console.log(i)
                var la = response[i]['service'];
                data += '<div class="col-12 list_pls" style="cursor:pointer"'
                data += 'data-service="' + la +
							'"data-price="' + response[i]['price'] +
							'"data-code="' + response[i]['code'] +
							'"data-id="' + response[i]['id'] +
							'"data-sid="' + response[i]['sid'] +
							'"data-type="' + response[i]['type'] +
							'"data-desc="' + response[i]['desc'] + '">'
                data += '<div class="card mb-3 clasesItem" style="border:1px solid #ccc;">'
                data += '<div class="card-body ">'
                data += '<h6 class="card-title m-0">' + la + '<span style="float: right; color: #fb4802;">' + response[i]['price'] + '</span></h6>'
                data += '<p class="card-text">' + response[i]['desc'] + '</p>'
                data += ' </div>'
                data += '</div>'
                data += '</div>'
                console.log(data)
                
            }
            $('#ajx').html(data);
            $('.list_pls').click(function() {
                $('#rep').show();
                $('#layanan').val($(this).data('sid'));
                $('#price').val($(this).data('price'));
                normal();
                // layanan($(this).data('service_id'));
                $('#operator').val($(this).data('code'));
                //requstOp($(this).data('tipe'),$(this).data('operator'));
                rep = '<div class="col-12 " style="cursor:pointer">'
                rep += '<div class="card mb-3" style="border:1px solid #ccc; color: #fff; background-color: #039dfc;">'
                rep += '<div class="card-body">'
                rep += '<h6 class="card-title m-0">' + $(this).data('service') + ' <span style="float: right; color: #fb4802;">' + $(this).data('price') + '</span></h6>'
                rep += '<p class="card-text">' + $(this).data('desc') + '</p>'
                rep += ' </div>'
                rep += '</div>'
                rep += '</div>'
                $('#rep').html(rep);
                console.log(rep)
            })
        }
        });
    })
    $('#nomor').click(function() {
        $('.exs').show();
        // $('#panel_list').addClass('isi_p');
        $('#ajx').show();
        $('#rep').hide();
    });
    normal();

    function normal() {
        $('.exs').hide();
        $('#panel_list').removeClass('isi_p');
        $('#ajx').hide();
    }
    
})
</script>
@endsection