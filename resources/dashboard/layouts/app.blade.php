<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Hello, world!</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="msapplication-tap-highlight" content="no">
  @yield('after-meta')
  @stack('before-styles')
  <link rel="stylesheet" href="{{ asset('vendor/ui/css/bootstrap.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('vendor/ui/css/bootstrap.css') }}"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('vendor/ui/fonts/fontawesome/css/fontawesome-all.min.css') }}"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('vendor/ui/plugins/fancybox/fancybox.min.css') }}"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('vendor/ui/css/ui.css') }}"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('vendor/ui/css/responsive.css') }}" media="only screen and (max-width: 1200px)"> --}}
  @stack('after-styles')
</head>
<body>
  @includeif('vendor.dashboard.includes.header')

  @yield('content')

  @includeIf('vendor.dashboard.includes.footer')

  @stack('before-scripts')
  {{-- <script src="js/jquery-2.0.0.min.js"></script> --}}
  {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}
  {{-- <script src="plugins/fancybox/fancybox.min.js"></script> --}}
  {{-- <script src="js/script.js"></script> --}}
  <script src="{{ asset('vendor/ui/js/bootstrap.js') }}" crossorigin="anonymous"></script>
  @stack('after-scripts')
</body>
</html>
