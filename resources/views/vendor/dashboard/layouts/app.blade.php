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
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="plugins/fancybox/fancybox.min.css">
  <link rel="stylesheet" href="css/ui.css">
  <link rel="stylesheet" href="css/responsive.css" media="only screen and (max-width: 1200px)">
</head>
<body>
  <header class="section-header">
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="html-components.html">Documentation</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Dropdown</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#">Menu item 1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Menu item 2</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Download <i class="fa fa-download"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="header-main bg">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="brand-wrap">
              <img class="logo" src="images/logo-dark.png"> <h2 class="logo-text">LOGO</h2>
            </div>
          </div>
          <div class="col-md-4">
            xxx
          </div>
          <div class="col-md-4">
            <form action="#" class="widget-header float-right">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </header>

  <section class="section-content padding-y">
    <div class="container">
      <header class="section-heading">
        <h2>Section name</h2>
      </header>
      <div>
        <img src="images/brand.png" class="float-right">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
          Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </section>

  <footer class="section-footer bg-dark white">
    <div class="container">
      <section class="footer-bottom row">
        <div class="col-sm-6">
          <p>
            Made with xxx<br>
            by Vosidiy M.
          </p>
        </div>
        <div class="col-sm-6">
          <p class="text-sm-right">
            Copyright &copy 2018<br>
            <a href="#">Bootstrap-ecommerce UI kit</a>
          </p>
        </div>
      </section>
    </div>
  </footer>

  <script src="js/jquery-2.0.0.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="plugins/fancybox/fancybox.min.js"></script>
  <script src="js/script.js"></script>
  <script>
  $(document).ready(function() {
    //
  });
</script>
</body>
</html>
