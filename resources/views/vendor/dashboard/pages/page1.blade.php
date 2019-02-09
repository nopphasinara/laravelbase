@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>
  .banner { background: lightblue url("http://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/02/bg-blue.jpg;") no-repeat fixed center; }
  img {width:100%;}
  .no-margin{margin:0px;padding:0px;}
  .footer a {color:#696969;}
  </style>
@endpush

@section('content')
<nav class="navbar navbar-expand-sm bg-light navbar-light border fixed-top">
  <div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="#">
      <img src="http://sarto.edge-themes.com/wp-content/uploads/2018/04/landing-img-18.png" alt="Logo" style="width:70px;">
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
        <a class="nav-link" href="#">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">License</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Support</a>
      </li>

  <button type="button" class="btn btn-light">Contact Us</button>
  <button type="button" class="btn btn-success"data-toggle="modal" data-target="#toploginModal"><i class="fa fa-plus"></i> Submit your site</button>
    </ul>
  </div>
 </div>
</nav>
<div class="modal fade" id="toploginModal" tabindex="-1" role="dialog" aria-labelledby="toploginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="toploginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <input id="email" name="email" placeholder="Email" class="form-control" required="required" type="text">
                </div>
                <div class="form-group">
                            <input id="password" name="password" placeholder="password" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                    <button type="button" class="btn btn-link">Forgot Password?</button>
                </div>

            </form>



      </div>
      <div class="modal-footer">
          <small>New to Refers ?<a href="#">Register here</a></small>
      </div>

    </div>
  </div>
</div>
<section class="banner py-5 mt-5" id="banner">
    <div class="container py-5 my-5">
        <div class="row text-white text-center">
            <div class="col-md-12">
                <h1>All You Need Is Here & Classified</h1>
                <p>Browse from more than 15,000,000 adverts while new ones come on daily bassis</p>
            </div>
        </div>
        <div class="row">
                <div class="col-md-4 offset-md-3">
                    <div class="form-group ">
                          <select id="inputState" class="form-control" >
                            <option selected>... Category ...</option>
                            <option>Agriculture</option>
                            <option>Astrology</option>
                            <option>Animals & Pets </option>
                            <option>ARCHITECTURE </option>
                            <option>ART & PHOTOGRAPHY </option>
                            <option>AUCTION TEMPLATES </option>
                            <option>BEAUTY </option>
                            <option>BOOKS </option>
                            <option>BUSINESS </option>
                            <option>CAFE AND RESTAURANT </option>
                            <option>CARS </option>
                            <option>CHARITY </option>
                            <option>CHRISTMAS TEMPLATES </option>
                            <option>COMMUNICATIONS </option>
                            <option>COMPUTERS </option>
                            <option>DATING </option>
                            <option>EDUCATION </option>
                            <option>ELECTRONICS </option>
                            <option>ENTERTAINMENT </option>
                            <option>EXTERIOR DESIGN </option>
                            <option>FAMILY </option>
                            <option>FASHION </option>
                            <option>FOOD & DRINK </option>
                            <option>GAMES </option>
                            <option>GIFTS </option>
                            <option>HOBBIES & CRAFTS </option>
                            <option>HOSTING </option>
                            <option>HOTELS </option>
                            <option>INDUSTRIAL </option>
                            <option>INTERIOR & FURNITURE </option>
                            <option>INTERNET </option>
                            <option>JEWELRY </option>
                            <option>LAW </option>
                            <option>MAINTENANCE SERVICES </option>
                            <option>MEDIA </option>
                            <option>MEDICAL </option>
                            <option>MILITARY </option>
                            <option>MOST POPULAR </option>
                            <option>MUSIC </option>
                            <option>NIGHT CLUB </option>
                            <option>ONLINE CASINO </option>
                            <option>PERSONAL PAGES </option>
                            <option>POLITICS </option>
                            <option>REAL ESTATE </option>
                            <option>RELIGIOUS </option>
                            <option>SCIENCE </option>
                            <option>SECURITY </option>
                            <option>SOCIETY & CULTURE </option>
                            <option>SOFTWARE </option>
                            <option>SPORT </option>
                            <option>TRANSPORTATION </option>
                            <option>TRAVEL </option>
                            <option>WEB DESIGN </option>
                            <option>WEDDING </option>



                          </select>
                        </div>
                </div>

                <div class="col-md-2">
                    <button type="button" class="btn btn-success btn-block">Search Free Sites</button>

                </div>
            </div>
    </div>
</section>

<section class="main-content pt-4" id="main-content">
<div class="container">
    <div class="row pb-3">
       <div class="col-md-12 no-margin">
           <h4>We got the best results for you</h4>
           <small>Here is a list of 120 results to choose from</small>
       </div>

    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
            <div class="row border">
                <div class="col-md-4  no-margin">
                    <img src="https://moatsearch-data.s3.amazonaws.com/creative_screens/b2/22/58/b22258ec03b15a2e8dac83dbf822bc4d.jpg" >
                </div>
                <div class="col-md-8  card-body">
                    <h4 class="text-success">Nemo enim ipsam</h4>
                    <p>Browse from more than 15,000,000 adverts while new ones come on daily bassis</p>
                                                            <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Agriculture</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">|</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Free</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">|</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Donate</a>
                        </li>
                    </ul>


                   <button type="button" class="btn btn-primary btn-outline-success">View Demo</button>
                    <button type="button" class="btn btn-primary btn-outline-success">Download</button>



                </div>

            </div>
        </div>
            </div>
            <div class="row">
              <div class="col-md-12">
            <div class="row border">
                <div class="col-md-4  no-margin">
                    <img src="https://moatsearch-data.s3.amazonaws.com/creative_screens/b2/22/58/b22258ec03b15a2e8dac83dbf822bc4d.jpg" >
                </div>
                <div class="col-md-8  card-body">
                    <h4 class="text-success">Nemo enim ipsam</h4>
                    <p>Browse from more than 15,000,000 adverts while new ones come on daily bassis</p>
                                                            <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Agriculture</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">|</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Free</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">|</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Donate</a>
                        </li>
                    </ul>


                   <button type="button" class="btn btn-primary btn-outline-success">View Demo</button>
                    <button type="button" class="btn btn-primary btn-outline-success">Download</button>



                </div>

            </div>
        </div>
            </div>
            <div class="row">
              <div class="col-md-12">
            <div class="row border">
                <div class="col-md-4  no-margin">
                    <img src="https://moatsearch-data.s3.amazonaws.com/creative_screens/b2/22/58/b22258ec03b15a2e8dac83dbf822bc4d.jpg" >
                </div>
                <div class="col-md-8  card-body">
                    <h4 class="text-success">Nemo enim ipsam</h4>
                    <p>Browse from more than 15,000,000 adverts while new ones come on daily bassis</p>
                                                            <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Agriculture</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">|</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Free</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">|</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Donate</a>
                        </li>
                    </ul>


                   <button type="button" class="btn btn-primary btn-outline-success">View Demo</button>
                    <button type="button" class="btn btn-primary btn-outline-success">Download</button>



                </div>

            </div>
        </div>
            </div>
            <div class="row">
              <div class="col-md-12">
            <div class="row border">
                <div class="col-md-4  no-margin">
                    <img src="https://moatsearch-data.s3.amazonaws.com/creative_screens/b2/22/58/b22258ec03b15a2e8dac83dbf822bc4d.jpg" >
                </div>
                <div class="col-md-8  card-body">
                    <h4 class="text-success">Nemo enim ipsam</h4>
                    <p>Browse from more than 15,000,000 adverts while new ones come on daily bassis</p>
                                                            <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Agriculture</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">|</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Free</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">|</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Donate</a>
                        </li>
                    </ul>


                   <button type="button" class="btn btn-primary btn-outline-success">View Demo</button>
                    <button type="button" class="btn btn-primary btn-outline-success">Download</button>



                </div>

            </div>
        </div>
            </div>
            <div class="row">
              <div class="col-md-12">
            <div class="row border">
                <div class="col-md-4  no-margin">
                    <img src="https://moatsearch-data.s3.amazonaws.com/creative_screens/b2/22/58/b22258ec03b15a2e8dac83dbf822bc4d.jpg" >
                </div>
                <div class="col-md-8  card-body">
                    <h4 class="text-success">Nemo enim ipsam</h4>
                    <p>Browse from more than 15,000,000 adverts while new ones come on daily bassis</p>
                                                            <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Agriculture</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">|</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Free</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">|</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Donate</a>
                        </li>
                    </ul>


                   <button type="button" class="btn btn-primary btn-outline-success">View Demo</button>
                    <button type="button" class="btn btn-primary btn-outline-success">Download</button>



                </div>

            </div>
        </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-12">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="https://moatsearch-data.s3.amazonaws.com/creative_screens/66/65/7d/66657df86edf95f2da94bde3c7fbd1dc.jpg "alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class="footer  py-5 border mt-5 ">
	<div class="container">
	  <div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 footer-one">
		    <img src="http://sarto.edge-themes.com/wp-content/uploads/2018/04/landing-img-18.png" alt="Logo" style="width:80px;">

		    <p class="pt-4">Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		    	<div class="social-icons">
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-2x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
	        </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-two">
		    <h5>Information </h5>
		    <ul class="list-unstyled">
									<li><a href="maintenance.html">Maintenance Tips</a></li>
									<li><a href="contact.html">Locations</a></li>
									<li><a href="about.html">Testimonials</a></li>
									<li><a href="about.html">Careers</a></li>
									<li><a href="about.html">Partners</a></li>
								</ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-three">
		    <h5>Helpful Links </h5>
		    <ul class="list-unstyled">
									<li><a href="maintenance.html">Maintenance Tips</a></li>
									<li><a href="contact.html">Locations</a></li>
									<li><a href="about.html">Testimonials</a></li>
									<li><a href="about.html">Careers</a></li>
									<li><a href="about.html">Partners</a></li>
								</ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-four">
		    <h5>Helpful Links </h5>
		    <ul class="list-unstyled ">
									<li><a href="maintenance.html">Maintenance Tips</a></li>
									<li><a href="contact.html">Locations</a></li>
									<li><a href="about.html">Testimonials</a></li>
									<li><a href="about.html">Careers</a></li>
									<li><a href="about.html">Partners</a></li>
								</ul>
		</div>
	  </div>
	</div>
</div>
<div class="copyright bglight1 border pt-2">
    <div class="container">
        <div class="row justify-content-md-center">
            <p> © 2018 xyz Software Pvt. Ltd. </p>
        </div>
    </div>
</div>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
@endpush
