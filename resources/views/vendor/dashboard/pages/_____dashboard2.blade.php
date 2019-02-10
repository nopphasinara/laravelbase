@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>

/*************************************
SECTION CSS
**************************************/
     /********  1. SIDEBAR-WIDGET-1 CSS **************************************/
                .sidebar-widget-1 .list-group-item {padding:10px; }
                .list-group-hover .list-group-item:hover {
                   background-color: #febf00 ;color:#fff;transition: all 0.5s ease-out;}
                .sidebar-widget-1 i {color:#696969 ;  margin-right:10px;font-size:18px;font-weight:600;}
                .list-group-item.bg-active {background:#febf00 ;color:#fff; }

    /********  2. BREADCRUMB CSS **************************************/
                .breadcrumb-box {padding:2px;}
                .breadcrub-box:hover a  {color:#031f9a; font-weight:600;}

    /********  3. Search-result-title CSS **************************************/
                .search-result-title {padding-top:15px;}
    /******************4.  Crane Listing View Classes ***********/
                .crane-grid-listing {box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);  margin-bottom:15px; line-height:24px;}
                .crane-grid-listing:hover {background:#031f9a ;}
                .crane-grid-listing:hover  {
                    color: #ffffff;
                    -webkit-transition: all 0.5s ease-out;
                    -moz-transition: all 0.5s ease-out;
                    -ms-transition: all 0.5s ease-out;
                    -o-transition: all 0.5s ease-out;
                    transition: all 0.5s ease-out;
                }
                .crane-grid-listing :hover a  {
                    color: #cccccc;
                    -webkit-transition: all 0.5s ease-out;
                    -moz-transition: all 0.5s ease-out;
                    -ms-transition: all 0.5s ease-out;
                    -o-transition: all 0.5s ease-out;
                    transition: all 0.5s ease-out;
                }
                .crane-image-block {padding:0px;margin:0px;}
                .crane-grid-listing a {text-decoration:none;}
                .crane-list-img img {min-height: 200px; overflow: hidden;}
                .crane-list-content {height: 200px;  overflow: hidden; padding-left:1px;}
                .crane-list-content i {color:#febf00; padding-right:2px;}

/******************5.  Pagination Classes ***********/
                .pagination {display: inline-block;}
                .pagination a { color: black;
                    float: left;padding: 8px 12px; text-decoration: none;  transition: background-color .3s;
                    border: 1px solid #e2e2e2;margin: 0 2px 2px 0px;}
                .pagination a.active {background-color: #031f9a;color: white;
                    border: 1px solid #e2e2e2;}
                .pagination a:hover:not(.active) {background-color: #ddd;}
/**************************************
  00. GENERIC CSS
**************************************/
* {-webkit-border-radius: 0 !important;-moz-border-radius: 0 !important; border-radius: 0 !important;}
body {font-family: 'Roboto';font-size: 16px;letter-spacing:.5px;}
a:hover {text-decoration:none;}
td{vertical-align:middle;}

/*************************************
  2. MARGIN CSS
**************************************/
.nav-content-margin {margin-top:50px;}
.content-top-margin {margin-top:15px;}
.margin-t-40 {margin-top:40px;}
.margin-b-15 {margin-bottom:15px;}
/*************************************
  3. PADDING CSS
**************************************/
.padding-left-20 {padding-left:20px;}
.padding-b-10 {padding-bottom:10px;}
.padding-tb-10 {padding:10px 0px 10px 0px;}
/*************************************
  4. GAP & BORDER CSS
**************************************/


/*************************************
  5. BOX-SHADOW CSS
**************************************/
/*************************************
  6. ICONS CSS
**************************************/
/*************************************
  7. TYPROGRAPHY FONT CSS
**************************************/
/*************************************
  8. IMAGES/MEDIA CSS
**************************************/
/*************************************
  8. FORM CSS
**************************************/
input[type="text"], input[type="password"],  input[type="email"] {
    width: 100%;
    padding: 22px 10px;
    border: 1px solid #febf00 ;
    outline: none;
    font-size: 1em;
    margin-bottom: 1.2%;
    color: #000;
    font-family: 'Roboto', sans-serif;
}
input[type="submit"] {
    padding:10px ;
    border:  1px solid #febf00;
    width: 250px;
    outline: none;
    font-size: 1em;
    letter-spacing: 1px;
    font-weight: 600;
    color: #fff;
    background: #031f9a;
    text-transform: uppercase;
    cursor: pointer;
    margin: 1% 0em 7.5%;
    transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    font-family: 'Roboto', sans-serif;
}
.select-box {
    display: block;
    width: 100%;
    padding: 12px 10px;
    font-size: 16px;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #febf00;
    border-radius: 0px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
/*************************************
  8. Background CSS
**************************************/
.bg-blue {background:#031f9a ;color:#fff !important;}
.bg-yellow {background:#febf00  ;color:#fff !important;}
.bg-blue-1 {background-color: #e7f3fe;color: #424448!important; }
.bg-grey-1 {background-color: #f2f2f2;color: #424448!important; }
.bg-light-grey-1 {background-color: #f0f3f5;color: #424448!important; }

/*--------------------------------------
  0.  NAVIGATION CSS
--------------------------------------*/
.gaadiexp,
.gaadiexp:after,
.gaadiexp *,
.gaadiexp *:before,
.gaadiexp *:after,
.header-nav *,
.header-nav *:before,
.header-nav *:after {
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}


.gaadiexp {
    cursor: pointer;
    height: 50px;
    margin-bottom: 0;
    width: 60px;
    z-index: 9001;
    left: 0;
    overflow: hidden;
    position: fixed;
    top: 0;
    background: #febf00 ;
}

.gaadiexp:after {
    bottom: 7px;
    color: #031f9a ;
    content: '';
    font-size: 13px;
    font-weight: 300;
    left: 0;
    position: absolute;
    text-align: center;
    width: 100%;
}


/*--------------------------------------
 Creates the look of the gaadiexp icon
 using the inner span and pseudo-elements
--------------------------------------*/

.gaadiexp span,
.gaadiexp span:before,
.gaadiexp span:after {
    background: #031f9a ;
    border-radius: 0.2em;
    height: 2px;
    left: 10px;
    position: absolute;
    top: 22px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    width: 35px;
}


/* Reset the left and create the pseudo-element */

.gaadiexp span:before,
.gaadiexp span:after {
    content: '';
    left: 0;
}


/* Top bar position */

.gaadiexp span:before {
    top: -8px;
}


/* Bottom bar position */

.gaadiexp span:after {
    top: 8px;
}


/* Get rid of more on action (IE9 or higher) */

.gaadiexp-check:checked + .gaadiexp:after {
    content: '';
}


/* Get rid of the middle bar on action (IE9 or higher) */

.gaadiexp-check:checked + .gaadiexp span {
    height: 0;
    width: 0;
}


/* Moves the top and bottom bars to the middle on action (IE9 or higher) */

.gaadiexp-check:checked + .gaadiexp span:before,
.gaadiexp-check:checked + .gaadiexp span:after {
    top: 6px;
}


/* Rotates the top bar on action with full browser support (IE9 or higher) */

.gaadiexp-check:checked + .gaadiexp span:before {
    -webkit-transform: rotate(225deg);
    -ms-transform: rotate(225deg);
    transform: rotate(225deg);
}


/* Rotates the bottom bar on action with full browser support (IE9 or higher) */

.gaadiexp-check:checked + .gaadiexp span:after {
    -webkit-transform: rotate(-225deg);
    -ms-transform: rotate(225deg);
    transform: rotate(-225deg);
}

#mobile-nav:focus + .gaadiexp,
.gaadiexp:focus,
.gaadiexp:hover {
    background: #031f9a ;
}

.gaadiexp-check:checked + .gaadiexp {
    width: 200px;
}

.gaadiexp-check:checked + .gaadiexp:after {
    bottom: 10px;
    content: 'Close ';
    font-size: 18px;
    padding-left: 0px;
}

#mobile-nav {
    left: -9999px;
    position: fixed;
    top: 0;
}

.header-nav ul li a:active,
.header-nav ul li a:focus,
.header-nav ul li a:hover,
#mobile-nav:focus + .gaadiexp,
.gaadiexp:focus,
.gaadiexp:hover {
    background: #ffaa00  ;
    outline: none;
    border-bottom: 1px solid #031f9a ;
}

.fixed-nav {
    background: #031f9a ;
    height: 50px;
    position: fixed;
    width: 100%;
    z-index: 9000;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
}

.header-nav {
    float: left;
    height: 40px;
    position: relative;
    width: 100%;
}

.header-nav ul {
    background: #fff;
    height: calc(100vh - 60px);
    list-style: none;
    margin: 0;
    overflow-y: auto;
    padding: 10px 0 0 0;
    position: absolute;
    -webkit-transform: translateX(-110%);
    transform: translateX(-110%);
    -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
    -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
    -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
    transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
    width: 200px;
    box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.075);
    top: 100%;
    z-index: 1;
}

.gaadiexp-check:checked ~ .header-nav ul {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}

.header-nav ul li {
    float: left;
    position: relative;
    width: 100%;
}

.header-nav ul li a {
    color: rgba(0, 0, 0, 0.79);
    display: block;
    float: left;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0.75px;
    line-height: 24px;
    margin-left: 0;
    overflow: hidden;
    padding: 6px 6px 6px 12px;
    position: relative;
    text-decoration: none;
    width: 100%;
}
  </style>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
@endpush

@section('content')
  <input type="checkbox" name="mobile-nav" id="mobile-nav" class="gaadiexp-check" onchange="this.blur()">
  <label for="mobile-nav" class="gaadiexp white" tabindex="0"><span></span></label>
  <nav role="navigation" class="header-nav">
      <div class="fixed-nav">
          <a class="navbar-brand" style="margin-left:50px;" href="auction.gaadiexpert.com"></a>
          <img class="img-responsive" src="http://auction.gaadiexpert.com/public/images/logo1.png" style="margin-top:17px; width:180px;">
          <div class="menu">
              <div class="list-group-hover sidebar-widget-1">
  	            <ul class="list-unstyled">
              <li><a href="dashboard.html" class="list-group-item  bg-Published"><i class="fa fa-tachometer"></i> Dashboard <span class="badge">12</span> </a></li>
              <li><a href="my-profile.html" class="list-group-item"><i class="fa fa-user"></i> My Profile</a> </li>
              <li><a href="my-listings.html" class="list-group-item"><i class="fa fa-list"></i>  My Listings</a> </li>
              <li><a href="my-enquiry.html" class="list-group-item"><i class="fa fa-envelope"></i> My Enquiry</a> </li>
              <li><a href="add-business.html" class="list-group-item"><i class="fa fa-plus-square"></i> Add Business</a> </li>
              <li><a href="login.html" class="list-group-item"><i class="fa fa-key"></i> Login</a> </li>
              <li><a href="signup.html" class="list-group-item"><i class="fa fa-user-plus"></i> Signup</a> </li>
              <li><a href="account-settings.html" class="list-group-item"><i class="fa fa-wrench"></i> Account Settings</a> </li>
              <li><a href="change-password.html" class="list-group-item"><i class="fa fa-lock"></i> Change Password</a> </li>
              <li><a href="listings-page.html" class="list-group-item"><i class="fa fa-angle-double-right"></i> Listings Page</a> </li>
              <li><a href="product-page.html" class="list-group-item"><i class="fa fa-angle-double-right"></i> Product Page</a> </li>
              <li><a href="logout.html" class="list-group-item"><i class="fa fa-power-off"></i> Log Out</a> </li>
              </ul>
           </div>
          </div>
      </div>
  </nav>

  <div class="search-result-title">
      <div class="container-fluid">
          <div class="row nav-content-margin">
              <div class="col-md-12">
                  <h3>My Listings</h3>
                  <hr>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-9">
            <div class="table-responsive">
              <table class="table table-hover table-bordered">
      <thead>
        <tr class="bg-blue">
          <th><input type="checkbox" value=""></th>
          <th>Business Title</th>
          <th>Description</th>
          <th>State</th>
          <th>City</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" value=""></td>
          <td>Jagdambe Crane Services</td>
          <td>Crane, Towing Crane, Hydralic Crane, 24x7, Payment in Cash</td>
          <td>New Delhi</td>
          <td>New Delhi</td>
          <td>Not Published</td>
          <td><i class="fa fa-pencil-square-o"></i></td>
          <td><i class="fa fa-trash"></i></td>

        </tr>
        <tr>
          <td><input type="checkbox" value=""></td>
          <td>Jagdambe Crane Services</td>
          <td>Crane, Towing Crane, Hydralic Crane, 24x7, Payment in Cash</td>
          <td>New Delhi</td>
          <td>New Delhi</td>
          <td>Not Published</td>
          <td valign="middle"><i class="fa fa-pencil-square-o"></i></td>
          <td><i class="fa fa-trash"></i></td>

        </tr>
        <tr class="danger">
          <td><input type="checkbox" value=""></td>
          <td>Jagdambe Crane Services</td>
          <td>Crane, Towing Crane, Hydralic Crane, 24x7, Payment in Cash</td>
          <td>New Delhi</td>
          <td>New Delhi</td>
          <td>Not Published</td>
          <td><i class="fa fa-pencil-square-o"></i></td>
          <td><i class="fa fa-trash"></i></td>

        </tr>
        <tr>
          <td><input type="checkbox" value=""></td>
          <td>Jagdambe Crane Services</td>
          <td>Crane, Towing Crane, Hydralic Crane, 24x7, Payment in Cash</td>
          <td>New Delhi</td>
          <td>New Delhi</td>
          <td>Not Published</td>
          <td><i class="fa fa-pencil-square-o"></i></td>
          <td><i class="fa fa-trash"></i></td>

        </tr>
        <tr class="success">
          <td><input type="checkbox" value=""></td>
          <td>Jagdambe Crane Services</td>
          <td>Crane, Towing Crane, Hydralic Crane, 24x7, Payment in Cash</td>
          <td>New Delhi</td>
          <td>New Delhi</td>
          <td> Published</td>
          <td><i class="fa fa-pencil-square-o"></i></td>
          <td><i class="fa fa-trash"></i></td>

        </tr>
        <tr>
          <td><input type="checkbox" value=""></td>
          <td>Jagdambe Crane Services</td>
          <td>Crane, Towing Crane, Hydralic Crane, 24x7, Payment in Cash</td>
          <td>New Delhi</td>
          <td>New Delhi</td>
          <td>Not Published</td>
          <td><i class="fa fa-pencil-square-o"></i></td>
          <td><i class="fa fa-trash"></i></td>

        </tr>
        <tr>
          <td><input type="checkbox" value=""></td>
          <td>Jagdambe Crane Services</td>
          <td>Crane, Towing Crane, Hydralic Crane, 24x7, Payment in Cash</td>
          <td>New Delhi</td>
          <td>New Delhi</td>
          <td>Not Published</td>
          <td><i class="fa fa-pencil-square-o"></i></td>
          <td><i class="fa fa-trash"></i></td>

        </tr>
        <tr>
          <td><input type="checkbox" value=""></td>
          <td>Jagdambe Crane Services</td>
          <td>Crane, Towing Crane, Hydralic Crane, 24x7, Payment in Cash</td>
          <td>New Delhi</td>
          <td>New Delhi</td>
          <td>Not Published</td>
          <td><i class="fa fa-pencil-square-o"></i></td>
          <td><i class="fa fa-trash"></i></td>

        </tr>
        <tr>
          <td><input type="checkbox" value=""></td>
          <td>Jagdambe Crane Services</td>
          <td>Crane, Towing Crane, Hydralic Crane, 24x7, Payment in Cash</td>
          <td>New Delhi</td>
          <td>New Delhi</td>
          <td>Not Published</td>
          <td><i class="fa fa-pencil-square-o"></i></td>
          <td><i class="fa fa-trash"></i></td>

        </tr>
        <tr>
          <td><input type="checkbox" value=""></td>
          <td>Jagdambe Crane Services</td>
          <td>Crane, Towing Crane, Hydralic Crane, 24x7, Payment in Cash</td>
          <td>New Delhi</td>
          <td>New Delhi</td>
          <td>Not Published</td>
          <td><i class="fa fa-pencil-square-o"></i></td>
          <td><i class="fa fa-trash"></i></td>

        </tr>
      </tbody>
    </table>
            </div>

          </div>
          <div class="col-md-3 hidden-xs">
              <div class="list-group-hover sidebar-widget-1">
  	            <ul class="list-unstyled">
              <li><a href="dashboard.html" class="list-group-item  bg-active"><i class="fa fa-tachometer"></i> Dashboard <span class="badge">12</span> </a></li>
              <li><a href="my-profile.html" class="list-group-item"><i class="fa fa-user"></i> My Profile</a> </li>
              <li><a href="my-listings.html" class="list-group-item"><i class="fa fa-list"></i>  My Listings</a> </li>
              <li><a href="my-enquiry.html" class="list-group-item"><i class="fa fa-envelope"></i> My Enquiry</a> </li>
              <li><a href="add-business.html" class="list-group-item"><i class="fa fa-plus-square"></i> Add Business</a> </li>
              <li><a href="login.html" class="list-group-item"><i class="fa fa-key"></i> Login</a> </li>
              <li><a href="signup.html" class="list-group-item"><i class="fa fa-user-plus"></i> Signup</a> </li>
              <li><a href="account-settings.html" class="list-group-item"><i class="fa fa-wrench"></i> Account Settings</a> </li>
              <li><a href="change-password.html" class="list-group-item"><i class="fa fa-lock"></i> Change Password</a> </li>
              <li><a href="listings-page.html" class="list-group-item"><i class="fa fa-angle-double-right"></i> Listings Page</a> </li>
              <li><a href="product-page.html" class="list-group-item"><i class="fa fa-angle-double-right"></i> Product Page</a> </li>
              <li><a href="logout.html" class="list-group-item"><i class="fa fa-power-off"></i> Log Out</a> </li>
              </ul>
           </div>
          </div>
      </div>
  </div>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
  <script>
  .dashboard-tables > tbody > tr > td {
    vertical-align: middle;
}
  </script>
@endpush
