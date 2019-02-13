<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <meta name="description" content="Dashboard">
  <meta name="keywords" content="Dashboard">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/chartist.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="assets/css/icons.css"> --}}
  {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
</head>

<body class="fixed-left">

  <!-- Loader -->
  {{-- <div id="preloader">
    <div id="status">
      <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div>
    </div>
  </div> --}}

  <!-- Begin page -->
  <div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
      <!-- LOGO -->
      <div class="topbar-left">
        <div class="">
          <a href="index.html" class="logo text-center">Dashboard</a>
          <!--<a href="index.html" class="logo"><img src="assets/images/logo.png" height="14" alt="logo"></a>-->
        </div>
      </div>

      <nav class="navbar-custom">
        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
          <div class="search-bar">
            <input class="search-input" type="search" placeholder="Search">
            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
              <i class="mdi mdi-close-circle"></i>
            </a>
          </div>
        </div>

        <ul class="list-inline float-right mb-0">
          <!-- Search -->
          <li class="list-inline-item dropdown notification-list">
            <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
              <i class="mdi mdi-magnify noti-icon"></i>
            </a>
          </li>
          <!-- Fullscreen -->
          <li class="list-inline-item dropdown notification-list hide-sm">
            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
              <i class="mdi mdi-fullscreen noti-icon"></i>
            </a>
          </li>
          <!-- language-->
          <li class="list-inline-item dropdown notification-list hide-sm">
            <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            English <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
          </a>
          <div class="dropdown-menu dropdown-menu-right language-switch">
            <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16"/><span> German </span></a>
            <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
            <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
            <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
            <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
          </div>
        </li>
        <!-- notification-->
        <li class="list-inline-item dropdown notification-list">
          <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
          aria-haspopup="false" aria-expanded="false">
          <i class="ion-ios7-bell noti-icon"></i>
          <span class="badge badge-danger noti-icon-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
          <!-- item-->
          <div class="dropdown-item noti-title">
            <h5>Notification (5)</h5>
          </div>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item active">
            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
          </a>

          <!-- All-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            View All
          </a>

        </div>
      </li>
      <!-- User-->
      <li class="list-inline-item dropdown notification-list">
        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
      </a>
      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
        <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
      </div>
    </li>
  </ul>

  <!-- Menu Collapse Button -->
  <button type="button" class="button-menu-mobile open-left waves-effect">
    <i class="ion-navicon"></i>
  </button>

  <div class="clearfix"></div>
</nav>

</div>
<!-- Top Bar End -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">

  <div class="sidebar-inner slimscrollleft">
    <div id="sidebar-menu">
      <ul>

        <li class="menu-title">Main</li>

        <li>
          <a href="index.html" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard <span class="badge badge-pill badge-success float-right">02</span> </span></a>
        </li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Email <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
          <ul class="list-unstyled">
            <li><a href="email-inbox.html">Inbox</a></li>
            <li><a href="email-read.html">Email Read</a></li>
            <li><a href="email-compose.html">Email Compose</a></li>
          </ul>
        </li>

        <li>
          <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Calendar </span></a>
        </li>

        <li class="menu-title">Components</li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> User Interface <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
          <ul class="list-unstyled">
            <li><a href="ui-buttons.html">Buttons</a></li>
            <li><a href="ui-cards.html">Cards</a></li>
            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
            <li><a href="ui-modals.html">Modals</a></li>
            <li><a href="ui-images.html">Images</a></li>
            <li><a href="ui-alerts.html">Alerts</a></li>
            <li><a href="ui-progressbars.html">Progress Bars</a></li>
            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
            <li><a href="ui-navs.html">Navs</a></li>
            <li><a href="ui-pagination.html">Pagination</a></li>
            <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
            <li><a href="ui-badge.html">Badge</a></li>
            <li><a href="ui-carousel.html">Carousel</a></li>
            <li><a href="ui-video.html">Video</a></li>
            <li><a href="ui-typography.html">Typography</a></li>
            <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
            <li><a href="ui-grid.html">Grid</a></li>
            <li><a href="ui-nestable.html">Nestable</a></li>
            <li><a href="ui-alertify.html">Alertify</a></li>
            <li><a href="ui-rangeslider.html">Range Slider</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Forms <span class="badge badge-pill badge-primary float-right">9</span> </span></a>
          <ul class="list-unstyled">
            <li><a href="form-elements.html">Form Elements</a></li>
            <li><a href="form-validation.html">Form Validation</a></li>
            <li><a href="form-advanced.html">Form Advanced</a></li>
            <li><a href="form-wizard.html">Form Wizard</a></li>
            <li><a href="form-editors.html">Form Editors</a></li>
            <li><a href="form-uploads.html">Form File Upload</a></li>
            <li><a href="form-mask.html">Form Mask</a></li>
            <li><a href="form-summernote.html">Summernote</a></li>
            <li><a href="form-xeditable.html">Form Xeditable</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-line"></i><span> Charts <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
          <ul class="list-unstyled">
            <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
            <li><a href="charts-flot.html">Flot Chart</a></li>
            <li><a href="charts-morris.html">Morris Chart</a></li>
            <li><a href="charts-chartist.html">Chartist Chart</a></li>
            <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
            <li><a href="charts-other.html">Jquery Knob Chart</a></li>
            <li><a href="charts-peity.html">Peity Chart</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span> Tables <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
          <ul class="list-unstyled">
            <li><a href="tables-basic.html">Basic Tables</a></li>
            <li><a href="tables-datatable.html">Data Table</a></li>
            <li><a href="tables-responsive.html">Responsive Table</a></li>
            <li><a href="tables-editable.html">Editable Table</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Icons  <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></span> </a>
          <ul class="list-unstyled">
            <li><a href="icons-material.html">Material Design</a></li>
            <li><a href="icons-ion.html">Ion Icons</a></li>
            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
            <li><a href="icons-themify.html">Themify Icons</a></li>
            <li><a href="icons-dripicons.html">Dripicons</a></li>
            <li><a href="icons-typicons.html">Typicons Icons</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-maps"></i><span> Maps <span class="badge badge-pill badge-pink float-right">NEW</span> </span></a>
          <ul class="list-unstyled">
            <li><a href="maps-google.html"> Google Map</a></li>
            <li><a href="maps-vector.html"> Vector Map</a></li>
          </ul>
        </li>

        <li class="menu-title">Extras</li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-location"></i><span> Authentication <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
          <ul class="list-unstyled">
            <li><a href="pages-login.html">Login</a></li>
            <li><a href="pages-register.html">Register</a></li>
            <li><a href="pages-recoverpw.html">Recover Password</a></li>
            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Extra Pages <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
          <ul class="list-unstyled">
            <li><a href="pages-timeline.html">Timeline</a></li>
            <li><a href="pages-invoice.html">Invoice</a></li>
            <li><a href="pages-blank.html">Blank Page</a></li>
            <li><a href="pages-404.html">Error 404</a></li>
            <li><a href="pages-500.html">Error 500</a></li>
            <li><a href="pages-pricing.html">Pricing</a></li>
            <li><a href="pages-maintenance.html">Maintenance</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-flask-outline"></i><span> Email Templates <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
          <ul class="list-unstyled">
            <li><a href="email-templates-basic.html">Basic Action Email</a></li>
            <li><a href="email-templates-alert.html">Alert Email</a></li>
            <li><a href="email-templates-billing.html">Billing Email</a></li>
          </ul>
        </li>

      </ul>
    </div>
    <div class="clearfix"></div>
  </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->


<!-- Start right Content here -->
<div class="content-page">
  <!-- Start content -->
  <div class="content">

    <!-- ==================
    PAGE CONTENT START
    ================== -->

    <div class="page-content-wrapper">

      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-12">
            <div class="page-title-box">
              <div class="float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                  <li class="breadcrumb-item"><a href="#">Canvab</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
              <h4 class="page-title">Dashboard</h4>
            </div>
          </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
          <div class="col-md-6 col-xl-3">
            <div class="mini-stat clearfix bg-white">
              <span class="mini-stat-icon bg-primary"><i class="mdi mdi-cart-outline"></i></span>
              <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-primary">$9851</h3>
              </div>
              <div class="clearfix"></div>
              <p class=" mb-0 m-t-20 text-muted">Total Sales: $22506 <span class="float-right"><i class="fa fa-caret-up text-success m-r-5"></i>10.25%</span></p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="mini-stat clearfix bg-white">
              <span class="mini-stat-icon bg-success"><i class="mdi mdi-currency-usd"></i></span>
              <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-success">3514</h3>
              </div>
              <div class="clearfix"></div>
              <p class="text-muted mb-0 m-t-20">Total Orders: 892541 <span class="float-right"><i class="fa fa-caret-down text-danger m-r-5"></i>8.38%</span></p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="mini-stat clearfix bg-white">
              <span class="mini-stat-icon bg-primary"><i class="mdi mdi-cube-outline"></i></span>
              <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-primary">5210</h3>
              </div>
              <div class="clearfix"></div>
              <p class="text-muted mb-0 m-t-20">Total Users: 95,251 <span class="float-right"><i class="fa fa-caret-up text-success m-r-5"></i>3.05%</span></p>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="mini-stat clearfix bg-white">
              <span class="mini-stat-icon bg-success"><i class="mdi mdi-currency-btc"></i></span>
              <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-success">32,548</h3>
              </div>
              <div class="clearfix"></div>
              <p class="text-muted mb-0 m-t-20">Average Visitors: 24,511 <span class="float-right"><i class="fa fa-caret-up text-success m-r-5"></i>22.58%</span></p>
            </div>
          </div>
        </div>
        <!-- end row -->

        <div class="row">
          <div class="col-xl-7">
            <div class="card m-b-20">
              <div class="card-body">

                <h4 class="mt-0 mb-4 header-title">Monthly Earnings</h4>

                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                  <li class="list-inline-item">
                    <i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i>
                    <h5 class="mb-0">$1,542</h5>
                    <p class="text-muted font-14">Weekly Earnings</p>
                  </li>
                  <li class="list-inline-item">
                    <i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                    <h5 class="mb-0">$6,451</h5>
                    <p class="text-muted font-14">Monthly Earnings</p>
                  </li>
                  <li class="list-inline-item">
                    <i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i>
                    <h5 class="mb-0">$84,574</h5>
                    <p class="text-muted font-14">Yearly Earnings</p>
                  </li>
                </ul>

                <div id="stacked-bar-chart" class="ct-chart ct-golden-section" style="height: 360px;"></div>
              </div>
            </div>
          </div> <!-- end col -->
          <div class="col-xl-5">
            <div class="card m-b-20">
              <div class="card-body">

                <h4 class="mt-0 header-title">Sales Analytics</h4>

                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                  <li class="list-inline-item">
                    <i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i>
                    <h5 class="mb-0">$1,542</h5>
                    <p class="text-muted font-14">Weekly Earnings</p>
                  </li>
                  <li class="list-inline-item">
                    <i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                    <h5 class="mb-0">$6,451</h5>
                    <p class="text-muted font-14">Monthly Earnings</p>
                  </li>
                </ul>

                <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>

                <p class="mt-3 mb-0 text-center text-muted">
                  Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites..
                </p>

              </div>
            </div>
          </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
          <div class="col-xl-3">
            <div class="card m-b-20">
              <div class="card-body">
                <h4 class="mt-0 header-title m-b-30">Recent Stock</h4>

                <div class="text-center">
                  <input class="knob" data-width="120" data-height="120" data-linecap=round
                  data-fgColor="#e8474c" value="80" data-skin="tron" data-angleOffset="180"
                  data-readOnly=true data-thickness=".1"/>

                  <div class="clearfix"></div>
                  <a href="#" class="btn btn-sm btn-danger m-t-20">View All Data</a>
                  <ul class="list-inline row m-t-30 clearfix">
                    <li class="col-6">
                      <p class="m-b-5 font-18 font-500">7,541</p>
                      <p class="mb-0">Mobile Phones</p>
                    </li>
                    <li class="col-6">
                      <p class="m-b-5 font-18 font-500">125</p>
                      <p class="mb-0">Desktops</p>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3">
            <div class="card m-b-20">
              <div class="card-body">
                <h4 class="mt-0 header-title m-b-30">Purchase Order</h4>

                <div class="text-center">
                  <input class="knob" data-width="120" data-height="120" data-linecap=round
                  data-fgColor="#4ac18e" value="68" data-skin="tron" data-angleOffset="180"
                  data-readOnly=true data-thickness=".1"/>

                  <div class="clearfix"></div>
                  <a href="#" class="btn btn-sm btn-success m-t-20">View All Data</a>
                  <ul class="list-inline row m-t-30 clearfix">
                    <li class="col-6">
                      <p class="m-b-5 font-18 font-500">2,541</p>
                      <p class="mb-0">Mobile Phones</p>
                    </li>
                    <li class="col-6">
                      <p class="m-b-5 font-18 font-500">874</p>
                      <p class="mb-0">Desktops</p>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3">
            <div class="card m-b-20">
              <div class="card-body">
                <h4 class="mt-0 header-title m-b-30">Shipped Orders</h4>

                <div class="text-center">
                  <input class="knob" data-width="120" data-height="120" data-linecap=round
                  data-fgColor="#8d6e63" value="39" data-skin="tron" data-angleOffset="180"
                  data-readOnly=true data-thickness=".1"/>

                  <div class="clearfix"></div>
                  <a href="#" class="btn btn-sm btn-brown m-t-20">View All Data</a>
                  <ul class="list-inline row m-t-30 clearfix">
                    <li class="col-6">
                      <p class="m-b-5 font-18 font-500">1,154</p>
                      <p class="mb-0">Mobile Phones</p>
                    </li>
                    <li class="col-6">
                      <p class="m-b-5 font-18 font-500">89</p>
                      <p class="mb-0">Desktops</p>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3">
            <div class="card m-b-20">
              <div class="card-body">
                <h4 class="mt-0 header-title m-b-30">Cancelled Orders</h4>

                <div class="text-center">
                  <input class="knob" data-width="120" data-height="120" data-linecap=round
                  data-fgColor="#90a4ae" value="95" data-skin="tron" data-angleOffset="180"
                  data-readOnly=true data-thickness=".1"/>

                  <div class="clearfix"></div>
                  <a href="#" class="btn btn-sm btn-blue-grey m-t-20">View All Data</a>
                  <ul class="list-inline row m-t-30 clearfix">
                    <li class="col-6">
                      <p class="m-b-5 font-18 font-500">95</p>
                      <p class="mb-0">Mobile Phones</p>
                    </li>
                    <li class="col-6">
                      <p class="m-b-5 font-18 font-500">25</p>
                      <p class="mb-0">Desktops</p>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- end row -->

      </div><!-- container -->

    </div> <!-- Page content Wrapper -->

  </div> <!-- content -->

  <footer class="footer">
    © 2018 Canvab <span class="text-muted hide-sm float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
  </footer>

</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!--Chartist Chart-->
<script src="assets/plugins/chartist/js/chartist.min.js"></script>
<script src="assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>

<!-- KNOB JS -->
<script src="assets/plugins/jquery-knob/excanvas.js"></script>
<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

<!-- Dashboard init -->
<script src="assets/pages/dashboard.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>
</html>
