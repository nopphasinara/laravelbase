@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
@endpush

@section('content')
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading"><h4>HR26-5545, Honda Civic, [2016] Karolbagh, New Delhi</h4></div>
          <div class="panel-body">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Car Details</a></li>
              <li><a data-toggle="tab" href="#menu1">Enquiry Details</a></li>
              <li><a data-toggle="tab" href="#menu2">Selling Status</a></li>
              <li><a data-toggle="tab" href="#menu3">Payment Status</a></li>
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">

                <div class="row pt-3">
                  <div class="col-md-3">
                    <img src="https://img.gaadicdn.com/images/mycar/large/audi/a5/marketing/Audi-A5.webp" class="img-rounded" alt="Cinque Terre">
                    <a href="#"> Edit Image</a>
                  </div>
                  <div class="col-md-3">
                    <ul>
                      <li>Total Add of this user : </li>
                      <li>User Name : </li>
                      <li>Name : </li>
                      <li>Email : </li>
                      <li>Phone No. : </li>


                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul>
                      <li>Location : </li>
                      <li>City : </li>
                      <li>Pin Code : </li>
                      <li>Ad Posting Date : </li>
                      <li>Ad Expiry Date : </li>
                      <li>Handled by: </li>

                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul>
                      <li>Expected Price : </li>
                      <li>Km's Driven : </li>
                      <li>Registration No. : </li>
                      <li>Brand : </li>
                      <li>Model : </li>
                      <li>Transmission : </li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    Description: Info posted by the user
                  </div>
                </div>
              </div>
              <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Some content in menu 1.</p>
              </div>
              <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
              </div>
              <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Some content in menu 2.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                Left Panel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                Right Panel
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="listings">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="card bg-light">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Search</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <form>
                      <div class="form-group">
                        <select class="form-control" id="conditionsselect1">
                          <option>Conditions</option>
                          <option>New</option>
                          <option>Used</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="conditionsselect2">
                          <option>Body</option>
                          <option>Compact</option>
                          <option>Convertible</option>
                          <option>Coupe</option>
                          <option>Off-road</option>
                          <option>Sedan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="make1">
                          <option>Make</option>
                          <option>Ford</option>
                          <option>Hyundai</option>
                          <option>Kia</option>
                          <option>Honda</option>
                          <option>Skoda</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="make1">
                          <option>Model</option>
                          <option>Accord</option>
                          <option>Camry</option>
                          <option>Civic</option>
                          <option>Rapid</option>
                          <option>Octavia</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="mileage1">
                          <option>Max Mileage</option>
                          <option>< 5000</option>
                          <option>5000-10000</option>
                          <option>10000-15000</option>
                          <option>15000-20000</option>
                          <option>20000-25000</option>
                          <option>> 25000</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="year1">
                          <option>Year</option>
                          <option>2000</option>
                          <option>2001</option>
                          <option>2002</option>
                          <option>2003</option>
                          <option>2004</option>
                          <option>2005</option>
                          <option>2006</option>
                          <option>2007</option>
                          <option>2008</option>
                          <option>2009</option>
                          <option>2010</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="make1">
                          <option>Transmission</option>
                          <option>Automatic</option>
                          <option>Manaul</option>
                          <option>Semi-Automatic</option>
                        </select>
                      </div>
                      <hr>
                      <button type="btn" class="btn btn-primary">Find Now</button>
                      <button type="btn" class="btn btn-primary">Reset All</button>
                      <div class="pb-3"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-12">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <h3>Search</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <form>
                      <div class="form-group">
                        <select class="form-control" id="conditionsselect1">
                          <option>Conditions</option>
                          <option>New</option>
                          <option>Used</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="conditionsselect2">
                          <option>Body</option>
                          <option>Compact</option>
                          <option>Convertible</option>
                          <option>Coupe</option>
                          <option>Off-road</option>
                          <option>Sedan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="make1">
                          <option>Make</option>
                          <option>Ford</option>
                          <option>Hyundai</option>
                          <option>Kia</option>
                          <option>Honda</option>
                          <option>Skoda</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="make1">
                          <option>Model</option>
                          <option>Accord</option>
                          <option>Camry</option>
                          <option>Civic</option>
                          <option>Rapid</option>
                          <option>Octavia</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="mileage1">
                          <option>Max Mileage</option>
                          <option>< 5000</option>
                          <option>5000-10000</option>
                          <option>10000-15000</option>
                          <option>15000-20000</option>
                          <option>20000-25000</option>
                          <option>> 25000</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="year1">
                          <option>Year</option>
                          <option>2000</option>
                          <option>2001</option>
                          <option>2002</option>
                          <option>2003</option>
                          <option>2004</option>
                          <option>2005</option>
                          <option>2006</option>
                          <option>2007</option>
                          <option>2008</option>
                          <option>2009</option>
                          <option>2010</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="make1">
                          <option>Transmission</option>
                          <option>Automatic</option>
                          <option>Manaul</option>
                          <option>Semi-Automatic</option>
                        </select>
                      </div>
                      <hr>
                      <button type="btn" class="btn btn-primary">Find Now</button>
                      <button type="btn" class="btn btn-primary">Reset All</button>
                      <div class="pb-3"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12">
            <h2> Reno: 42 properties found </h2>
            <p> 3 Reasons to Visit: gambling, entertainment & relaxation </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-justified nav-pills">
              <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link bg-light" href="#">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link bg-light" href="#">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link bg-light" href="#">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link bg-light" href="#">Active</a>
              </li>

            </ul>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <img src="https://dynamic.realestateindia.com/proj_images/project14122/proj_img-14122_1-small.jpg">
                  </div>
                  <div class="col-md-6  card-body">
                    <div class="list-title">
                      <ul class="list-inline list-unstyled">
                        <li class="list-inline-item"><a href="#"><h4>Nugget Casino Resort</h4></a></li>
                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                      </ul>
                    </div>
                    <div class="list-location">
                      <a href="#"><i class="fa fa-map-marker"></i><small> Sparks, Reno – Show on map (4.7 km from center)</small> </a>
                    </div>
                    <div class="list-descrip">
                      <small>This Sparks casino hotel is located in the Sierra Nevada Mountains. This resort features free airport shuttle services, a casino, a nightclub and 8 restaurants and bars. </small>
                    </div>



                  </div>
                  <div class="col-md-3 border-left card-body">
                    <ul class="list-unstyled">
                      <li><h3>Very Good</h3></li>
                      <li class="text-secondary"><small>8067 Reviews  </small></li>
                    </ul>
                    <button type="button" class="btn btn-outline-primary">Book Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <img src="https://dynamic.realestateindia.com/proj_images/project14122/proj_img-14122_1-small.jpg">
                  </div>
                  <div class="col-md-6  card-body">
                    <div class="list-title">
                      <ul class="list-inline list-unstyled">
                        <li class="list-inline-item"><a href="#"><h4>Nugget Casino Resort</h4></a></li>
                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                      </ul>
                    </div>
                    <div class="list-location">
                      <a href="#"><i class="fa fa-map-marker"></i><small> Sparks, Reno – Show on map (4.7 km from center)</small> </a>
                    </div>
                    <div class="list-descrip">
                      <small>This Sparks casino hotel is located in the Sierra Nevada Mountains. This resort features free airport shuttle services, a casino, a nightclub and 8 restaurants and bars. </small>
                    </div>



                  </div>
                  <div class="col-md-3 border-left card-body">
                    <ul class="list-unstyled">
                      <li><h3>Very Good</h3></li>
                      <li class="text-secondary"><small>8067 Reviews  </small></li>
                    </ul>
                    <button type="button" class="btn btn-outline-primary">Book Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <img src="https://dynamic.realestateindia.com/proj_images/project14122/proj_img-14122_1-small.jpg">
                  </div>
                  <div class="col-md-6  card-body">
                    <div class="list-title">
                      <ul class="list-inline list-unstyled">
                        <li class="list-inline-item"><a href="#"><h4>Nugget Casino Resort</h4></a></li>
                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                      </ul>
                    </div>
                    <div class="list-location">
                      <a href="#"><i class="fa fa-map-marker"></i><small> Sparks, Reno – Show on map (4.7 km from center)</small> </a>
                    </div>
                    <div class="list-descrip">
                      <small>This Sparks casino hotel is located in the Sierra Nevada Mountains. This resort features free airport shuttle services, a casino, a nightclub and 8 restaurants and bars. </small>
                    </div>



                  </div>
                  <div class="col-md-3 border-left card-body">
                    <ul class="list-unstyled">
                      <li><h3>Very Good</h3></li>
                      <li class="text-secondary"><small>8067 Reviews  </small></li>
                    </ul>
                    <button type="button" class="btn btn-outline-primary">Book Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <img src="https://dynamic.realestateindia.com/proj_images/project14122/proj_img-14122_1-small.jpg">
                  </div>
                  <div class="col-md-6  card-body">
                    <div class="list-title">
                      <ul class="list-inline list-unstyled">
                        <li class="list-inline-item"><a href="#"><h4>Nugget Casino Resort</h4></a></li>
                        <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                        <li class="list-inline-item text-success"><i class="fa fa-thumbs-up"></i></li>
                      </ul>
                    </div>
                    <div class="list-location">
                      <a href="#"><i class="fa fa-map-marker"></i><small> Sparks, Reno – Show on map (4.7 km from center)</small> </a>
                    </div>
                    <div class="list-descrip">
                      <small>This Sparks casino hotel is located in the Sierra Nevada Mountains. This resort features free airport shuttle services, a casino, a nightclub and 8 restaurants and bars. </small>
                    </div>



                  </div>
                  <div class="col-md-3 border-left card-body">
                    <ul class="list-unstyled">
                      <li><h3>Very Good</h3></li>
                      <li class="text-secondary"><small>8067 Reviews  </small></li>
                    </ul>
                    <button type="button" class="btn btn-outline-primary">Book Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <small> 42 properties found in Reno.  </small>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul class="pagination">
              <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
@endpush
