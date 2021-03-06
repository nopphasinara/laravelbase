<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('title')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/app.css') }}">
    @yield('stylesheets')
</head>
<body class="">
    <div class="wrapper">
      @include('dashboard.partials.header')
      <div class="main">
        <div class="container-fluid">
          <div class="row d-flex flex-row justify-contents-between align-items-start">
            <div class="col-12 col-md-auto h-100">
              @include('dashboard.partials.sidebar')
            </div>
            <div class="col-12 col-md">
              @yield('content')
              @include('dashboard.partials.footer')
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('dashboard/js/app.js') }}" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
