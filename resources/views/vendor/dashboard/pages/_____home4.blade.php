@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>
  .carousel-inner img {width: 100%;}
.carousel-caption {color:#ccc;top:280px; bottom: auto; text-align:left;}
.carousel-caption h1 {color:#fff;}
.right {background:#000;color:#ccc;}
.right p {line-height:26px;}
.middle {background-image: url("http://vibez1.elated-themes.com/wp-content/uploads/2017/03/latino-backround-2.jpg");}
.stats {background:#f2f2f2;}
.footer {color:#ccc;}
.footer ul li {line-height:35px;}
.fa {color:#dd0000;padding-right:5px;}
a {color:#ccc;}
a:hover {color:#dd0000;}
img{width:100%;}


  </style>
@endpush

@section('content')
  <div class="bg-nav bg-dark">
   <div class="container">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
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
  <div class="banner slider">
      <div id="demo" class="carousel slide" data-ride="carousel"  data-interval="false">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://vibez1.elated-themes.com/wp-content/uploads/revslider/home-6/h6-slider1-backgroound-img.jpg" alt="Los Angeles">
        <div class="carousel-caption">
          <div class="col-md-7">
              <h1 class="pb-2"><strong>The WordPress Theme for Growth Hackers </strong> </h1>
              <h4>The right look and feel to promote any product, service or online course.</h4>
              <button type="button" class="btn btn-dark mt-4">Learn More</button>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://demo.proteusthemes.com/growthpress/wp-content/uploads/sites/65/2017/09/background22-1920x748.png" alt="Chicago">
        <div class="carousel-caption">
          <div class="col-md-7">
              <h1 class="pb-2"><strong>The WordPress Theme for Growth Hackers </strong> </h1>
              <h4>The right look and feel to promote any product, service or online course.</h4>
              <button type="button" class="btn btn-success mt-4">Buy Growthpress</button>
              <button type="button" class="btn btn-secondary mt-4">Get More Details</button>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://demo.proteusthemes.com/growthpress/wp-content/uploads/sites/65/2017/08/1min.png" alt="New York">
        <div class="carousel-caption">
          <div class="col-md-7">
              <h1 class="pb-2"><strong>The WordPress Theme for Growth Hackers </strong> </h1>
              <h4>The right look and feel to promote any product, service or online course.</h4>
              <button type="button" class="btn btn-success mt-4">Buy Growthpress</button>
              <button type="button" class="btn btn-secondary mt-4">Get More Details</button>
          </div>
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
  <div class="right pt-5 pb-5 ">
      <div class="container pt-5 pb-3">
          <div class="row">
              <div class="col-md-6">
                  <h1> CHOOSE THE <strong> RIGHT TYPE OF  CLASS</strong> FOR YOU NOW </h1>

              </div>
              <div class="col-md-6">
                  <p>Lorem ipsum proin gravida velit auctor aliquet. Aenean
  sollicitu din, lorem auci elit consequat ipsutissem niuis
  sed odio sit amet a sit amet. lorem auci elit consequat ipsutissem niuis
  sed odio sit amet a sit amet.</p>
              </div>
          </div>
      </div>
  </div>
  <div class="image-box">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-3">
                  <img src="http://vibez1.elated-themes.com/wp-content/uploads/2017/03/latino-classes-event-1.jpg">
              </div>
              <div class="col-md-3">
                  <img src="http://vibez1.elated-themes.com/wp-content/uploads/2017/03/latino-classes-event-1.jpg">
              </div>
              <div class="col-md-3">
                  <img src="http://vibez1.elated-themes.com/wp-content/uploads/2017/03/latino-classes-event-1.jpg">
              </div>
              <div class="col-md-3">
                  <img src="http://vibez1.elated-themes.com/wp-content/uploads/2017/03/latino-classes-event-1.jpg">
              </div>
          </div>
      </div>
  </div>
  <div class="left pt-5 pb-5 ">
      <div class="container pt-5 pb-3">
          <div class="row">
              <div class="col-md-6">
                  <p>Lorem ipsum proin gravida velit auctor aliquet. Aenean
  sollicitu din, lorem auci elit consequat ipsutissem niuis
  sed odio sit amet a sit amet. lorem auci elit consequat ipsutissem niuis
  sed odio sit amet a sit amet.</p>
              </div>
              <div class="col-md-6">
                  <h1> CHOOSE THE <strong> RIGHT TYPE OF  CLASS</strong> FOR YOU NOW </h1>

              </div>
          </div>
      </div>
  </div>
  <div class="middle pt-5 pb-5 ">
      <div class="container pt-5 pb-3">
          <div class="row">
              <div class="col-md-6">
                  <h1> CHOOSE THE <strong> RIGHT TYPE OF  CLASS</strong> FOR YOU NOW </h1>

              </div>
              <div class="col-md-6">
                  <p>Lorem ipsum proin gravida velit auctor aliquet. Aenean
  sollicitu din, lorem auci elit consequat ipsutissem niuis
  sed odio sit amet a sit amet. lorem auci elit consequat ipsutissem niuis
  sed odio sit amet a sit amet.</p>
              </div>
          </div>
      </div>
  </div>
  <div class="stats pt-5 pb-5 ">
      <div class="container pt-5 pb-3">
          <div class="row text-center">
              <div class="col-md-3">
                  <h1>9859</h1>
                  <p>TEAM ENERGY</p>

              </div>
              <div class="col-md-3">
                  <h1>6021</h1>
                  <p> LINES OF CODE </p>

              </div>
              <div class="col-md-3">
                  <h1>1250</h1>
                  <p> COOL PROJECTS  </p>

              </div>
              <div class="col-md-3">
                  <h1>2125</h1>
                  <p>  CUPS OF COFFEE   </p>

              </div>

          </div>
      </div>
  </div>
  <div class="address pt-5 pb-5 ">
      <div class="container pt-5 pb-3">
          <div class="row">
              <div class="col-md-5">
                  <h1> OUR <strong> DANCE STUDIO</strong> </h1>
                  <P class="mt-4">Etiam convallis, felis quis dapibus dictum, libero mauris luctus, fringillapurus ligula non justo. Non fringilla purus ligula justo.</P>
                  <P class="mt-4"><strong> ADDRESS, INDIA</strong></P>
                  <ul class="list-unstyled">
                      <li>198 West 21th Street </li>
                      <li> Barcelona 20020</li>
                      <li> Email: email@domain.com</li>
                      <li> Phone: +88 (0) 101 0000</li>
                  </ul>
              </div>
              <div class="col-md-6">
                  <p>Lorem ipsum proin gravida velit auctor aliquet. Aenean
  sollicitu din, lorem auci elit consequat ipsutissem niuis
  sed odio sit amet a sit amet. lorem auci elit consequat ipsutissem niuis
  sed odio sit amet a sit amet.</p>
              </div>
          </div>
      </div>
  </div>
  <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=new delhi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.crocothemes.net"></a><style>.mapouter{overflow:hidden;height:500px;width:100%;}.gmap_canvas {background:none!important;height:500px;width:100%;}</style></div>
  <div class="footer pt-5 pb-5 bg-dark ">
      <div class="container pt-5 pb-3">
          <div class="row">
              <div class="col-md-4 footer-one">
                  <h6> ABOUT US</h6>
                  <P class="mt-4">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. </P>
                   <ul class="list-unstyled">

                      <li><i class="fa fa-envelope"></i>Email: email@domain.com</li>
                      <li><i class="fa fa-phone"></i> Phone: +88 (0) 101 0000</li>
                      <li><i class="fa fa-map-marker"></i> 184 Main Collins Street</li>
                  </ul>
              </div>
              <div class="col-md-3 footer-one">
                  <h6> QUICK LINKS</h6>
                   <ul class="list-unstyled">
                      <li><a href="#">Home</a></li>
                       <li><a href="#">About Us</a></li>
                        <li><a href="#">Courses</a></li>
                         <li><a href="#">Department</a></li>
                          <li><a href="#">Acting</a></li>

                  </ul>
              </div>
              <div class="col-md-3 footer-one">
                  <h6> QUICK LINKS</h6>
                   <ul class="list-unstyled">
                      <li><a href="#">Home</a></li>
                       <li><a href="#">About Us</a></li>
                        <li><a href="#">Courses</a></li>
                         <li><a href="#">Department</a></li>
                          <li><a href="#">Acting</a></li>

                  </ul>
              </div>
              <div class="col-md-2 footer-one">
                  <h6> QUICK LINKS</h6>
                   <ul class="list-unstyled">
                      <li><a href="#">Home</a></li>
                       <li><a href="#">About Us</a></li>
                        <li><a href="#">Courses</a></li>
                         <li><a href="#">Department</a></li>
                          <li><a href="#">Acting</a></li>

                  </ul>
              </div>
          </div>
      </div>
  </div>
  <div class="copyright pt-2 pb-2 bg-secondary ">
      <div class="container pt-2 pb-1">
          <div class="row text-center">
              <div class="col-md-12">
                  <h6>COPYRIGHTS 2017 © DANCE STUDIO</h6>
              </div>
          </div>
      </div>
  </div>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
@endpush
