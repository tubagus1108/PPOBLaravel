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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-box ribbon-box">
                    <div class="ribbon ribbon-primary float-left"><i class="fa fa-list"></i> Daftar Harga</div>
                    <div class="ribbon-content"></div>
                        <div class="form-group">
                            <div class="col-md-3"><b>Tipe Product</b></div>
                            <div class="col-md-12">
                                <select class="form-control" name="type" id="type">
                                    <option value="0">Pilih Salah Satu...</option>
                                    @foreach ($result as $item->data)
                                    <option value="{{ $item['category'] }}">
                                        {{ $item['category'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3"><b>Product</b></div>
                            <div class="col-md-12">
                                <select class="form-control" name="type" id="type">
                                    <option value="0">Pilih Salah Satu...</option>
                                    <option value="Server 1">Server 1</option>
                                    <option value="Server 2">Server 2</option>
                                </select>
                            </div>
                        </div>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection