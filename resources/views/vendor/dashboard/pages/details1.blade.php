@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>
  img {width:100%;}
/************ Overview Area CSS *******************/
.overview-pricing h3 {color:#ed1c24}
.content-wrap {padding:15px;background: #fff; min-height: 50px;box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);position: relative;margin-bottom: 30px;-webkit-border-radius: 2px;-moz-border-radius: 2px;-ms-border-radius: 2px;    border-radius: 2px;}
/* Social Icons */
.social-icons{margin-top:15px;padding: 0;font-size : 9px;}
.social {margin:7px 7px 7px 0px;color:#696969;}
#social-fb:hover {color: #3B5998;transition:all .25s;}
#social-tw:hover {color: #4099FF;transition:all .25s;}
 #social-gp:hover {color: #d34836; transition:all .25s;}
 #social-em:hover {color: #f39c12;transition:all .25s;}
  </style>
@endpush

@section('content')
  <div class="overview">
      <div class="container">
          <div class="row ">
                  <div class="col-md-6">
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
                  <div class="col-md-6">
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
                          <h3>Rs. 53.25 - 57.60 Lakh*</h3>
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
                      <div class="social-icons">
                 <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                 <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
  	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
  	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
  	        </div>
                  </div>

          </div>
      </div>
  </div>
  <div class="site-panel">
      <div class="container">
          <div class="row">
                  <div class="col-md-3">
                      <div class="card">
                          <div class="card-body">
                              <h4>Sidebar</h4>
                          </div>
                      </div>

                  </div>

                  <div class="col-md-9 content-box">
                       <div class="well">
                           <div class="row gaadiexpert-car-color-box">
                               <div class="col-md-12">
                                   <div class="site-title">
                                       <h3>Audi Q5 Colours</h3>
                                       <hr>
                                   </div>
                               </div>
                          <div class="row car-color-box ">
                               <div class="col-md-2 text-center">
                                   <a href="#">
                                   <i class="fa fa-circle"></i>
                                   <p>Moonlight Blue Metallic</p>
                                   </a>
                               </div>
                               <div class="col-md-2 text-center">
                                   <a href="#">
                                   <i class="fa fa-circle red"></i>
                                   <p>Moonlight Blue Metallic</p>
                                   </a>
                               </div>
                               <div class="col-md-2 text-center">
                                   <a href="#">
                                   <i class="fa fa-circle blue"></i>
                                   <p>Moonlight Blue Metallic</p>
                                   </a>
                               </div>
                               <div class="col-md-2 text-center">
                                   <a href="#">
                                   <i class="fa fa-circle brown"></i>
                                   <p>Moonlight Blue Metallic</p>
                                   </a>
                               </div>
                               <div class="col-md-2 text-center">
                                   <a href="#">
                                   <i class="fa fa-circle silver"></i>
                                   <p>Moonlight Blue Metallic</p>
                                   </a>
                               </div>
                               <div class="col-md-2 text-center">
                                   <a href="#">
                                   <i class="fa fa-circle black"></i>
                                   <p>Moonlight Blue Metallic</p>
                                   </a>
                               </div>
                          </div>



                           </div>
                           <div class="row gaadiexpert-car-info-box">
                               <div class="col-md-12">
                                   <div class="site-title">
                                       <h3>Latest On Audi Q5</h3>
                                       <hr>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

  </p>
                                   </div>
                               </div>



                           </div>
                           <div class="row gaadiexpert-car-highlights-box">
                               <div class="col-md-12">
                                   <div class="site-title">
                                       <h3>Highlights On Audi Q5</h3>
                                       <hr>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

  </p>
                                   </div>
                               </div>



                           </div>
                           <div class="row gaadiexpert-car-mileage-box">
                               <div class="col-md-12">
                                   <div class="site-title">
                                       <h3>Audi Q5 Mileage</h3>
                                       <hr>
                                       <p>The claimed ARAI mileage for the Audi Q5 diesel is 17 kmpl.</p>

  </p>
                                   </div>
                               </div>



                           </div>

                       </div>
                       <div class="well">
                           <div class="row gaadiexpert-title-box">
                               <div class="col-md-12">
                                   <div class="site-title">
                                       <h3>Audi Q5 Variants</h3>
                                       <hr>
                                   </div>
                               </div>
                           </div>
                          <div class="row">
                              <div class="table-responsive">
                              <table class="table table-fixed">
      <thead>
        <tr>
          <th>Variant</th>
          <th>Price</th>
          <th>Compare</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
              <a href="#">35TDI</a>
              <br>
              1968cc | Automatic | Diesel
          </td>
          <td>Rs. 53.25 Lakh</td>
          <td>
              <div class="checkbox">
    <label><input type="checkbox" value=""></label>
  </div>
          </td>
        </tr>
        <tr>
          <td>
              <a href="#">35TDI</a>
              <br>
              1968cc | Automatic | Diesel
          </td>
          <td>Rs. 53.25 Lakh</td>
          <td>
              <div class="checkbox">
    <label><input type="checkbox" value=""></label>
  </div>
          </td>
        </tr>
        <tr>
          <td>
              <a href="#">35TDI</a>
              <br>
              1968cc | Automatic | Diesel
          </td>
          <td>Rs. 53.25 Lakh</td>
          <td>
              <div class="checkbox">
    <label><input type="checkbox" value=""></label>
  </div>
          </td>
        </tr>
        <tr>
          <td>
              <a href="#">35TDI</a>
              <br>
              1968cc | Automatic | Diesel
          </td>
          <td>Rs. 53.25 Lakh</td>
          <td>
              <div class="checkbox">
    <label><input type="checkbox" value=""></label>
  </div>
          </td>
        </tr>
        <tr>
          <td>
              <a href="#">35TDI</a>
              <br>
              1968cc | Automatic | Diesel
          </td>
          <td>Rs. 53.25 Lakh</td>
          <td>
              <div class="checkbox">
    <label><input type="checkbox" value=""></label>
  </div>
          </td>
        </tr>
        <tr>
          <td>
              <a href="#">35TDI</a>
              <br>
              1968cc | Automatic | Diesel
          </td>
          <td>Rs. 53.25 Lakh</td>
          <td>
              <div class="checkbox">
    <label><input type="checkbox" value=""></label>
  </div>
          </td>
        </tr>
        <tr>
          <td>
              <a href="#">35TDI</a>
              <br>
              1968cc | Automatic | Diesel
          </td>
          <td>Rs. 53.25 Lakh</td>
          <td>
              <div class="checkbox">
    <label><input type="checkbox" value=""></label>
  </div>
          </td>
        </tr>

      </tbody>
    </table>
                              </div>
                          </div>
                       </div>
                       <div class="well">
                          <div class="row gaadiexpert-title-area">
                               <div class="col-md-12">
                                   <div class="site-title">
                                       <h3>Audi Showrooms in </h3>
                                       <hr>
                                   </div>
                               </div>
                           </div>
                          <div class="row text-center">
                              <div class="col-md-2 showroom-location-area ">
                                <div class="showroom-location-box">
                                  <a href="#">
                                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/149/149228.svg">
                                      <h4>New Delhi</h4>
                                  </a>
                                  </div>

                              </div>
                              <div class="col-md-2 showroom-location-area ">
                                <div class="showroom-location-box">
                                  <a href="#">
                                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/149/149228.svg">
                                      <h4>Mumbai</h4>
                                  </a>
                                  </div>

                              </div>
                              <div class="col-md-2 showroom-location-area ">
                                <div class="showroom-location-box">
                                  <a href="#">
                                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/149/149228.svg">
                                      <h4>Banglore</h4>
                                  </a>
                                  </div>

                              </div>
                              <div class="col-md-2 showroom-location-area ">
                                <div class="showroom-location-box">
                                  <a href="#">
                                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/149/149228.svg">
                                      <h4>Jaipur</h4>
                                  </a>
                                  </div>

                              </div>
                              <div class="col-md-2 showroom-location-area ">
                                <div class="showroom-location-box">
                                  <a href="#">
                                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/149/149228.svg">
                                      <h4>Ahemedabad</h4>
                                  </a>
                                  </div>

                              </div>
                              <div class="col-md-2 showroom-location-area ">
                                <div class="showroom-location-box">
                                  <a href="#">
                                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/149/149228.svg">
                                      <h4>Patna</h4>
                                  </a>
                                  </div>

                              </div>
                              </div>
                         <hr>
                          <button type ="button" class="btn btn-warning">See All Locations</button>
                          </div>
                       <div class="well">
                          <div class="row gaadiexpert-title-area">
                               <div class="col-md-12">
                                   <div class="site-title">
                                       <h3>Useful Links </h3>
                                       <hr>
                                   </div>
                               </div>
                           </div>
                          <div class="row text-center">
                          <div class="col-md-3 useful-links-area ">
                                <div class="useful-links-box">
                                  <a href="#">
                                      <i class="fa fa-car"></i>
                                      <p>Cars Above 10 Lakh</p>
                                  </a>
                                  </div>

                              </div>
                          <div class="col-md-3 useful-links-area ">
                                <div class="useful-links-box">
                                  <a href="#">
                                      <i class="fa fa-car"></i>
                                      <p>Cars Above 10 Lakh</p>
                                  </a>
                                  </div>

                              </div>
                           <div class="col-md-3 useful-links-area ">
                                <div class="useful-links-box">
                                  <a href="#">
                                      <i class="fa fa-car"></i>
                                      <p>Cars Above 10 Lakh</p>
                                  </a>
                                  </div>

                              </div>
                          <div class="col-md-3 useful-links-area ">
                                <div class="useful-links-box">
                                  <a href="#">
                                      <i class="fa fa-car"></i>
                                      <p>Cars Above 10 Lakh</p>
                                  </a>
                                  </div>

                              </div>


                              </div>

                          </div>

                  </div>


          </div>

      </div>
  </div>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
@endpush
