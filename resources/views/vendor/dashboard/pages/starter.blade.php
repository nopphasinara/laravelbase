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
  <link rel="stylesheet" href="{{ asset('css/vendor/dashboard/backend.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/vendor/dashboard/app.css') }}"> --}}
  @stack('after-styles')
</head>
<body>
  <div class="wrapper">
    <div>
      <a href="#hashchange">Change hash</a>
    </div>
    <div>
      <img src="..." alt="..." id="demoImg">
    </div>
    <div id="imgError"></div>
    <div id="demoResponse"></div>

    <p>Change the size of the page</p>
    <p id="result"></p>
    <p>You have changed the size of the screen <span id="times"></span> times.</p>

    <h3>Calculate the length of the text.</h3>
    <input type="text" id="calculateText" />
    <button type="button" class="btn btn-default" id="calculateOnclick">calculate</button>
    <div id="calculateResult"></div>
    <div id="calculateMes"></div>

    <div class="container">
      <div class="row d-flex flex-row justify-content-center">
        <div class="col-4">
          <form>
            <h1 class="h3 text-center mb-3">Please sign in</h1>
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @stack('before-scripts')
  <script src="{{ asset('js/vendor/dashboard/app.js') }}" async crossorigin="anonymous"></script>
  <script src="{{ asset('js/vendor/dashboard/events.js') }}" async crossorigin="anonymous"></script>
  @stack('after-scripts')
</body>
</html>
