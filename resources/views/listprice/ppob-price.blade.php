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
                            <div class="col-md-3"><b>Select Category</b></div>
                            <div class="col-md-12">
                                <select class="form-control" id="category_id">
                                    <option value="0">Pilih Salah Satu...</option>
                                    @foreach ($category as $item)
                                    <option value="{{ $item['id'] }}">
                                        {{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <table id="layanan" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
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
@section('script')
<script type="text/javascript">
    $(function(){
        var table = $('#layanan').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: '{{route('price-ppob')}}',
                data: function(d)
                {
                    d.category_id = $('#category_id').val();
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                { data: 'sid', name: 'sid'},
                { data: 'service', name: 'service'},
                { data: 'price', name: 'price'},
                { data: 'desc', name: 'desc'},
                { data: 'status', name: 'status'},
            ],
        });
        $('#category_id').change(function(){
            table.draw();
        });
    });
</script>
@endsection