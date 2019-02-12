<!DOCTYPE html>
<html lang="en" class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Canvab - Responsive Bootstrap 4 Admin Dashboard</title>
  <meta name="description" content="Admin Dashboard">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="{{ asset('vendor/dashboard/css/chartist.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/dashboard/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/dashboard/css/icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/dashboard/css/style.css') }}">

  <script>
  var tvt = tvt || {}; tvt.captureVariables = function(a){for(var b = new Date,c={},d=Object.keys(a||{}),e=0,f;f=d[e];e++)if(a.hasOwnProperty(f)&&"undefined"!=typeof a[f])try{var g=[];c[f]=JSON.stringify(a[f],function(a,b){try{if("function"!==typeof b){if("object"===typeof b&&null!==b){if(b instanceof HTMLElement||b instanceof Node||-1!=g.indexOf(b))return;g.push(b)}return b}}catch(H){}})}catch(l){}a=document.createEvent("CustomEvent");a.initCustomEvent("TvtRetrievedVariablesEvent",!0,!0,{variables:c,date:b});window.dispatchEvent(a)};window.setTimeout(function() {tvt.captureVariables({'dataLayer.hide': (function(a){a=a.split(".");for(var b=window,c=0;c<a.length&&(b=b[a[c]],b);c++);return b})('dataLayer.hide'),'gaData': window['gaData'],'dataLayer': window['dataLayer']})}, 2000);
  </script>
