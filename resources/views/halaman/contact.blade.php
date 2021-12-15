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
        <div class="col-lg-4 col-md-4">
                <div class="text-center card-box">
                    <div class="clearfix"></div>
                    <div class="member-card">
                        <div class="thumb-xl member-thumb m-b-10 center-block">
                            <img src="{{asset('assets/images/assistant.svg')}}" width="150px" class="img-circle img-thumbnail" alt="profile-image">
                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                        </div>

                        <div class="">
                            <h4 class="m-b-5 text-primary">Muhammad Tubagus Sananto</h4>
                            <label class="badge badge-info">Developer</label>
                        </div>

                        <div class="text-muted font-13 m-t-20">
                            Hallo, Saya Muhammad Tubagus Sananto. Saya Sebagai Web Developers Di Evolution Pedia. Jika Ada Masalah Atau Kendala Di Evolution Pedia Silahkan Hubungi Saya Melalui Kontak Berikut
                        </div>

                        <hr/>
                                    
                        <!-- </center> -->

                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Facebook : Bagus</strong> <span class="m-l-15"></span></p>

                            <p class="text-muted font-13"><strong>WhatsApp : +628887366966</strong> <span class="m-l-15"></span></p>

                            <p class="text-muted font-13"><strong>Instagram : @tubagusofficial</strong> <span class="m-l-15"></span></p>

                            <p class="text-muted font-13"><strong>Lokasi : Medan, Sumatera Utara</strong> <span class="m-l-15"></span></p>
                        </div>
                        <ul class="social-list list-inline mt-5 mb-0">
                            <li class="list-inline-item">
                                <a href="<" class="social-list-item border-primary text-primary"><i
                                        class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="social-list-item border-danger text-danger"><i
                                        class="mdi mdi-whatsapp"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="social-list-item border-info text-info"><i
                                        class="mdi mdi-instagram"></i></a>
                            </li>
                        </ul>
                    </div>             
                    <br />
                    <b>Jam Kerja</b><br />
                    <div class="alert alert-success">
                        08:00 - 23:00 WIB
                    </div>
                </div>
        </div>
</div>
@endsection