<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', config('app.app_name'))</title>
  <meta name="description" content="@yield('meta_description', '')">
  <meta name="keywords" content="@yield('meta_keywords', '')">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('meta')
  @stack('before-styles')
  <link rel="stylesheet" href="{{ asset(dashboard_css('app.css')) }}">
  <link rel="stylesheet prefetch" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" crossorigin="anonymous">
  @stack('after-styles')
</head>
<body class="@yield('body_class', 'app')">
  <div class="app-body">
    @includeif(dashboard_views('includes.sidebar'))

    <div class="main">
      @includeif(dashboard_views('includes.header'))

      @includeif(dashboard_views('includes.messages'))
      @yield('content')
    </div><!-- .main -->
    @includeif(dashboard_views('includes.aside'))
  </div><!-- .app-body -->
  @includeif(dashboard_views('includes.footer'))

  @stack('before-scripts')
  <script src="{{ asset(dashboard_js('app.js')) }}" crossorigin="anonymous"></script>
  @stack('after-scripts')
</body>
</html>
