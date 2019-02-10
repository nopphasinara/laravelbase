@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>
  .carousel-inner {min-width:420px;}
.carousel-inner img {width: 100%;}
.carousel-caption {color:#ccc;top:110px; bottom: auto; text-align:left;}
.carousel-caption h1 {font-size:55px;color:#fff;}
.cta {color:#fff;}
.footer {color:#ccc;}
.footer ul li {line-height:28px;font-size:16px;}
.copyright {color:#ccc;}
.fa {color:#dd0000;padding-right:5px;}
a {color:#696969;}
a:hover {color:#dd0000;}
img{width:100%;}


/*************************************
  8. FORM CSS
**************************************/
input[type="text"], input[type="password"],  input[type="email"] {
    width: 100%;
    padding: 6px 10px;
    border: 1px solid #febf00 ;
    outline: none;
    font-size: 1em;
    margin-bottom: 1.2%;
    color: #000;
    font-family: 'Roboto', sans-serif;
}
input[type="submit"] {
    padding: 2.9% 0%;
    border:  1px solid #febf00;
    width: 54%;
    outline: none;
    font-size: 1em;
    letter-spacing: 1px;
    font-weight: 600;
    color: #fff;
    background: #aa6f71;
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
    padding: 6px 10px;
    font-size: 16px;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #febf00;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
  </style>
@endpush

@section('content')
  <div class="bg-nav">
   <div class="container">
      <nav class="navbar navbar-expand-sm bg-light fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="#">
      <img src="bird.jpg" alt="Logo" style="width:40px;">
    </a>
     <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Why we</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Portfolio
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Price Plans</a>
          <a class="dropdown-item" href="#">Blog</a>
        </div>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
   </div>
  </div>
  <div class="banner slider mt-5 ">
      <div id="demo" class="carousel slide " data-ride="carousel"  data-interval="false">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://jituchauhan.com/nearme/images/hero-image.jpg" alt="Los Angeles">
        <div class="carousel-caption ">
          <h1>Find Great Hostels Anywhere</h1>
         <p class="hidden-xs "> 35,000 properties, 170 countries • Over 1 million verified guest reviews • 24/7 customer service</p>
         <div class="top-filter-area bg-light pt-2 pb-2 pr-4 ">
      <div class="container ">
          <div class="row">

              <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="Type City Name">
              </div>
              <div class="col-sm-3">
                <select class="select-box">
                  <option value="0" selected="selected">
                    State
                  </option>
                  <option value="1">
                    New Delhi
                  </option>
                  <option value="2">
                    Haryana
                  </option>
                  <option value="3">
                    Jaipur
                  </option>
                  <option value="4">
                    Rajasthan
                  </option>
                  <option value="5">
                    Himachal Pradesh
                  </option>
                  <option value="6">
                    Jharkhand
                  </option>
                </select>
              </div>
              <div class="col-sm-2">
                <select class="select-box">
                  <option value="0" selected="selected">
                    Pin-code
                  </option>
                  <option value="1">
                    110001
                  </option>
                  <option value="2">
                    110002
                  </option>
                  <option value="3">
                    110003
                  </option>
                  <option value="4">
                    110004
                  </option>
                  <option value="5">
                    110005
                  </option>
                  <option value="6">
                    110006
                  </option>
                </select>
              </div>
              <div class="col-sm-2">
                <select class="select-box">
                  <option value="0" selected="selected">
                    Type of Crane
                  </option>
                  <option value="1">
                    Towing Crane
                  </option>
                  <option value="2">
                    Hydraulic Crane
                  </option>
                  <option value="3">
                    Construction Crane
                  </option>
                  <option value="4">
                    Mechanical Crane
                  </option>

                </select>
              </div>
              <div class="col-sm-2 ">
                <button type="button" class="btn btn-warning "><i class="fa fa-search"></i> Search Hostel</button>
              </div>

          </div>
      </div>
  </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="http://t.commonsupport.com/seoboost/images/main-slider/image-1.jpg" alt="Chicago">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="http://t.commonsupport.com/seoboost/images/main-slider/image-3.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>
  </div>
  <div class="popular pt-5 pb-5  ">
      <div class="container">
          <div class="row text-center">
              <div class="col-md-12">
                  <h3>Most Popular Hostel</h3>
                  <p>Discover incredible hostels in the heart of the city.</p>
              </div>

          </div>
          <div class="row mt-4">
              <div class="col-md-4 col-md-offset border">
                      <div class="row img-box mb-2">
                          <img src="https://jituchauhan.com/nearme/images/hostel-1.jpg">
                      </div>
                      <h4>Hostel Name Title Here</h4>
                      <p>3989 Elk City Road Indianapolis, IN 46204</p>
                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item"> From <strong>$40.82 </strong></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </li>
                          <li class="list-inline-item"><small>2 Reviews </small> </li>
                      </ul>

              </div>
              <div class="col-md-4 border">
                      <div class="row img-box mb-2">
                          <img src="https://jituchauhan.com/nearme/images/hostel-1.jpg">
                      </div>
                      <h4>Hostel Name Title Here</h4>
                      <p>3989 Elk City Road Indianapolis, IN 46204</p>
                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item"> From <strong>$40.82 </strong></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </li>
                          <li class="list-inline-item"><small>2 Reviews </small> </li>
                      </ul>

              </div>
              <div class="col-md-4 border">
                      <div class="row img-box mb-2">
                          <img src="https://jituchauhan.com/nearme/images/hostel-1.jpg">
                      </div>
                      <h4>Hostel Name Title Here</h4>
                      <p>3989 Elk City Road Indianapolis, IN 46204</p>
                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item"> From <strong>$40.82 </strong></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </li>
                          <li class="list-inline-item"><small>2 Reviews </small> </li>
                      </ul>

              </div>
          </div>
      </div>
  </div>
  <div class="popular pt-5 pb-5  ">
      <div class="container">
          <div class="row text-center">
              <div class="col-md-12">
                  <h3>Your Destination, Your Way</h3>
                  <p>Discover incredible hostels in the heart of the city.</p>
              </div>

          </div>
          <div class="row mt-4">
              <div class="col-md-4 col-md-offset border">
                      <div class="row img-box mb-2">
                          <img src="https://jituchauhan.com/nearme/images/hostel-1.jpg">
                      </div>
                      <h4>Hostel Name Title Here</h4>
                      <p>3989 Elk City Road Indianapolis, IN 46204</p>
                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item"> From <strong>$40.82 </strong></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </li>
                          <li class="list-inline-item"><small>2 Reviews </small> </li>
                      </ul>

              </div>
              <div class="col-md-4 border">
                      <div class="row img-box mb-2">
                          <img src="https://jituchauhan.com/nearme/images/hostel-1.jpg">
                      </div>
                      <h4>Hostel Name Title Here</h4>
                      <p>3989 Elk City Road Indianapolis, IN 46204</p>
                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item"> From <strong>$40.82 </strong></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </li>
                          <li class="list-inline-item"><small>2 Reviews </small> </li>
                      </ul>

              </div>
              <div class="col-md-4 border">
                      <div class="row img-box mb-2">
                          <img src="https://jituchauhan.com/nearme/images/hostel-1.jpg">
                      </div>
                      <h4>Hostel Name Title Here</h4>
                      <p>3989 Elk City Road Indianapolis, IN 46204</p>
                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item"> From <strong>$40.82 </strong></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </li>
                          <li class="list-inline-item"><small>2 Reviews </small> </li>
                      </ul>

              </div>
          </div>
      </div>
  </div>
  <div class="meet pt-5 pb-5 bg-info">
      <div class="container text-center">
          <div class="row mb-5">
              <div class="col-md-12">
                  <h3>Help You Meet The World</h3>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  <i class="fa fa-search fa-3x pb-4"></i>
                  <h4>Hostels you’ll love</h4>
                  <p>Vestibulum mi mi, dapibus nec odio quis, interdum pretium sem. </p>
              </div>
              <div class="col-md-4">
                  <i class="fa fa-heart-o fa-3x pb-4"></i>
                  <h4>Hostels you’ll love</h4>
                  <p>Vestibulum mi mi, dapibus nec odio quis, interdum pretium sem. </p>
              </div>
              <div class="col-md-4">
                  <i class="fa fa-user fa-3x pb-4"></i>
                  <h4>Hostels you’ll love</h4>
                  <p>Vestibulum mi mi, dapibus nec odio quis, interdum pretium sem. </p>
              </div>
          </div>
      </div>

  </div>
  <div class="reviews pt-5 pb-5">
      <div class="container">
          <div class="row text-center">
              <div class="col-md-12">
                  <h3>Happy Clients Reviews</h3>
              </div>
          </div>
          <div class="row mt-5 ">
              <div class="col-md-6">
                  <h4>It was absolutely lovely.</h4>
                  <p>“Nam elementum non tellus sit amet ultricies. In nec elit velit. Nullam luctus efficitur urna, a accumsan nunc varius nec.”</p>
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                  <p>James E. Duncan</p>
              </div>
               <div class="col-md-6">
                  <h4>It was absolutely lovely.</h4>
                  <p>“Nam elementum non tellus sit amet ultricies. In nec elit velit. Nullam luctus efficitur urna, a accumsan nunc varius nec.”</p>
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                  <p>James E. Duncan</p>
              </div>
          </div>
      </div>
  </div>
  <div class="blog pt-5 pb-5  ">
      <div class="container">
          <div class="row text-center">
              <div class="col-md-12">
                  <h3>Latest Blog Posts</h3>
                  <p>Discover incredible hostels in the heart of the city.</p>
              </div>

          </div>
          <div class="row mt-4">
              <div class="col-md-4 border">
                      <div class="row img-box mb-2">
                          <img src="https://jituchauhan.com/nearme/images/hostel-1.jpg">
                      </div>
                      <h4>Hostel Name Title Here</h4>
                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item"> 1 January 2018</li>
                          <li class="list-inline-item"><small>2 Reviews </small> </li>
                      </ul>

              </div>
              <div class="col-md-4 border">
                      <div class="row img-box mb-2">
                          <img src="https://jituchauhan.com/nearme/images/hostel-1.jpg">
                      </div>
                      <h4>Hostel Name Title Here</h4>
                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item"> 1 January 2018</li>
                          <li class="list-inline-item"><small>2 Reviews </small> </li>
                      </ul>

              </div>
              <div class="col-md-4 border">
                      <div class="row img-box mb-2">
                          <img src="https://jituchauhan.com/nearme/images/hostel-1.jpg">
                      </div>
                      <h4>Hostel Name Title Here</h4>
                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item"> 1 January 2018</li>
                          <li class="list-inline-item"><small>2 Reviews </small> </li>
                      </ul>

              </div>

          </div>
      </div>
  </div>
  <div class="cta pt-5 pb-5 bg-danger">
      <div class="container">
          <div class="row">
              <div class="col-md-5">
                  <h3>Newsletter Sign Up</h3>
                  <p>Sign up for our newsletter to get the best hostel </p>
              </div>
              <div class="col-md-7 pt-3">
                  <input class="form-control input-lg" placeholder="Enter Email Address" required="" type="text">
              </div>
          </div>
      </div>
  </div>
  <div class="footer pt-5 pb-5 bg-dark">
      <div class="container">
          <div class="row">
              <div class="col-md-3 footer-one">
                  <h4> About Hostel</h4>
                  <p>In et congue nibh. Maecenas leo enim, lobortis non quam et, interdum malesuada risus. Nunc a pharetra ligula, nec tincidunt est. Vestibulum sed facilisis nibh. </p>
                  <p>In et congue nibh. Maecenas leo enim, lobortis non quam et, interdum malesuada risus. Nunc a pharetra ligula, nec tincidunt est. Vestibulum sed facilisis nibh. </p>

              </div>
              <div class="col-md-3 footer-two">
                  <h4> Information</h4>
                  <ul class="list-unstyled">
                      <li><a href="#"> About</a></li>
                      <li><a href="#"> How it works</a></li>
                      <li><a href="#"> Behind the hostel</a></li>
                      <li><a href="#"> Careers</a></li>
                      <li><a href="#"> Terms and Conditions</a></li>
                      <li><a href="#"> Become a partner</a></li>
                      <li><a href="#"> Privacy & Cookies Policy</a></li>



                  </ul>

              </div>
              <div class="col-md-3 footer-two">
                  <h4> Quick Links</h4>
                  <ul class="list-unstyled">
                      <li><a href="#"> Worldwide</a></li>
                      <li><a href="#"> Blog</a></li>
                      <li><a href="#"> City Guide</a></li>
                      <li><a href="#"> Hostel Singup</a></li>
                      <li><a href="#"> Login</a></li>
                      <li><a href="#"> Register</a></li>



                  </ul>

              </div>
              <div class="col-md-3 footer-two">
                  <h4> Customer Support</h4>
                  <ul class="list-unstyled">
                      <li><a href="#"> FAQ</a></li>
                      <li><a href="#"> Help Center</a></li>
                      <li><a href="#"> Contact us</a></li>
                      <li><a href="#"> Chat</a></li>




                  </ul>

              </div>
          </div>
      </div>
  </div>
  <div class="copyright bg-secondary pt-2">
      <div class="container">
          <div class="row text-center">
              <div class="col-md-12">
                  <h6>All Rights Reserved. Copyright 2018. Hostel</h6>
              </div>
          </div>
      </div>
  </div>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
@endpush
