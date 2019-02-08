<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/app.css') }}">
    @yield('stylesheets')
</head>
<body class="">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
      @include('dashboard.partials.header')
      <div class="app-main">
        @include('dashboard.partials.sidebar')
        <div class="app-main__outer">
          <div class="app-main__inner">
              @yield('content')
          </div>
          @include('dashboard.partials.footer')
        </div>
      </div>
    </div>
    <script src="{{ asset('dashboard/js/app.js') }}" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
