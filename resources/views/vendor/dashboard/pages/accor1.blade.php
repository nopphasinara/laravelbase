@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style></style>
@endpush

@section('content')
  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  		     <div id="accordion">
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                          Select Your Car
                        </a>
                      </div>
                      <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                          <div class="row">
                               <div class="col-md-3  card-body">
                                  <div class="row pb-2">
                                      <div class="col-md-12">
                                          <h5>Select a year</h5>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                             <select class="custom-select" size="10">
                                                      <option selected>Open this select menu</option>
                                                      <option value="1">2018</option>
                                                      <option value="2">2017</option>
                                                      <option value="2">2016</option>
                                                      <option value="3">2015</option>
                                                      <option value="4">2014</option>
                                                      <option value="5">2013</option>
                                                      <option value="6">2012</option>
                                                      <option value="7">2011</option>
                                                      <option value="8">2010</option>
                                                      <option value="9">2009</option>
                                                      <option value="10">2008</option>
                                                      <option value="11">2007</option>

                                              </select>

                                          </div>
                                      </div>
                                  </div>
                               </div>
                               <div class="col-md-3  card-body">
                                  <div class="row pb-2">
                                      <div class="col-md-12">
                                          <h5>Make</h5>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                             <select class="custom-select" size="10">
                                                      <option selected>Open this select menu</option>
                                                      <option value="1">Maruti Suzuki</option>
                                                      <option value="2">Hyundai</option>
                                                      <option value="2">Honda</option>
                                                      <option value="3">Toyota</option>
                                                      <option value="4">Mahindra</option>
                                                      <option value="5">Chevrolet</option>
                                                      <option value="6">Ford</option>
                                                      <option value="7">Audi</option>
                                                      <option value="8">BMW</option>
                                                      <option value="9">Chevrolet</option>
                                                      <option value="10">Datsun</option>
                                                      <option value="11">DC</option>
                                                      <option value="12">Eicher Polaris</option>
                                                      <option value="13">Fiat</option>
                                                      <option value="14">Jaguar</option>
                                                      <option value="15">Land Rover</option>
                                                      <option value="16">Mercedes-Benz</option>
                                                      <option value="17">Mitsubishi</option>
                                                      <option value="18">Nissan</option>
                                                      <option value="19">Porsche</option>
                                                      <option value="20">Renault</option>
                                                      <option value="21">Rolls-Royce</option>
                                                      <option value="22">Skoda</option>
                                                      <option value="23">Ssangyong</option>
                                                      <option value="24">Tata</option>
                                                      <option value="25">Toyota</option>
                                                      <option value="26">Volkswagen</option>
                                                      <option value="27">Volvo</option>

                                              </select>

                                          </div>
                                      </div>
                                  </div>
                               </div>
                               <div class="col-md-3  card-body">
                                  <div class="row pb-2">
                                      <div class="col-md-12">
                                          <h5>Model</h5>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                             <select class="custom-select" size="10">
                                                   <option selected>Open this select menu</option>
                                                  <option value="1">Amaze</option>
                                                  <option value="2">City</option>
                                                  <option value="2">Brio</option>
                                                  <option value="3">CR-V</option>
                                                  <option value="4">Jazz</option>
                                                  <option value="5">Mobilio</option>
                                              </select>

                                          </div>
                                      </div>
                                  </div>
                               </div>
                               <div class="col-md-3  card-body">
                                  <div class="row pb-2">
                                      <div class="col-md-12">
                                          <h5>Variant</h5>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                             <select class="custom-select" size="10">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">Petrol</option>
                                                    <option value="2">Diesel</option>
                                                    <option value="3">CNG</option>
                                                    <option value="4">Electric</option>
                                                    <option value="5">Hybrid</option>

                                              </select>

                                          </div>
                                      </div>
                                  </div>
                               </div>
                              </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                          Car Details
                        </a>
                      </div>
                      <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <div class="container">
                          	<div class="row">
                               <div class="col-md-3  card-body">
                                  <div class="row pb-2">
                                      <div class="col-md-12">
                                          <h5>Select Location</h5>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                             <select class="custom-select" size="10">
                                                      <option selected>Open this select menu</option>
                                                      <option value="1">New Delhi</option>
                                                      <option value="2">Banglore</option>
                                                      <option value="2">Chennai</option>
                                                      <option value="3">Hyderabad</option>
                                                      <option value="4">Kolkata</option>
                                                      <option value="5">Jaipur</option>
                                                      <option value="6">Andhra Pradesh</option>
                                                      <option value="7">UP</option>
                                                      <option value="8">Patna</option>
                                                      <option value="9">Uttrakhand</option>
                                                      <option value="10">Himachal Pradesh</option>
                                                      <option value="11">Kerala</option>

                                              </select>

                                          </div>
                                      </div>
                                  </div>
                               </div>
                               <div class="col-md-3  card-body">
                                  <div class="row pb-2">
                                      <div class="col-md-12">
                                          <h5>KM's Driven</h5>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                             <select class="custom-select" size="10">
                                                      <option selected>Open this select menu</option>
                                                      <option value="1"> Less than 10,000 Kms</option>
                                                      <option value="2">10,000 - 20,000</option>
                                                      <option value="2">20,000 - 30,000</option>
                                                      <option value="3">30,000 - 40,000</option>
                                                      <option value="4">40,000 - 60,000</option>
                                                      <option value="5">60,000 - 80,000</option>
                                                      <option value="6">80,000 and 1,00,000</option>
                                                      <option value="7">1,00,000 and above</option>


                                              </select>

                                          </div>
                                      </div>
                                  </div>
                               </div>
                               <div class="col-md-3  card-body">
                                  <div class="row pb-2">
                                      <div class="col-md-12">
                                          <h5>Transmission</h5>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                             <select class="custom-select" size="10">
                                                   <option selected>Open this select menu</option>
                                                  <option value="1">Manual</option>
                                                  <option value="2">Automatic</option>
                                              </select>

                                          </div>
                                      </div>
                                  </div>
                               </div>
                               <div class="col-md-3  card-body">
                                  <div class="row pb-2">
                                      <div class="col-md-12">
                                          <h5>No. of Owners</h5>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                             <select class="custom-select" size="10">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">First Owner</option>
                                                    <option value="2">Second Owner</option>
                                                    <option value="3">Third Owner</option>
                                                    <option value="4">Fourth Owner</option>


                                              </select>

                                          </div>
                                      </div>
                                  </div>
                               </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                          Car Photos
                        </a>
                      </div>
                      <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <div class="container">
                          	<div class="row">
                               <div class="col-md-6 border card-body">
                                  <form class="form-horizontal">
                                    <div class="form-group">
                                      <label for="expectedprice" class="control-label col-xs-4">Expected Price:</label>
                                      <div class="col-xs-8">
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-inr"></i>
                                          </div>
                                          <input id="expectedprice" name="expectedprice" class="form-control" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="carcolor" class="control-label col-xs-4">Car Color:</label>
                                      <div class="col-xs-8">
                                        <select id="carcolor" name="carcolor" class="select form-control">
                                          <option value="white">White</option>
                                          <option value="grey">Grey</option>
                                          <option value="black">Black</option>
                                          <option value="red">Red</option>
                                          <option value="silver">Silver</option>
                                          <option value="green">Green</option>
                                          <option value="brown">Brown</option>
                                          <option value="others">Others</option>
                                        </select>
                                      </div>
                                    </div>

                                  </form>


                               </div>
                               <div class="col-md-6">
                                   <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">1. Upload Photos</label>
                                   </div>
                                   <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile"> 2.  Upload Photos </label>
                                   </div>
                                   <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">3. Upload Photos </label>
                                   </div>
                                   <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">4. Upload Photos </label>
                                   </div>
                                   <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">5. Upload Photos</label>
                                   </div>
                                   <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">6. Upload Photos</label>
                                   </div>
                               </div>

                              </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                          User Details & Post the Ad
                        </a>
                      </div>
                      <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <div class="row">
                               <div class="col-md-6 border card-body">
                                  <small>Ad Description:</small>
                                  <form class="form-horizontal">
                                    <div class="form-group">
                                      <label for="textarea" class="control-label col-xs-4">Include Other Information about Car:</label>
                                      <div class="col-xs-8">
                                        <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
                                      </div>
                                    </div>
                                  </form>


                               </div>
                               <div class="col-md-6 border card-body ">
                                   <small>Enter your Account Details :</small>
                                   <form>
                                          <div class="form-row">
                                              <div class="form-group col-md-6">
                                                <input id="Full Name" name="Full Name" placeholder="Full Name" class="form-control" type="text">
                                              </div>
                                              <div class="form-group col-md-6">
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                              </div>
                                            </div>
                                          <div class="form-row">
                                              <div class="form-group col-md-6">
                                                  <input id="Mobile No." name="Mobile No." placeholder="Mobile No." class="form-control" required="required" type="text">
                                              </div>
                                              <div class="form-group col-md-6">

                                                        <select id="inputState" class="form-control">
                                                          <option selected>Choose ...</option>
                                                          <option> New Buyer</option>
                                                          <option> Auction</option>
                                                          <option> Complaint</option>
                                                          <option> Feedback</option>
                                                        </select>
                                              </div>
                                              <div class="form-group col-md-12">
                                                        <textarea id="comment" name="comment" cols="40" rows="5" class="form-control"></textarea>
                                              </div>
                                          </div>
                                          <div class="form-row">
                                              <div class="form-group">
                                                  <div class="form-group">
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                        <label class="form-check-label" for="invalidCheck2">
                                                          <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                                        </label>
                                                      </div>
                                                    </div>

                                                </div>
                                          </div>

                                          <div class="form-row">
                                              <button type="button" class="btn btn-danger">Submit</button>
                                          </div>
                                      </form>
                               </div>

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
