<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/@mdi/font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('assetslanding/css/style-2.bundle.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assetslanding/css/style.bundle.css') }}"> --}}
</head>
<body>
    {{-- <script src="{{ asset('assets/js/preloader.js') }}"></script> --}}
    <div class="container-scroller" id="app">
        @include('layouts.header')
        <div class="container-fluid page-body-wrapper">
          @include('layouts.sidebar')
          <div class="main-panel">
            <div class="content-wrapper">
              @yield('content')
            </div>
            @include('layouts.footer')
          </div>
        </div>
    </div>
    @yield('script')
    {{-- BASE JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    {{-- PLUGIN JS --}}
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js  ') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/todolist.jss  ') }}"></script> --}}
    <script src="https://kit.fontawesome.com/2c7ad1242e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/dataTables.semanticui.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
</body>
</html>
