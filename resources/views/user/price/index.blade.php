@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="col-12">
           <div class="card">
               <div class="card-body">
                <table class="ui celled table table-striped" id="data-price">
                    <thead>
                        <tr class="text-center">
                            <th width="50">#</th>
                            <th>Kategori</th>
                            <th>Nama Layanan</th>
                            <th>Harga WEB</th>
                            <th>Harga API</th>
                            <th>Tipe</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table>
               </div>
           </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $('#data-price').DataTable({

        });
    </script>
@endsection
