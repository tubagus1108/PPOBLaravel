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
        <div class="offset-lg-3 col-lg-6">
            <div class="card">
                <div class="card-box ribbon-box">
                    <div class="ribbon ribbon-primary float-left"><i class="mdi mdi-account-key"></i> Lupa Kata Sandi</div>
                        <div class="ribbon-content">
                        </div>
                        {{-- <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <i class="fa fa-check-circle"></i>
                            Berhasil mengganti password check email anda
                        </div>
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <i class="fa fa-times-circle"></i>
                            Gagal check username atau email anda
                        </div> --}}
                        <form class="form-horizontal" method="POST">
                        <input type="hidden" name="csrf_token" value="">
                            <div class="form-group">
                                <label>Nama Pengguna</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fa fa-user text-primary"></i>
                                    </div>
                                </div>
                                    <input type="text" name="username" class="form-control" placeholder="Nama Pengguna Anda">
                                </div>
                            </div>
                                <button type="reset" class="btn btn-danger waves-effect waves-light"><i class="fa fa-history"></i> Ulangi</button>
                                <button type="submit" name="lupa" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-login"></i> Lupa</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection