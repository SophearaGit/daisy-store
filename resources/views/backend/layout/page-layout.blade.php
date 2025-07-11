<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/backend/assets/imgs/theme/favicon.svg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/backend/assets/imgs/theme/favicon.svg') }}">
    <link href="{{ asset('/backend/assets/css/style.css?v=1.0.0') }}" rel="stylesheet">
    <title>@yield('pageTitle')</title>
    @stack('stylesheets')
</head>

<body>
    <div class="screen-overlay"></div>
    @include('backend.layout.partial.aside')
    <main class="main-wrap">
        @include('backend.layout.partial.header') 
        @yield('content')
        @include('backend.layout.partial.footer')
    </main>
    <script src="{{ asset('/backend/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/vendors/chart.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/main.js?v=1.0.0') }}"></script>
    <script src="{{ asset('/backend/assets/js/custom-chart.js') }}" type="text/javascript"></script>
    @stack('scripts')
</body>

</html>
