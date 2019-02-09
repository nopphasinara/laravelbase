@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>
  .top-nav a {color:#898989;}
.top-nav ul{margin-bottom: 5px;}
.bg1 {background:#d3d3d3;}
img{width:100%;}
.footer  {color:#d3d3d3;}
.footer a {color:#d3d3d3;}
.copyright {color:#ccc;}
.fa:hover {color:#249e61;}
a {color:#898989;}
a:hover {color:#249e61;}
.star-icons {color:#dd0000;}
.list-group-item-action:hover {background:#249e61;color:#fff!important;}
.carousel-inner img {width: 100%; max-height:440px;}
.carousel-caption {color:#ccc;top:130px; bottom: auto; text-align:left;}
.carousel-caption h1 {font-size:22px;color:#fff;}
  </style>
@endpush

@section('content')
  <div class="top-nav bg1">
      <div class="container">
          <div class="row ">
              <div class="col-md-6 ">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="#">Discount Guide </a> </li>
                      <li class="list-inline-item"><a href="#">Customer Assistance </a> </li>
                  </ul>
              </div>
              <div class="col-md-6 text-right ">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="#">Sign In </a> </li>
                      <li class="list-inline-item"><a href="#">Sign Up</a> </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <div class="top-cart py-3">
      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <img src="http://klbtheme.com/froday/wp-content/uploads/2018/03/logo-froday.png">
              </div>
              <div class="col-md-6 pt-2">
                  <form class="form-inline" action="/action_page.php">
                      <input class="form-control  mr-sm-2" type="text" placeholder="Search">
                      <button class="btn btn-success" type="submit">Search</button>
                    </form>
              </div>
              <div class="col-md-3 pt-3 text-right">
                  <a href="#">
                      <i class="fa fa-shopping-cart fa-2x"></i>
                      Cart
                  </a>


              </div>
          </div>
      </div>
  </div>
  <div class="bg-nav bg-secondary">
   <div class="container">
      <nav class="navbar navbar-expand-sm bg-secondary navbar-dark ">
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
  <div class="header-content my-5">
      <div class="container ">
          <div class="row">
              <div class="col-md-3 sidebar">
                   <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-female"></i> Beauty</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-calendar"></i> Events</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-umbrella"></i> Fashion</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-child"></i> Fitness</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-cutlery"></i> Food & Drink</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-tasks"></i> Furniture</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-tree"></i> Home & Garden</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-shopping-cart"></i> Shopping</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-bus"></i> Travel</a>
                  </div>
              </div>
              <div class="col-md-9">
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
        <img src="http://klbtheme.com/froday/wp-content/uploads/2017/07/deal_02.jpg" alt="Chicago">
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
        <img src="http://klbtheme.com/froday/wp-content/uploads/2018/02/deal_03.jpg" alt="New York">
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
              </div>
          </div>
      </div>
  </div>
  <div class="offer my-5">
      <div class="container">
          <div class="row">
              <div class="col-md-4 py-3 border">
                  <div class="row">
                      <div class="col-md-3 mt-2">
                          <img src="http://klbtheme.com/froday/wp-content/uploads/2018/02/tablet.png">
                      </div>
                      <div class="col-md-9">
                          <h5>Deals & Coupons</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 py-3 border">
                  <div class="row">
                      <div class="col-md-3 mt-2">
                          <img src="http://klbtheme.com/froday/wp-content/uploads/2018/02/online-shop-6.png">
                      </div>
                      <div class="col-md-9">
                          <h5>Find Best Offers</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 py-3 border">
                  <div class="row">
                      <div class="col-md-3 mt-2">
                          <img src="http://klbtheme.com/froday/wp-content/uploads/2018/02/money.png">
                      </div>
                      <div class="col-md-9">
                          <h5>Save Money</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="products my-5">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                   <div class="card">
                      <img class="card-img-top" src="http://klbtheme.com/froday/wp-content/uploads/2017/07/deal_01.jpg" alt="Card image" style="width:100%">
                      <div class="card-body">
                          <div class="star-icons">
                              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                          </div>
                        <h5 class="card-title">The Crash Bad Instant Folding Twin Bed</h5>
                        <div class="location">
                            <ul class="list-inline">
                                <a href="#"><li class="list-inline-item pr-2"><i class="fa fa-map-marker"></i> United States</li></a>
                                <a href="#"><li class="list-inline-item"><i class="fa fa-beer"></i> Amazon</li></a>
                            </ul>
                        </div>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-success">Order Now</a>
                        <a href="#"> £150.00</a>
                      </div>
                    </div>
              </div>
              <div class="col-md-4">
                   <div class="card">
                      <img class="card-img-top" src="http://klbtheme.com/froday/wp-content/uploads/2017/07/deal_01.jpg" alt="Card image" style="width:100%">
                      <div class="card-body">
                          <div class="star-icons">
                              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                          </div>
                        <h5 class="card-title">The Crash Bad Instant Folding Twin Bed</h5>
                        <div class="location">
                            <ul class="list-inline">
                                <a href="#"><li class="list-inline-item pr-2"><i class="fa fa-map-marker"></i> United States</li></a>
                                <a href="#"><li class="list-inline-item"><i class="fa fa-beer"></i> Amazon</li></a>
                            </ul>
                        </div>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-success">Order Now</a>
                        <a href="#"> £150.00</a>
                      </div>
                    </div>
              </div>
              <div class="col-md-4">
                   <div class="card">
                      <img class="card-img-top" src="http://klbtheme.com/froday/wp-content/uploads/2017/07/deal_01.jpg" alt="Card image" style="width:100%">
                      <div class="card-body">
                          <div class="star-icons">
                              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                          </div>
                        <h5 class="card-title">The Crash Bad Instant Folding Twin Bed</h5>
                        <div class="location">
                            <ul class="list-inline">
                                <a href="#"><li class="list-inline-item pr-2"><i class="fa fa-map-marker"></i> United States</li></a>
                                <a href="#"><li class="list-inline-item"><i class="fa fa-beer"></i> Amazon</li></a>
                            </ul>
                        </div>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-success">Order Now</a>
                        <a href="#"> £150.00</a>
                      </div>
                    </div>
              </div>
          </div>
          <div class="row mt-4">
              <div class="col-md-4">
                   <div class="card">
                      <img class="card-img-top" src="http://klbtheme.com/froday/wp-content/uploads/2017/07/deal_01.jpg" alt="Card image" style="width:100%">
                      <div class="card-body">
                          <div class="star-icons">
                              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                          </div>
                        <h5 class="card-title">The Crash Bad Instant Folding Twin Bed</h5>
                        <div class="location">
                            <ul class="list-inline">
                                <a href="#"><li class="list-inline-item pr-2"><i class="fa fa-map-marker"></i> United States</li></a>
                                <a href="#"><li class="list-inline-item"><i class="fa fa-beer"></i> Amazon</li></a>
                            </ul>
                        </div>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-success">Order Now</a>
                        <a href="#"> £150.00</a>
                      </div>
                    </div>
              </div>
              <div class="col-md-4">
                   <div class="card">
                      <img class="card-img-top" src="http://klbtheme.com/froday/wp-content/uploads/2017/07/deal_01.jpg" alt="Card image" style="width:100%">
                      <div class="card-body">
                          <div class="star-icons">
                              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                          </div>
                        <h5 class="card-title">The Crash Bad Instant Folding Twin Bed</h5>
                        <div class="location">
                            <ul class="list-inline">
                                <a href="#"><li class="list-inline-item pr-2"><i class="fa fa-map-marker"></i> United States</li></a>
                                <a href="#"><li class="list-inline-item"><i class="fa fa-beer"></i> Amazon</li></a>
                            </ul>
                        </div>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-success">Order Now</a>
                        <a href="#"> £150.00</a>
                      </div>
                    </div>
              </div>
              <div class="col-md-4">
                   <div class="card">
                      <img class="card-img-top" src="http://klbtheme.com/froday/wp-content/uploads/2017/07/deal_01.jpg" alt="Card image" style="width:100%">
                      <div class="card-body">
                          <div class="star-icons">
                              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                          </div>
                        <h5 class="card-title">The Crash Bad Instant Folding Twin Bed</h5>
                        <div class="location">
                            <ul class="list-inline">
                                <a href="#"><li class="list-inline-item pr-2"><i class="fa fa-map-marker"></i> United States</li></a>
                                <a href="#"><li class="list-inline-item"><i class="fa fa-beer"></i> Amazon</li></a>
                            </ul>
                        </div>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-success">Order Now</a>
                        <a href="#"> £150.00</a>
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </div>
  <div class="newsletter mt-5 py-5 bg1">
      <div class="container">
          <div class="row text-center">
              <div class="col-md-12">
                  <h5>Sign up for our weekly email newsletter</h5>
                  <p>orem ipsum dolor sit amet, consectetur adipisicing elit. Quasi animi magni accusantium architecto possimus.</p>
                  <form class="form-inline justify-content-center" action="/action_page.php">
                      <input class="form-control  mr-sm-2" type="text" placeholder="Search">
                      <button class="btn btn-success" type="submit">Search</button>
                    </form>
                    <small>We’ll never share your email address with a third-party.</small>
              </div>
          </div>
      </div>
  </div>
  <div class="footer bg-dark py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dolores quidem mollitia id ipsa nisi necessitatibus iure repudiandae aperiam, odit ipsam dolor fugiat corporis nesciunt illo nemo minus.</p>
              </div>
              <div class="col-md-3">
                  <h5>Quick Links</h5>
                  <ul class="list-unstyled">
                      <a href="#"><li> Latest Deals</li></a>
                      <a href="#"><li> Newest Coupons</li></a>
                      <a href="#"><li> Contact Us </li></a>
                      <a href="#"><li> Terms & Conditions </li></a>
                      <a href="#"><li> FAQ </li></a>
                  </ul>
              </div>
              <div class="col-md-3">
                  <h5>Quick Links</h5>
                  <ul class="list-unstyled">
                      <a href="#"><li> Latest Deals</li></a>
                      <a href="#"><li> Newest Coupons</li></a>
                      <a href="#"><li> Contact Us </li></a>
                      <a href="#"><li> Terms & Conditions </li></a>
                      <a href="#"><li> FAQ </li></a>
                  </ul>
              </div>

          </div>
      </div>
  </div>
  <div class="copyright bg-dark border pt-2">
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
