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
                    <div class="ribbon ribbon-primary float-left"><i class="mdi mdi-login"></i> Masuk</div>
                        <div class="ribbon-content">
                        </div>
                        {{-- <div class="alert alert-info">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <i class="fa fa-check-circle"></i>
                            Berhasil Masuk
                        </div>
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <i class="fa fa-times-circle"></i>
                            Gagal Masuk
                        </div> --}}
                        <form action="{{route('login')}}" class="form-horizontal" method="POST">@csrf
                            <div class="form-group">
                                <label>Nama Pengguna</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="fa fa-user text-primary"></i>
                                    </div>
                                </div>
                                    <input type="text" name="email" class="form-control" placeholder="Email" required>
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
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi" required>
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6Lf0UzoeAAAAAPgSBJD-Y78pylo9vbwWGx53DXD3"></div>
                            <br>
                            <button type="reset" class="btn btn-danger waves-effect waves-light"><i class="fa fa-history"></i> Ulangi</button>
                            <button type="submit" name="login" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-login"></i> Masuk</button>
                            </form>
                        </div>
                        <div class="card-footer">
                            Belum Punya Akun? <a class="btn btn-warning waves-effect" href="{{url('auth/register')}}"><i class="mdi mdi-account-plus"></i> Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection