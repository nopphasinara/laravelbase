@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
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
        <a class="nav-link" href="#">How it works</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Reference</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Employer</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        More
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Company</a>
        <a class="dropdown-item" href="#">Latest </a>
        <a class="dropdown-item" href="#">Popular </a>
        <a class="dropdown-item" href="#">Upcoming </a>
        <a class="dropdown-item" href="#">Offers </a>
      </div>
    </li>



      <form class="form-inline" action="#">
    <input class="form-control mr-sm-2" type="text" placeholder="Search ">
    <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Search</button>
  </form>
  <button type="button" class="btn btn-secondary"data-toggle="modal" data-target="#toploginModal">Select City</button>
  <button type="button" class="btn btn-light"data-toggle="modal" data-target="#toploginModal">Refer Me</button>
    </ul>
  </div>
 </div>
</nav>
<!--- Login Modal box --->
<div class="modal fade" id="toploginModal" tabindex="-1" role="dialog" aria-labelledby="toploginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="toploginModalLabel">Please follow instruction
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-md-12 bg-light">
              <div class="row">
                <div class="col-md-12 card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <h2>Select your City</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <small>Search from over 1500 cities </small>

                    </div>
                  </div>
                  <div class="row py-2">
                    <div class="col-md-12">
                      <form class="form-inline " action="/action_page.php">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p> POPULAR CITIES</p>
                    </div>
                  </div>
                  <div class="row">
                    <button type="button" class="btn btn-link">New Delhi</button>
                    <button type="button" class="btn btn-link">Chennai</button>
                    <button type="button" class="btn btn-link">Banglore</button>
                    <button type="button" class="btn btn-link">Jaipur</button>
                    <button type="button" class="btn btn-link">Mumbai</button>
                    <button type="button" class="btn btn-link">Hyderabad</button>
                    <button type="button" class="btn btn-link">Pune</button>
                    <button type="button" class="btn btn-link">Noida</button>
                    <button type="button" class="btn btn-link">Kolkata</button>
                    <button type="button" class="btn btn-link">Faridabad</button>
                    <button type="button" class="btn btn-link">Ghaziabad</button>
                    <button type="button" class="btn btn-link">Gurgaon</button>
                    <button type="button" class="btn btn-link">Lucknow</button>
                    <button type="button" class="btn btn-link">Patna</button>
                    <button type="button" class="btn btn-link">Ranchi</button>
                    <button type="button" class="btn btn-link">Udaipur</button>
                    <button type="button" class="btn btn-link">Sonipat</button>
                    <button type="button" class="btn btn-link">Haryana</button>
                  </div>
                  <hr>
                  <div class="row">
                    <button type="button" class="btn btn-link">New Delhi</button>
                    <button type="button" class="btn btn-link">Chennai</button>
                    <button type="button" class="btn btn-link">Banglore</button>
                    <button type="button" class="btn btn-link">Jaipur</button>
                    <button type="button" class="btn btn-link">Mumbai</button>
                    <button type="button" class="btn btn-link">Hyderabad</button>
                    <button type="button" class="btn btn-link">Pune</button>
                    <button type="button" class="btn btn-link">Noida</button>
                    <button type="button" class="btn btn-link">Kolkata</button>
                    <button type="button" class="btn btn-link">Faridabad</button>
                    <button type="button" class="btn btn-link">Ghaziabad</button>
                    <button type="button" class="btn btn-link">Gurgaon</button>
                    <button type="button" class="btn btn-link">Lucknow</button>
                    <button type="button" class="btn btn-link">Patna</button>
                    <button type="button" class="btn btn-link">Ranchi</button>
                    <button type="button" class="btn btn-link">Udaipur</button>
                    <button type="button" class="btn btn-link">Sonipat</button>
                    <button type="button" class="btn btn-link">Haryana</button>
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

  <div class="container-fluid">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="#" class="list-group-item list-group-item-action">User Management</a>
              <a href="#" class="list-group-item list-group-item-action">Used</a>
              <a href="#" class="list-group-item list-group-item-action">Enquiry</a>
              <a href="#" class="list-group-item list-group-item-action">Dealer</a>
              <a href="#" class="list-group-item list-group-item-action">Media</a>
              <a href="#" class="list-group-item list-group-item-action">Post</a>
              <a href="#" class="list-group-item list-group-item-action">Category</a>
              <a href="#" class="list-group-item list-group-item-action">New</a>
              <a href="#" class="list-group-item list-group-item-action">Comments</a>
              <a href="#" class="list-group-item list-group-item-action">Appearance</a>
              <a href="#" class="list-group-item list-group-item-action">Reports</a>
              <a href="#" class="list-group-item list-group-item-action">Settings</a>


            </div>
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-2 border-right">
		                    <h4>Tags</h4>
		                </div>
		                <div class="col-md-6">
		                    <button type="button" class="btn btn-sm btn-primary">Add New</button>
		                </div>

		            </div>
		            <hr>
		            <div class="row">
        		        <div class="col-md-4 bg-light card-body">
        		            <h5>Add New Tag</h5>
        		            <form>
                              <div class="form-group row">
                                <label for="text" class="col-12 col-form-label">Name</label>
                                <div class="col-12">
                                  <input id="text" name="text" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="slug" class="col-12 col-form-label">Slug</label>
                                <div class="col-12">
                                  <input id="slug" name="slug" class="form-control here" type="text">
                                  <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>

                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="description" class="col-12 col-form-label">Description</label>
                                <div class="col-12">
                                  <textarea id="description" name="description" cols="40" rows="4" class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-12">
                                  <button name="submit" type="submit" class="btn btn-primary btn-sm">Add New Tag</button>
                                </div>
                              </div>
                            </form>
        		        </div>
        		        <div class="col-md-8">
        		            <table class="table table-hover ">
                                <thead class="bg-light ">
                                  <tr>
                                    <th>
                                      <div class="form-check-inline">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">
                                           </label>
                                       </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Count</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                        <div class="form-check-inline">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">
                                           </label>
                                       </div>
                                    </td>
                                    <td><a href="#"><small>Johnyahua</small></a></td>
                                    <td><small>Doe</small></td>
                                    <td><small>john@example.com</small></td>
                                    <td><a href="#"><small>5</small></a></td>
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
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
@endpush