</head>
<body class="fixed-left" style="overflow: visible;">
  <!-- Loader -->
  <div id="preloader" style="display: none;">
    <div id="status" style="display: none;">
      <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div>
    </div>
  </div>

  <!-- Begin page -->
  <div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
      <!-- LOGO -->
      <div class="topbar-left">
        <div class="">
          <a href="https://themesbrand.com/canvab/vertical/index.html" class="logo text-center">Canvab</a>
          <!--<a href="index.html" class="logo"><img src="{{ asset('vendor/dashboard/imgassets/images/logo.png') }}" height="14" alt="logo"></a>-->
        </div>
      </div>

      <nav class="navbar-custom">
        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
          <div class="search-bar">
            <input class="search-input" type="search" placeholder="Search">
            <a href="https://themesbrand.com/canvab/vertical/index.html#" class="close-search toggle-search" data-target="#search-wrap">
              <i class="mdi mdi-close-circle"></i>
            </a>
          </div>
        </div>

        <ul class="list-inline float-right mb-0">
          <!-- Search -->
          <li class="list-inline-item dropdown notification-list">
            <a class="nav-link waves-effect toggle-search" href="https://themesbrand.com/canvab/vertical/index.html#" data-target="#search-wrap">
              <i class="mdi mdi-magnify noti-icon"></i>
            </a>
          </li>
          <!-- Fullscreen -->
          <li class="list-inline-item dropdown notification-list hide-sm">
            <a class="nav-link waves-effect" href="https://themesbrand.com/canvab/vertical/index.html#" id="btn-fullscreen">
              <i class="mdi mdi-fullscreen noti-icon"></i>
            </a>
          </li>
          <!-- language-->
          <li class="list-inline-item dropdown notification-list hide-sm">
            <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="https://themesbrand.com/canvab/vertical/index.html#" role="button" aria-haspopup="false" aria-expanded="false">
              English <img src="{{ asset('vendor/dashboard/img/us_flag.jpg') }}" class="ml-2" height="16" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right language-switch">
              <a class="dropdown-item" href="https://themesbrand.com/canvab/vertical/index.html#"><img src="{{ asset('vendor/dashboard/img/germany_flag.jpg') }}" alt="" height="16"><span> German </span></a>
              <a class="dropdown-item" href="https://themesbrand.com/canvab/vertical/index.html#"><img src="{{ asset('vendor/dashboard/img/italy_flag.jpg') }}" alt="" height="16"><span> Italian </span></a>
              <a class="dropdown-item" href="https://themesbrand.com/canvab/vertical/index.html#"><img src="{{ asset('vendor/dashboard/img/french_flag.jpg') }}" alt="" height="16"><span> French </span></a>
              <a class="dropdown-item" href="https://themesbrand.com/canvab/vertical/index.html#"><img src="{{ asset('vendor/dashboard/img/spain_flag.jpg') }}" alt="" height="16"><span> Spanish </span></a>
              <a class="dropdown-item" href="https://themesbrand.com/canvab/vertical/index.html#"><img src="{{ asset('vendor/dashboard/img/russia_flag.jpg') }}" alt="" height="16"><span> Russian </span></a>
            </div>
          </li>
          <!-- notification-->
          <li class="list-inline-item dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="https://themesbrand.com/canvab/vertical/index.html#" role="button" aria-haspopup="false" aria-expanded="false">
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
            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="https://themesbrand.com/canvab/vertical/index.html#" role="button" aria-haspopup="false" aria-expanded="false">
              <img src="{{ asset('vendor/dashboard/img/avatar-1.jpg') }}" alt="user" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
              <a class="dropdown-item" href="https://themesbrand.com/canvab/vertical/index.html#"><i class="dripicons-user text-muted"></i> Profile</a>
              <a class="dropdown-item" href="https://themesbrand.com/canvab/vertical/index.html#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
              <a class="dropdown-item" href="https://themesbrand.com/canvab/vertical/index.html#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
              <a class="dropdown-item" href="https://themesbrand.com/canvab/vertical/index.html#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://themesbrand.com/canvab/vertical/index.html#"><i class="dripicons-exit text-muted"></i> Logout</a>
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

      <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 939px;"><div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 939px;">
        <div id="sidebar-menu" class="active">
          <ul>

            <li class="menu-title">Main</li>

            <li class="active">
              <a href="https://themesbrand.com/canvab/vertical/index.html" class="waves-effect active"><i class="mdi mdi-view-dashboard"></i><span> Dashboard <span class="badge badge-pill badge-success float-right">02</span> </span></a>
            </li>

            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Email <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
              <ul class="list-unstyled">
                <li><a href="https://themesbrand.com/canvab/vertical/email-inbox.html">Inbox</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/email-read.html">Email Read</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/email-compose.html">Email Compose</a></li>
              </ul>
            </li>

            <li>
              <a href="https://themesbrand.com/canvab/vertical/calendar.html" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Calendar </span></a>
            </li>

            <li class="menu-title">Components</li>

            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> User Interface <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
              <ul class="list-unstyled">
                <li><a href="https://themesbrand.com/canvab/vertical/ui-buttons.html">Buttons</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-cards.html">Cards</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-modals.html">Modals</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-images.html">Images</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-alerts.html">Alerts</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-progressbars.html">Progress Bars</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-dropdowns.html">Dropdowns</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-navs.html">Navs</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-pagination.html">Pagination</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-popover-tooltips.html">Popover &amp; Tooltips</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-badge.html">Badge</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-carousel.html">Carousel</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-video.html">Video</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-typography.html">Typography</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-sweet-alert.html">Sweet-Alert</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-grid.html">Grid</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-nestable.html">Nestable</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-alertify.html">Alertify</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/ui-rangeslider.html">Range Slider</a></li>
              </ul>
            </li>

            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Forms <span class="badge badge-pill badge-primary float-right">9</span> </span></a>
              <ul class="list-unstyled">
                <li><a href="https://themesbrand.com/canvab/vertical/form-elements.html">Form Elements</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/form-validation.html">Form Validation</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/form-advanced.html">Form Advanced</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/form-wizard.html">Form Wizard</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/form-editors.html">Form Editors</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/form-uploads.html">Form File Upload</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/form-mask.html">Form Mask</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/form-summernote.html">Summernote</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/form-xeditable.html">Form Xeditable</a></li>
              </ul>
            </li>

            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-line"></i><span> Charts <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
              <ul class="list-unstyled">
                <li><a href="https://themesbrand.com/canvab/vertical/charts-chartjs.html">Chartjs Chart</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/charts-flot.html">Flot Chart</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/charts-morris.html">Morris Chart</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/charts-chartist.html">Chartist Chart</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/charts-sparkline.html">Sparkline Chart</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/charts-other.html">Jquery Knob Chart</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/charts-peity.html">Peity Chart</a></li>
              </ul>
            </li>

            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span> Tables <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
              <ul class="list-unstyled">
                <li><a href="https://themesbrand.com/canvab/vertical/tables-basic.html">Basic Tables</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/tables-datatable.html">Data Table</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/tables-responsive.html">Responsive Table</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/tables-editable.html">Editable Table</a></li>
              </ul>
            </li>

            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Icons  <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></span> </a>
              <ul class="list-unstyled">
                <li><a href="https://themesbrand.com/canvab/vertical/icons-material.html">Material Design</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/icons-ion.html">Ion Icons</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/icons-fontawesome.html">Font Awesome</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/icons-themify.html">Themify Icons</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/icons-dripicons.html">Dripicons</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/icons-typicons.html">Typicons Icons</a></li>
              </ul>
            </li>

            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-maps"></i><span> Maps <span class="badge badge-pill badge-pink float-right">NEW</span> </span></a>
              <ul class="list-unstyled">
                <li><a href="https://themesbrand.com/canvab/vertical/maps-google.html"> Google Map</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/maps-vector.html"> Vector Map</a></li>
              </ul>
            </li>

            <li class="menu-title">Extras</li>

            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-location"></i><span> Authentication <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
              <ul class="list-unstyled">
                <li><a href="https://themesbrand.com/canvab/vertical/pages-login.html">Login</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/pages-register.html">Register</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/pages-recoverpw.html">Recover Password</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/pages-lock-screen.html">Lock Screen</a></li>
              </ul>
            </li>

            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Extra Pages <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
              <ul class="list-unstyled">
                <li><a href="https://themesbrand.com/canvab/vertical/pages-timeline.html">Timeline</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/pages-invoice.html">Invoice</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/pages-blank.html">Blank Page</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/pages-404.html">Error 404</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/pages-500.html">Error 500</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/pages-pricing.html">Pricing</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/pages-maintenance.html">Maintenance</a></li>
              </ul>
            </li>

            <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-flask-outline"></i><span> Email Templates <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
              <ul class="list-unstyled">
                <li><a href="https://themesbrand.com/canvab/vertical/email-templates-basic.html">Basic Action Email</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/email-templates-alert.html">Alert Email</a></li>
                <li><a href="https://themesbrand.com/canvab/vertical/email-templates-billing.html">Billing Email</a></li>
              </ul>
            </li>

          </ul>
        </div>
        <div class="clearfix"></div>
      </div><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 10px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 939px;"></div><div class="slimScrollRail" style="width: 10px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div> <!-- end sidebarinner -->
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
                      <li class="breadcrumb-item"><a href="https://themesbrand.com/canvab/vertical/index.html#">Canvab</a></li>
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

                    <div id="stacked-bar-chart" class="ct-chart ct-golden-section" style="height: 360px;"><div class="chartist-tooltip" style="top: 213px; left: 576px;"><span class="chartist-tooltip-value">1300000</span></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="325" class="ct-grid ct-horizontal"></line><line x1="132.675" x2="132.675" y1="15" y2="325" class="ct-grid ct-horizontal"></line><line x1="215.35" x2="215.35" y1="15" y2="325" class="ct-grid ct-horizontal"></line><line x1="298.025" x2="298.025" y1="15" y2="325" class="ct-grid ct-horizontal"></line><line x1="380.7" x2="380.7" y1="15" y2="325" class="ct-grid ct-horizontal"></line><line x1="463.375" x2="463.375" y1="15" y2="325" class="ct-grid ct-horizontal"></line><line x1="546.05" x2="546.05" y1="15" y2="325" class="ct-grid ct-horizontal"></line><line x1="628.725" x2="628.725" y1="15" y2="325" class="ct-grid ct-horizontal"></line><line x1="711.4" x2="711.4" y1="15" y2="325" class="ct-grid ct-horizontal"></line><line x1="794.0749999999999" x2="794.0749999999999" y1="15" y2="325" class="ct-grid ct-horizontal"></line><line y1="325" y2="325" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="296.8181818181818" y2="296.8181818181818" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="268.6363636363636" y2="268.6363636363636" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="240.45454545454544" y2="240.45454545454544" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="212.27272727272725" y2="212.27272727272725" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="184.0909090909091" y2="184.0909090909091" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="155.9090909090909" y2="155.9090909090909" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="127.72727272727272" y2="127.72727272727272" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="99.54545454545453" y2="99.54545454545453" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="71.36363636363637" y2="71.36363636363637" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="43.18181818181819" y2="43.18181818181819" x1="50" x2="876.75" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="876.75" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="91.3375" x2="91.3375" y1="325" y2="234.8181818181818" class="ct-bar" ct:value="800000" style="stroke-width: 30px"></line><line x1="174.01250000000002" x2="174.01250000000002" y1="325" y2="189.72727272727272" class="ct-bar" ct:value="1200000" style="stroke-width: 30px"></line><line x1="256.6875" x2="256.6875" y1="325" y2="167.1818181818182" class="ct-bar" ct:value="1400000" style="stroke-width: 30px"></line><line x1="339.36249999999995" x2="339.36249999999995" y1="325" y2="178.45454545454547" class="ct-bar" ct:value="1300000" style="stroke-width: 30px"></line><line x1="422.03749999999997" x2="422.03749999999997" y1="325" y2="153.65454545454546" class="ct-bar" ct:value="1520000" style="stroke-width: 30px"></line><line x1="504.7125" x2="504.7125" y1="325" y2="189.72727272727272" class="ct-bar" ct:value="1200000" style="stroke-width: 30px"></line><line x1="587.3874999999999" x2="587.3874999999999" y1="325" y2="167.1818181818182" class="ct-bar" ct:value="1400000" style="stroke-width: 30px"></line><line x1="670.0625" x2="670.0625" y1="325" y2="178.45454545454547" class="ct-bar" ct:value="1300000" style="stroke-width: 30px"></line><line x1="752.7375" x2="752.7375" y1="325" y2="153.65454545454546" class="ct-bar" ct:value="1520000" style="stroke-width: 30px"></line><line x1="835.4124999999999" x2="835.4124999999999" y1="325" y2="167.1818181818182" class="ct-bar" ct:value="1400000" style="stroke-width: 30px"></line></g><g class="ct-series ct-series-b"><line x1="91.3375" x2="91.3375" y1="234.8181818181818" y2="212.27272727272725" class="ct-bar" ct:value="200000" style="stroke-width: 30px"></line><line x1="174.01250000000002" x2="174.01250000000002" y1="189.72727272727272" y2="144.6363636363636" class="ct-bar" ct:value="400000" style="stroke-width: 30px"></line><line x1="256.6875" x2="256.6875" y1="167.1818181818182" y2="110.81818181818181" class="ct-bar" ct:value="500000" style="stroke-width: 30px"></line><line x1="339.36249999999995" x2="339.36249999999995" y1="178.45454545454547" y2="144.63636363636365" class="ct-bar" ct:value="300000" style="stroke-width: 30px"></line><line x1="422.03749999999997" x2="422.03749999999997" y1="153.65454545454546" y2="102.7018181818182" class="ct-bar" ct:value="452000" style="stroke-width: 30px"></line><line x1="504.7125" x2="504.7125" y1="189.72727272727272" y2="133.36363636363635" class="ct-bar" ct:value="500000" style="stroke-width: 30px"></line><line x1="587.3874999999999" x2="587.3874999999999" y1="167.1818181818182" y2="122.09090909090907" class="ct-bar" ct:value="400000" style="stroke-width: 30px"></line><line x1="670.0625" x2="670.0625" y1="178.45454545454547" y2="122.0909090909091" class="ct-bar" ct:value="500000" style="stroke-width: 30px"></line><line x1="752.7375" x2="752.7375" y1="153.65454545454546" y2="102.7018181818182" class="ct-bar" ct:value="452000" style="stroke-width: 30px"></line><line x1="835.4124999999999" x2="835.4124999999999" y1="167.1818181818182" y2="110.81818181818181" class="ct-bar" ct:value="500000" style="stroke-width: 30px"></line></g><g class="ct-series ct-series-c"><line x1="91.3375" x2="91.3375" y1="212.27272727272725" y2="194.2363636363636" class="ct-bar" ct:value="160000" style="stroke-width: 30px"></line><line x1="174.01250000000002" x2="174.01250000000002" y1="144.6363636363636" y2="111.94545454545451" class="ct-bar" ct:value="290000" style="stroke-width: 30px"></line><line x1="256.6875" x2="256.6875" y1="110.81818181818181" y2="64.59999999999997" class="ct-bar" ct:value="410000" style="stroke-width: 30px"></line><line x1="339.36249999999995" x2="339.36249999999995" y1="144.63636363636365" y2="77.00000000000003" class="ct-bar" ct:value="600000" style="stroke-width: 30px"></line><line x1="422.03749999999997" x2="422.03749999999997" y1="102.7018181818182" y2="36.418181818181864" class="ct-bar" ct:value="588000" style="stroke-width: 30px"></line><line x1="504.7125" x2="504.7125" y1="133.36363636363635" y2="115.32727272727269" class="ct-bar" ct:value="160000" style="stroke-width: 30px"></line><line x1="587.3874999999999" x2="587.3874999999999" y1="122.09090909090907" y2="89.39999999999998" class="ct-bar" ct:value="290000" style="stroke-width: 30px"></line><line x1="670.0625" x2="670.0625" y1="122.0909090909091" y2="54.45454545454547" class="ct-bar" ct:value="600000" style="stroke-width: 30px"></line><line x1="752.7375" x2="752.7375" y1="102.7018181818182" y2="36.418181818181864" class="ct-bar" ct:value="588000" style="stroke-width: 30px"></line><line x1="835.4124999999999" x2="835.4124999999999" y1="110.81818181818181" y2="64.59999999999997" class="ct-bar" ct:value="410000" style="stroke-width: 30px"></line></g></g><g class="ct-labels"><foreignobject style="overflow: visible;" x="50" y="330" width="82.675" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Q1</span></foreignobject><foreignobject style="overflow: visible;" x="132.675" y="330" width="82.675" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Q2</span></foreignobject><foreignobject style="overflow: visible;" x="215.35" y="330" width="82.67499999999998" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Q3</span></foreignobject><foreignobject style="overflow: visible;" x="298.025" y="330" width="82.67500000000001" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Q4</span></foreignobject><foreignobject style="overflow: visible;" x="380.7" y="330" width="82.67500000000001" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Q5</span></foreignobject><foreignobject style="overflow: visible;" x="463.375" y="330" width="82.67499999999995" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Q6</span></foreignobject><foreignobject style="overflow: visible;" x="546.05" y="330" width="82.67500000000007" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Q7</span></foreignobject><foreignobject style="overflow: visible;" x="628.725" y="330" width="82.67499999999995" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Q8</span></foreignobject><foreignobject style="overflow: visible;" x="711.4" y="330" width="82.67499999999995" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Q9</span></foreignobject><foreignobject style="overflow: visible;" x="794.0749999999999" y="330" width="82.67500000000007" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 83px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Q10</span></foreignobject><foreignobject style="overflow: visible;" y="296.8181818181818" x="10" height="28.181818181818183" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">0k</span></foreignobject><foreignobject style="overflow: visible;" y="268.6363636363636" x="10" height="28.181818181818183" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">250k</span></foreignobject><foreignobject style="overflow: visible;" y="240.45454545454544" x="10" height="28.18181818181818" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">500k</span></foreignobject><foreignobject style="overflow: visible;" y="212.27272727272725" x="10" height="28.181818181818187" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">750k</span></foreignobject><foreignobject style="overflow: visible;" y="184.09090909090907" x="10" height="28.181818181818173" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">1000k</span></foreignobject><foreignobject style="overflow: visible;" y="155.9090909090909" x="10" height="28.181818181818187" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">1250k</span></foreignobject><foreignobject style="overflow: visible;" y="127.72727272727272" x="10" height="28.181818181818187" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">1500k</span></foreignobject><foreignobject style="overflow: visible;" y="99.54545454545453" x="10" height="28.181818181818187" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">1750k</span></foreignobject><foreignobject style="overflow: visible;" y="71.36363636363637" x="10" height="28.18181818181816" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">2000k</span></foreignobject><foreignobject style="overflow: visible;" y="43.18181818181819" x="10" height="28.181818181818187" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">2250k</span></foreignobject><foreignobject style="overflow: visible;" y="15" x="10" height="28.181818181818187" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">2500k</span></foreignobject><foreignobject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">2750k</span></foreignobject></g></svg></div>
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

                    <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-pie" style="width: 100%; height: 100%;"><g class="ct-series ct-series-c"><path d="M309.625,5A145,145,0,0,0,184.305,222.938L309.625,150Z" class="ct-slice-pie" ct:value="4"></path></g><g class="ct-series ct-series-b"><path d="M184.051,222.5A145,145,0,0,0,382.563,275.32L309.625,150Z" class="ct-slice-pie" ct:value="3"></path></g><g class="ct-series ct-series-a"><path d="M382.125,275.574A145,145,0,0,0,309.625,5L309.625,150Z" class="ct-slice-pie" ct:value="5"></path></g><g><text dx="379.65462240595747" dy="131.23561923006724" text-anchor="middle" class="ct-label">42%</text><text dx="290.86061923006724" dy="220.02962240595747" text-anchor="middle" class="ct-label">25%</text><text dx="246.8381582256282" dy="113.75" text-anchor="middle" class="ct-label">33%</text></g></svg></div>

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
                      <div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input class="knob" data-width="120" data-height="120" data-linecap="round" data-fgcolor="#e8474c" value="80" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(232, 71, 76); padding: 0px; -webkit-appearance: none;"></div>

                      <div class="clearfix"></div>
                      <a href="https://themesbrand.com/canvab/vertical/index.html#" class="btn btn-sm btn-danger m-t-20">View All Data</a>
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
                      <div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input class="knob" data-width="120" data-height="120" data-linecap="round" data-fgcolor="#4ac18e" value="68" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(74, 193, 142); padding: 0px; -webkit-appearance: none;"></div>

                      <div class="clearfix"></div>
                      <a href="https://themesbrand.com/canvab/vertical/index.html#" class="btn btn-sm btn-success m-t-20">View All Data</a>
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
                      <div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input class="knob" data-width="120" data-height="120" data-linecap="round" data-fgcolor="#8d6e63" value="39" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(141, 110, 99); padding: 0px; -webkit-appearance: none;"></div>

                      <div class="clearfix"></div>
                      <a href="https://themesbrand.com/canvab/vertical/index.html#" class="btn btn-sm btn-brown m-t-20">View All Data</a>
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
                      <div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input class="knob" data-width="120" data-height="120" data-linecap="round" data-fgcolor="#90a4ae" value="95" data-skin="tron" data-angleoffset="180" data-readonly="true" data-thickness=".1" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none; font: bold 24px Arial; text-align: center; color: rgb(144, 164, 174); padding: 0px; -webkit-appearance: none;"></div>

                      <div class="clearfix"></div>
                      <a href="https://themesbrand.com/canvab/vertical/index.html#" class="btn btn-sm btn-blue-grey m-t-20">View All Data</a>
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


  <script src="{{ asset('vendor/dashboard/js/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/modernizr.min.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/jquery.slimscroll.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/waves.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/jquery.nicescroll.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/chartist.min.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/chartist-plugin-tooltip.min.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/excanvas.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/jquery.knob.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/dashboard.js') }}"></script>
  <script src="{{ asset('vendor/dashboard/js/app.js') }}"></script>
</body>
</html>
