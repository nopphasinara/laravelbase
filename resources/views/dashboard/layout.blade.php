<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/app.css') }}">
    @yield('stylesheets')
</head>
<body class="">
    <div class="wrapper">
        @include('dashboard.partials.header')
        @include('dashboard.partials.sidebar')
        @yield('content')
        @include('dashboard.partials.footer')
    </div>
    <script src="{{ asset('dashboard/js/app.js') }}" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
