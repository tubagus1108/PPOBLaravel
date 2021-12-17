@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <br/>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title"><i class="fa fa-credit-card text-primary"></i> Deposit Saldo QRIS</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('qris-pay')}}" method="POST">@csrf
                        <div class="form-group">
                            <label class="col-md-12 control-label">Jumlah Deposit</label>
                                <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-primary">
                                            Rp
                                    </div>
                                </div>
                                    <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Deposit" id="jumlah">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="col-md-10">
                            <button type="reset" class="btn btn-danger waves-effect w-md waves-light">Ulangi</button>
                            <button type="submit" class="btn btn-primary waves-effect w-md waves-light" name="deposit">Buat Deposit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card mb-1">
                <div class="card-header" id="headingOne">
                    <h4 class="m-0">
                        <a class="text-dark collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                        BANK BCA
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Login Ke Akun M-BCA Anda</li>
                        <li>Pilih Menu M-Transfer</li>
                        <li>Pilih BCA VIRTUAL ACCOUNT</li>
                        <li>Masukan Nomor 39358></li>
                        <li>Masukan Nominal Top-up</li>
                        <li>Ikuti Intruksi Untuk Menyelesaikan Transaksi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection