@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <br/>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
                <h3 class="text-center">METODE DEPOSIT</h3>
                <div class="row">
                    @foreach ($channelsQris as $item)
                        <div class="col-md-6 col-sm-12">
                            <a class="card card-body text-center text-primary" href="{{route('qris')}}" height:200px;">
                                <center>
                                    <img src="{{$item->icon_url}}" class="img-responsive" width="200"/>
                                </center>
                                </br>
                                <h4>QRIS</h4>
                            </a>
                        </div>
                    @endforeach
                    @foreach ($channelsOvo as $item)
                    <div class="col-md-6 col-sm-12">
                        <a class="card card-body text-center text-primary" href="{{route('ovo')}}" height:200px;">
                            <center>
                                <img src="{{$item->icon_url}}" class="img-responsive" width="200"/>
                            </center>
                            </br>
                            <h4>OVO</h4>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    @foreach ($channelsBni as $item)
                        <div class="col-md-4 col-sm-12">
                            <a class="card card-body text-center text-primary" href="{{route('vabni')}}" height:200px;">
                                <center>
                                    <img src="{{$item->icon_url}}" class="img-responsive" width="200"/>
                                </center>
                                </br>
                                <h4>Virtual BNI</h4>
                            </a>
                        </div>
                    @endforeach
                    @foreach ($channelsBri as $item)
                    <div class="col-md-4 col-sm-12">
                        <a class="card card-body text-center text-primary" href=""height:200px;">
                            <center>
                                <img src="{{$item->icon_url}}" class="img-responsive" width="200"/>
                            </center>
                            </br>
                            <h4>Virtual BRI</h4>
                        </a>
                    </div>
                    @endforeach
                    @foreach ($channelsMandiri as $item)
                    <div class="col-md-4 col-sm-12">
                        <a class="card card-body text-center text-primary" href=""height:200px;">
                            <center>
                                <img src="{{$item->icon_url}}" class="img-responsive" width="200"/>
                            </center>
                            </br>
                            <h4>Virtual Mandiri</h4>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection