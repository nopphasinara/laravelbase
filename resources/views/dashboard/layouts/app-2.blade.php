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
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" crossorigin="anonymous"> --}}
  <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/nucleo/css/nucleo.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/assets/css/argon.css') }}">
  @stack('after-styles')
</head>
<body>
  @yield('content')

  @stack('before-scripts')
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="{{ asset('dashboard/assets/vendor/chart.js/dist/Chart.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('dashboard/assets/vendor/chart.js/dist/Chart.extension.js') }}" crossorigin="anonymous"></script>
  <script src="{{ asset('dashboard/assets/js/argon.js') }}" crossorigin="anonymous"></script>
  @stack('after-scripts')
</body>
</html>
