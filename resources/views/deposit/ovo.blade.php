@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <br/>
    </div>
    <div class="row">
        <div class="col-md-7">
            @foreach ($errors->all() as $item)
            <div class="alert alert-success outline alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
                <p>{{ $item }}</p>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            @endforeach
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title"><i class="fa fa-credit-card text-primary"></i> Deposit Saldo OVO</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('ovo-pay')}}" method="POST">@csrf
                        <div class="form-group">
                            <label class="col-md-12 control-label">Nomor Pengirim</label>
                                <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-primary">
                                            <i class="mdi mdi-cellphone-android mr-1 text-primary"></i>
                                    </div>
                                </div>
                                    <input type="number" class="form-control" name="pengirim" placeholder="Masukkan nomor perngirim" id="pengirim">
                                    </div>
                                </div>
                        </div>
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
                        Pembayaran via OVO
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Klik tombol Lanjutkan Pembayaran</li>
                        <li>Periksa aplikasi OVO di Ponsel Anda</li>
                        <li>Akan muncul prompt transaksi. Pastikan data transaksi sudah sesuai</li>
                        <li>Klik tombol Bayar</li>
                        <li>Transaksi selesai. Simpan bukti pembayaran Anda</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table id="layanan" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>TANGGAL/WAKTU</th>
                                <th>METODE DEPOSIT</th>
                                <th>JUMLAH</th>
                                <th>SALDO DIDAPAT</th>
                                <th>PAYMENT GATEWAY</th>
                                <th>STATUS</th>
                                {{-- <th>ACTION</th> --}}
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(function(){
        var table = $('#layanan').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: '{{route('ovo-datatable')}}',
            },
            columns: [
                {data: 'id', name: 'id'},
                { data: 'date', name: 'date'},
                { data: 'payment_name', name: 'payment_name'},
                { data: 'amount', name: 'amount'},
                { data: 'amount_received', name: 'amount_received'},
                { data: 'payment_gateway', name: 'payment_gateway'},
                { data: 'status', name: 'status'},
                // { data: 'status', name: 'status'},
            ],
            language: {
            searchPlaceholder: 'Search..',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            destroy: true
            },  
            columnDefs:[
                {
                    "targets" : [5,6],
                    "className": "text-center"
                },
            ],              
            
            dom: 'Bfrtip',  
            buttons: [
                {extend:'copy', className: 'bg-info text-white rounded-pill ml-2 border border-white'},
                {extend:'excel', className: 'bg-success text-white rounded-pill border border-white'},
                {extend:'pdf', className: 'bg-danger text-white rounded-pill border border-white'},
                {extend:'print', className: 'bg-warning text-white rounded-pill border border-white'},
            ],
        });
    });
</script>
@endsection