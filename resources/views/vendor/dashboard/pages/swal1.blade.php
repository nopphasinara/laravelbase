@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
  <style>
  .mw30-text {max-height: 30px; overflow: hidden;}
.mh200-text {min-height: 200px;max-height:200px;overflow: hidden;}


/* Breadcum bar */
.bg-grey {background:#efefef}
.breadcrumb {background: none; margin: 0;font-weight: 300;padding-left: 0; font-size: 13px;}
.breadcrumb a {color: #999;}
.breadcrumb > .active {color: #696969;}
.breadcrumb > li + li::before {content: "\203A";color: #999;padding: 0 8px;}
/********** car horizon ************/

.car-image-block {padding:0px;margin:0px;}
.car-image-block img {min-height: 200px; overflow: hidden;}

/************* GENERIC  *****************/
a {color:#696969;}
img {width:100%;}
.twhite {color:#fff!important;}
.twhite a {color:#fff!important;}
/************* Background ****************/
.bglight1 {background:#f2f2f2;}
/************* TOP-HEAD *****************/
.top-head ul li {padding-right:8px;}
/****************** Navigation **************/
.navbar-toggler {border-color: #dd0000;}
.navbar-toggler-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(221, 0, 0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}
/**************** Banner Slider Carousel **************/
.carousel-inner img {width: 100%;}
.carousel-caption {color:#000;top:110px; bottom: auto; text-align:left;}
.carousel-caption h1 { color:#dd0000; background-color:#;}
/************ Services **************/
.most-car-box:hover {background: ; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);}
/*********** TABS *******/
.nav-tabs { border-bottom: 1px solid #ccc; }
.nav-tabs .nav-link.active {
  border-bottom: 1px solid #dd0000;
  border-radius:0px;
}
/**************** Social ICONS ***************/

.social-icons{margin: 0;padding: 0; font-size : 8px;}
.social {margin:7px 7px 7px 0px;}
#social-fb:hover {color: #3B5998;transition:all .25s;}
#social-tw:hover {color: #4099FF;transition:all .25s;}
#social-gp:hover {color: #d34836;transition:all .25s;}
#social-em:hover {color: #f39c12;transition:all .25s;}

  </style>
@endpush

@section('content')
<div class="top-head pt-1 border">
<div class="container">
	<div class="row ">
	  <div class="col-md-12 text-right">
		<ul class="list-inline ">
		    <a href="#"><li class="list-inline-item"><small><i class="fa fa-mobile fa-2x"></i> Download Mobile App</small></li></a>
		    <a href="#"><li class="list-inline-item"><small> Check On Road Price</small></li></a>
		    <a href="#"><li class="list-inline-item"><small> Feedback</small></li></a>
		    <a href="#"><li class="list-inline-item"><small> Ask a Question</small></li></a>
		    <a href="#"><li class="list-inline-item"><small><i class="fa fa-user"></i>  My Account</small></li></a>


		</ul>
	  </div>
	</div>
</div>
</div>
<nav class="navbar navbar-expand-sm bg-light navbar-light border">
  <div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="#">
    <img src="http://velikorodnov.com/html/autotrader/images/logo.png" alt="Logo" style="width:120px;">
  </a>
   <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
<!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        New
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Find New Cars</a>
        <a class="dropdown-item" href="#">Latest Cars</a>
        <a class="dropdown-item" href="#">Popular Cars</a>
        <a class="dropdown-item" href="#">Upcoming Cars</a>
        <a class="dropdown-item" href="#">Offers & Discounts</a>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Used
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Find Used Cars</a>
        <a class="dropdown-item" href="#">Find by Brand</a>
        <a class="dropdown-item" href="#">Find by Location</a>
        <a class="dropdown-item" href="#">Upcoming Cars</a>
        <a class="dropdown-item" href="#">Offers & Discounts</a>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sell</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Compare</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        News & Reviews
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Car News</a>
        <a class="dropdown-item" href="#">Car Reviews</a>
        <a class="dropdown-item" href="#">Car Videos</a>
        <a class="dropdown-item" href="#">Write Review</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        More
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Car Loan</a>
        <a class="dropdown-item" href="#">EMI Calculator</a>
        <a class="dropdown-item" href="#">Car Insurance</a>
        <a class="dropdown-item" href="#">Ask Question</a>
      </div>
    </li>

      <form class="form-inline" action="#">
    <input class="form-control mr-sm-2" type="text" placeholder="Search Cars">
    <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Search</button>
  </form>
    </ul>
  </div>
 </div>
</nav>
<div class="ad-top border py-1 hidden-xs " style="margin-top:0px;">
 <div class="container-fluid ">
	<div class="row justify-content-md-center ">
	    <div class="adbox-img">
	         <img src="https://moatsearch-data.s3.amazonaws.com/creative_screens/7b/f8/d4/7bf8d4dd35362e8a11a418d4c58bd59c.jpg" class="img-thumbnail" alt="Cinque Terre">
	   </div>


	</div>
 </div>
</div>
<div class="bread-bar bg-grey">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-8 col-sm-6 col-xs-8">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html">Live Update</a></li>
                        <li class="active">About Us</li>
                    </ol>
            	</div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
      	</div>
    </div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Overview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Price</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Specification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pictures</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Loan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Insurance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dealers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Color</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mileage</a>
        </li>
      </ul>
    </div>
</nav>

<div class="overview-image-info-area py-5">
	<div class="container">
        <div class="row ">
                <div class="col-md-7">
                  <div class="overview-img">
                    <img class="img-responsive" src="https://media.zigcdn.com/media/model/2018/Jan/audi-q5-right_600x300.jpg">
                  </div>
                  <div class="overview-links pull-right">
                      <ul class=list-inline>
                          <li class="list-inline-item"><a href="#">Exterior Images</a></li>
                          <li class="list-inline-item"><a href="#">Interior Images</a></li>
                          <li class="list-inline-item"><a href="#">Insurance</a></li>
                          <li class="list-inline-item"><a href="#">Loans</a></li>


                      </ul>
                  </div>
                </div>
                <div class="col-md-5">
                    <div class="pt-4"></div>
                    <div class="overview-title">
                        <h2>Audi Q5</h2>
                    </div>
                    <div class="overview-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="overview-pricing">
                        <h3><i class="fa fa-inr"></i> 53.25 - 57.60 Lakh*</h3>
                    </div>
                    <div class="exshowroom-pricing">

                        <div class="form-group">
  <label for="sel1">*Ex-Showroom Price</label>
  <select class="form-control" id="sel1">
    <option>New Delhi</option>
    <option>Mumbai</option>
    <option>Jaipur</option>
    <option>Banglore</option>
  </select>
</div>
                    </div>
                    <div class="overview-btns">
                        <button type="button" class="btn btn-success">View January Offers</button>
                        <button type="button" class="btn btn-warning">View On Road Price</button>

                    </div>

                </div>

        </div>
    </div>
</div>
<div class="quick-overview bg-secondary text-white py-3">
<div class="container">
	<div class="row ">
	    <div class="col-md-3  border">
	        <div class="card-body">
	            <i class="fa fa-rocket fa-4x"></i>
	            <h4>Performance</h4>
	            <ul class="list-unstyled">
	                <li class="border-bottom"> Mileage : 0.00 Kmpl</li>
	                <li class="border-bottom">Service Cost : N/A</li>
	                <li class="border-bottom">Fuel Type  : Diesel</li>
	                <li class="border-bottom">Fuel Tank  : 70 Litres</li>
	            </ul>
	        </div>
	    </div>
	    <div class="col-md-3 border ">
	        <div class="card-body">
	            <i class="fa fa-scissors fa-4x"></i>
	            <h4>Economy</h4>
	            <ul class="list-unstyled">
	                <li class="border-bottom"> Mileage : 0.00 Kmpl</li>
	                <li class="border-bottom">Service Cost : N/A</li>
	                <li class="border-bottom">Fuel Type  : Diesel</li>
	                <li class="border-bottom">Fuel Tank  : 70 Litres</li>
	            </ul>
	        </div>
	    </div>
	    <div class="col-md-3 border">
	        <div class="card-body">
	            <i class="fa fa-check fa-4x"></i>
	            <h4>Comfort</h4>
	            <ul class="list-unstyled">
	                <li class="border-bottom"> Mileage : 0.00 Kmpl</li>
	                <li class="border-bottom">Service Cost : N/A</li>
	                <li class="border-bottom">Fuel Type  : Diesel</li>
	                <li class="border-bottom">Fuel Tank  : 70 Litres</li>
	            </ul>
	        </div>
	    </div>
	    <div class="col-md-3 border ">
	        <div class="card-body">
	            <i class="fa fa-shield fa-4x"></i>
	            <h4>Safety</h4>
	            <ul class="list-unstyled">
	                <li class="border-bottom"> Mileage : 0.00 Kmpl</li>
	                <li class="border-bottom">Service Cost : N/A</li>
	                <li class="border-bottom">Fuel Type  : Diesel</li>
	                <li class="border-bottom">Fuel Tank  : 70 Litres</li>
	            </ul>
	        </div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
	        <small>Showing information of Mahindra XUV500 W11 Option AT AWD - Diesel variant</small>
	    </div>

	</div>

</div>
</div>
<div class="text-area mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Highlights</h3>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <p>Mahindra XUV500 facelift prices: Prices for the 2018 Mahindra XUV500 facelift start at Rs 12.32 lakh and go all the way up to Rs 18.98 lakh for the top-of-the-line W11(O) AWD variant. For detailed pricing, click here.

Mahindra XUV500 facelift engine and variants: The Mahindra XUV500 facelift debuts a more powerful version of its existing 2.2-litre diesel engine, while carrying forward the 2.2-litre petrol. The uprated diesel now puts out 155PS/360Nm compared to the 140PS/330Nm in the outgoing model. It continues offering a 6-speed manual and automatic transmission options. The petrol engine, though, comes mated with the automatic transmission only for now. Mahindra has also changed the nomenclature of the variants which now are W5, W7, W9 and W11 and the range-topping W11(O) variant. Recommended: 2018 Mahindra XUV500 Facelift: Variants Explained

Mahindra XUV500 facelift features: The updated XUV500 carries forward the equipment list of the outgoing model, including the sunroof, six airbags, ESP and 8-way electrically adjustable driver’s seat. The infotainment system doesn't get any updates but Mahindra's BlueSense app can now be controlled not only through a smartphone but with a smartwatch as well.

Safety: On the safety front, the XUV500 gets dual front airbags and ABS (anti-lock braking system) with EBD (electronic brakeforce distribution) across the range. Higher variants even get side and curtain airbags, ESP (electronic stability program), roll-over mitigation and hill hold and descent control as well. Mahindra also offers emergency call feature, which is available across all variants except for the base W5.

Mahindra XUV500 facelift rivals: The XUV500 facelift renews its rivalry with the Jeep Compass, Hyundai Tucson, Toyota Innova Crysta and the Tata Hexa.</p>
            </div>
        </div>
    </div>
</div>
<div class="variant-area mt-4">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		    <h3>Audi Q5 Variants</h3>
		</div>
	</div>
	<hr>
	<div class="row">
	    <div class="col-md-8">
	        <table class="table table-hover">
    <thead class="bg-warning">
    <tr>
      <th>Variant</th>
      <th>Ex-Showroom Price</th>
      <th>.</th>
      <th>Compare</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>

  </tbody>
</table>
            <div class="row my-4">
    <div class="col-md-12">
        <div id="accordion">
          <div class="card">
            <div class="card-header ">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                Specifications <i class="fa fa-angle-down fa-2x pull-right"></i></a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                Engine <i class="fa fa-angle-down fa-2x pull-right"></i>
              </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <table class="table-specifications table table-striped table-hover">
                                                                    <tbody>
                                                                    	<tr>
                                                                    		<td>Engine type</td>
                                                                    		<td>SKYACTIV-G 2.5 L DOHC 16-valve 4-cylinder engine with VVT</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Displacement</td>
                                                                    		<td>2,488 cc</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Compression ratio</td>
                                                                    		<td>13.0:1</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Horsepower SAE net</td>
                                                                    		<td>184 @ 5,700 rpm</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Torque SAE net lb. ft.</td>
                                                                    		<td>185 @ 3,250 rpm</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Fuel system</td>
                                                                    		<td>Direct injection</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Recommended fuel</td>
                                                                    		<td>Regular</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Fuel economy city/highway (L/100 km)*<br>Manual<br>Automatic</td>
                                                                    		<td>8.1/5.3<br>7.6/5.1</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Curb weight (kg)<br> Manual<br>Automatic</td>
                                                                    		<td>1,442<br>1,465</td>
                                                                    	</tr>
                                                                    </tbody>
                                                          		</table>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                Exterior <i class="fa fa-angle-down fa-2x pull-right"></i>
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <table class="table-specifications table table-striped table-hover">
                                                                    <tbody>
                                                                    	<tr>
                                                                    		<td>Wheelbase/overall length (mm)</td>
                                                                    		<td>2,830/4,895</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Overall width (mm)</td>
                                                                    		<td>1,840</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Overall height (mm)</td>
                                                                    		<td>1,450</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Track (fr/rr) (mm)<br>17" wheels<br>19" wheels</td>
                                                                    		<td>1,585/1,575<br>1,595/1,585</td>
                                                                    	</tr>
                                                                    	<tr>
                                                                    		<td>Turning circle, curb-to-curb (m)</td>
                                                                    		<td>11.2</td>
                                                                    	</tr>
                                                                    </tbody>
                                                               	</table>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
	    </div>
	    <div class="col-md-4">
	        <div class="card">
	            <div class="card-body">
	                <img src="https://moatsearch-data.s3.amazonaws.com/creative_screens/a7/c9/6c/a7c96c6fce54ff229aa284b3d0afcf1e.jpg" alt="">
	            </div>
	        </div>
	    </div>
	</div>

</div>
</div>
<div class="video-area py-5 bg-secondary text-white">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		    <h3>Toyota Yaris videos </h3>
		    <p>Get up-to-date expert videos of Toyota Yaris - Subscribe Now! See below our handpicked Yaris Videos from Youtube and Web.</p>

		</div>
	</div>
	<div class="row">
	    <div class="col-md-4">
	        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="356" height="200" type="text/html" src="https://www.youtube.com/embed/DBXH9jJRaDk?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"><div><small><a href="https://youtubeembedcode.com/en">Find Out More</a></small></div><div><small><a href="http://promocode.com.ph/gobuy/">gobuy coupon</a></small></div></iframe>
	    </div>
	     <div class="col-md-4">
	        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="356" height="200" type="text/html" src="https://www.youtube.com/embed/DBXH9jJRaDk?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"><div><small><a href="https://youtubeembedcode.com/en">Find Out More</a></small></div><div><small><a href="http://promocode.com.ph/gobuy/">gobuy coupon</a></small></div></iframe>
	    </div>
	     <div class="col-md-4">
	        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="356" height="200" type="text/html" src="https://www.youtube.com/embed/DBXH9jJRaDk?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"><div><small><a href="https://youtubeembedcode.com/en">Find Out More</a></small></div><div><small><a href="http://promocode.com.ph/gobuy/">gobuy coupon</a></small></div></iframe>
	    </div>
	</div>
	<div class="row pt-4">
	    <div class="col-md-12 text-center">
	        <button type="button" class="btn btn-light">View All Videos</button>
	    </div>
	</div>
</div>
</div>
<div class="recommended-cars mt-4">
    <div class="container">
	<div class="row">
	    <div class="col-md-12">
		<div class="card">
		    <div class="card-body">
		        <h5> Recommended used cars based on Price & Location</h5>
		    <div class="row py-2">
		        <div class="col-md-4 vertical-box">
		             <div class="card">
                      <img class="card-img-top mh200-text" src="https://img2.gaadicdn.com/images/usedcarimages/320x224/11-2017/1843403/IMG_6603.jpg" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title mw30-text">2006 Toyota Innova 2.5 V Diesel 7-seater
                    2006 Toyota Innova 2.5 V Diesel 7-se</h4>
                    <h5 class="card-text">Rs. 25.32 Lac*</h5>

    <ul class="list-inline">
                            <li class="list-inline-item">44,114 Km</li>
                             <li class="list-inline-item">Petrol</li>
                             <li class="list-inline-item">Gurugram</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger">Contact Sellers</button>
  </div>
</div>
		         </div>
		        <div class="col-md-4 vertical-box">
		             <div class="card">
                      <img class="card-img-top mh200-text" src="https://img2.gaadicdn.com/images/usedcarimages/320x224/11-2017/1843403/IMG_6603.jpg" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title mw30-text">2006 Toyota Innova 2.5 V Diesel 7-seater
                    2006 Toyota Innova 2.5 V Diesel 7-se</h4>
                    <h5 class="card-text">Rs. 25.32 Lac*</h5>

    <ul class="list-inline">
                            <li class="list-inline-item">44,114 Km</li>
                             <li class="list-inline-item">Petrol</li>
                             <li class="list-inline-item">Gurugram</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger">Contact Sellers</button>
  </div>
</div>
		         </div>

		         <div class="col-md-4 vertical-box">
		             <div class="card">
                      <img class="card-img-top mh200-text" src="https://img2.gaadicdn.com/images/usedcarimages/320x224/11-2017/1843403/IMG_6603.jpg" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title mw30-text">2006 Toyota Innova 2.5 V Diesel 7-seater
                    2006 Toyota Innova 2.5 V Diesel 7-se</h4>
                    <h5 class="card-text">Rs. 25.32 Lac*</h5>

    <ul class="list-inline">
                            <li class="list-inline-item">44,114 Km</li>
                             <li class="list-inline-item">Petrol</li>
                             <li class="list-inline-item">Gurugram</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger">Contact Sellers</button>
  </div>
</div>
		         </div>

		     </div>
		    </div>
		</div>
		</div>
	</div>
</div>
</div>


<div class="cta-sektion  border mt-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <h3><span class="glyphicon glyphicon-cog "></span> <b>Car for sale?</b> Explore Cars like a pro.</h3>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 ">
                <button type="button" class="btn bg-danger twhite">Start Right Now</button>
            </div>
        </div>
    </div>
</div>
<div class="footer  py-5  ">
	<div class="container">
	  <div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 footer-one">
		    <img src="http://velikorodnov.com/html/autotrader/images/logo.png" alt="Logo" style="width:120px;">

		    <p class="pt-4">Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		    	<div class="social-icons">
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
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
		    <ul class="list-unstyled">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
@endpush
