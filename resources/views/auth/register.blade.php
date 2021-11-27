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
                    <div class="ribbon ribbon-primary float-left"><i class="mdi mdi-account-plus"></i> Daftar Akun</div>
                        <div class="ribbon-content">
                        </div>
                        {{-- <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <i class="fa fa-check-circle"></i>
                            Berhasil Masuk
                        </div>
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <i class="fa fa-times-circle"></i>
                            Gagal Masuk
                        </div> --}}
                        <form class="form-horizontal" method="POST">
                        <input type="hidden" name="csrf_token" value="">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="mdi mdi-account-card-details text-primary"></i>
                                    </div>
                                </div>
                                    <input type="text" name="fullname" class="form-control" placeholder="Nama Lengkap Anda">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fa fa-envelope text-primary"></i>
                                    </div>
                                </div>
                                    <input type="email" name="email" class="form-control" placeholder="E-Mail Aktif Anda">
                                </div>
                            </div>											
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fa fa-phone text-primary"></i>
                                    </div>
                                </div>
                                    <input type="number" name="no_hp" class="form-control" placeholder="Nomor HP. Contoh: 6281234567890">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Pengguna</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fa fa-user text-primary"></i>
                                    </div>
                                </div>
                                    <input type="text" name="username" class="form-control" placeholder="Masukan Nama Pengguna">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fa fa-lock text-primary"></i>
                                    </div>
                                </div>
                                    <input type="password" name="password" class="form-control" placeholder="Masukan Kata Sandi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Kata Sandi</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fa fa-lock text-primary"></i>
                                    </div>
                                </div>
                                    <input type="password" name="repassword" class="form-control" placeholder="Konfirmasi Kata Sandi">
                                </div>
                            </div>
                    <div class="form-group">
                                <label>Kode Undangan</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fa fa-lock text-primary"></i>
                                    </div>
                                </div>
                                    <input type="text" name="kodeundangan" class="form-control" placeholder="Kode Undangan">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                                    <label class="custom-control-label" for="agree">
                                    Saya Setuju Dengan <a href="">Ketentuan Layanan</a>
                                    </label>
                                </div>
                            </div>
                            <button type="reset" class="btn btn-danger waves-effect waves-light"><i class="fa fa-history"></i> Ulangi</button>
                            <button type="submit" name="daftar" class="btn btn-primary waves-effect waves-light"><i class="fa fa-user-plus"></i> Daftar</button>
                            </form>
                        </div>
                        <div class="card-footer">
                            Tidak Mempunyai Kode Undangan? <a class="btn btn-warning waves-effect" href=""><i class="mdi mdi-login"></i>Beli Kode Undangan</a>
                        </div>
                        <div class="card-footer">
                            Sudah Punya Akun? <a class="btn btn-primary waves-effect" href=""><i class="mdi mdi-login"></i> Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection