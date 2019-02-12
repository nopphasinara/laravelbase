<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Hello, world!</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="msapplication-tap-highlight" content="no">
  @yield('meta')
  @stack('before-styles')
  <link rel="stylesheet" href="{{ asset(dashboard('/css/main.css')) }}" crossorigin="anonymous">
  @stack('after-styles')
</head>
<body class="app-body">
  <div class="app-container app-theme-white body-tabs-shadow">
    @include('vendor.dashboard.demo.includes.header')
    <div class="app-main">
      @include('vendor.dashboard.demo.includes.sidebar')
      <div class="app-main__outer">
        <div class="app-main__inner">
          @yield('content')
        </div>
        @include('vendor.dashboard.demo.includes.footer')
      </div>
    </div>
  </div>

  @stack('before-scripts')
  <script src="{{ asset(dashboard('/js/main.js')) }}" crossorigin="anonymous"></script>
  @stack('after-scripts')
</body>
</html>
