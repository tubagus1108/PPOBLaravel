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
                    <div class="ribbon ribbon-primary float-left"><i class="fa fa-list"></i> Riwayat Pemesanan</div>
                    <div class="ribbon-content"></div>
                        <table id="layanan" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Kode</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th class="text-center">Status</th>
                                    {{-- <th>Action</th> --}}
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
@section('script')
<script type="text/javascript">
    $(function(){
        var table = $('#layanan').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: '{{route('riwayat-datatable')}}',
            },
            columns: [
                {data: 'id', name: 'id'},
                { data: 'service_code', name: 'service_code'},
                { data: 'service_name', name: 'service_name'},
                { data: 'price', name: 'price'},
                { data: 'status', name: 'status'},
            ],
            language: {
            searchPlaceholder: 'Search..',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            destroy: true
            },  
            columnDefs:[
                {
                    "targets" : [0,4],
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