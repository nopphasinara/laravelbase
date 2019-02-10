@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>
  body{
    background:rgb(96%, 95%, 94%);
}

#main-content{
    background:rgb(100%, 100%, 100%);
    min-height:40vh;
}

aside{
    max-height:400px;
}
ul li{
    list-style:none;
    margin-top:5%;
    color:rgb(71%, 73%, 75%);
}

ul li a {
     color:rgb(71%, 73%, 75%);
}
ul li a:hover {
    color:rgb(0%, 48%, 100%);
    text-decoration:none;
}
.active{
    color:rgb(0%, 48%, 100%);
}

.fa{
    margin-right:5%;
}



h1,h2,h3,h4{
    padding-left:4%;
}

.input-group-text{
    min-width:100px;
}

form{
    padding-top:4%;
    padding-bottom:4%;
}

.slidecontainer{
}
.slider{
     cursor: pointer;
}

.radio-input{
    margin-left:5px;
    margin-right:5px;
}

.radio-input-label{
margin-left:30px;
}

  </style>
@endpush

@section('content')
  <div class="container">
  	<div class="row bg-dark mb-4 my-4 text-white">
  		<h2>Change System Settings</h2>
  	</div>

  	<div class="row">
  	    <!-- side nav-->
  	    <aside class="col-sm-6 col-md-3 card  my-4">
  	        <h3>Company Name</h3>
  	        <hr/>
  	        <ul>
  	            <li>
  	                <a href="#" class="active">
      	                <span class="fa fa-gear"></span>
      	                General settings
  	                </a>
  	            </li>
  	            <li>
  	                <a href="#">
      	                <span class="fa fa-wrench"></span>
      	                account settings
  	                </a>
  	            </li>
  	            <li>
  	                <a href="#">
      	                <span class="fa fa-paint-brush "></span>
      	                theme
  	                </a>
  	            </li>
  	            <li>
  	                <a href="#">
      	                <span class="fa fa-clock-o"></span>
      	                time zone
  	                </a>
  	            </li>
  	            <li>
  	                <a href="#">
      	                <span class="fa fa-btc "></span>
      	                payment details
  	                </a>
  	            </li>
  	            <li>
  	                <a href="#">
  	                    <span class="fa fa-user-secret "></span>
  	                    access control
  	                </a>
  	            </li>
  	        </ul>
  	    </aside>

  	    <section class="col-sm-6 col-md-8 offset-md-1" id="main-content">
  	        <h3 class="pull-right mb-4">General settings</h3>
  	        <form method="" action="" class="container">

  	            <div class="input-group mb-5">
  	                <div class="col-sm-6 col-md-12 h6">Domain</div>
                      <div class="input-group-prepend">

                          <span class="input-group-text" id="basic-addon1">site domain</span>
                      </div>
                      <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="changes your sites domain name" a value="currentname.yoursite.com" placeholder="sexample.yoursite.come" aria-label="Username" aria-describedby="basic-addon1">
                  </div>

  	            <div class="row">
  	                <label for="notifications">Email Notifications</label>
                      <span id="notifications" class="form-text text-muted">
                          Choose which email updates you receive on conversations you're participating in or watching
                      </span>

                      <div class="col-sm-6 my-4">
                          <div>
                              <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off"> Marketing and Sales Promotion
                          </div>
                          <div>
                              <label class="btn btn-warning">
                              <input type="checkbox" checked autocomplete="off"> upcoming events
                          </div>
                          <div>
                              <label class="btn btn-danger">
                              <input type="checkbox"utocomplete="off"> security
                          </div>
                      </div>

                      <div class="col-sm-6 my-4">
                          <div>
                              <label class="btn btn-dark">
                              <input type="checkbox" autocomplete="off"> Analtics and System performance
                          </div>
                          <div>
                              <label class="btn btn-info">
                              <input type="checkbox" autocomplete="off"> Posts and comments
                          </div>
                      </div>
  	            </div>


                  <div class="slidecontainer my-2 mb-2">
                      <div class="col-sm-6 col-md-12 h6">Posts per page</div>
                      <input type="range" class="col-sm-6 col-md-12 text-success" min="1" max="100" value="50" class="slider" id="myRange">
                  </div>


                  <div class="col-sm-6 col-md-12 h6 my-2 mb-4">Make system Backups on</div>
                  <div class="btn-group my-2 mb-2 my-2 " data-toggle="buttons">
              		<label class="btn btn-primary active ">
              			<input type="checkbox" checked>Mon
              		</label>
              		<label class="btn btn-primary" >
              			<input type="checkbox"> Tue
              		</label>
              		<label class="btn btn-primary">
              			<input type="checkbox"> Wed
              		</label>
              		<label class="btn btn-primary">
              			<input type="checkbox"> Thur
              		</label>
              		<label class="btn btn-primary">
              			<input type="checkbox"> Fri
              		</label>
              	</div>


              	<div>
              	    <div class="col-sm-6 col-md-12 h6">Week Starts on:</div>
              	    <div class="btn btn-primary form-check-label">
              	        <input class="form-check-input radio-input" type="radio" name="weekStart" id="weekStart-sunday" value="sunday" checked>
              	        <label class="form-check-label radio-input-label">
              	            Sunday
              	        </label>
              	    </div>
              	    <div class="btn btn-primary form-check-label">
              	        <input class="form-check-input radio-input" type="radio" name="weekStart" id="weekStart-monday" value="monday" checked>
              	        <label class="form-check-label radio-input-label">
              	            Monday
              	        </label>
              	    </div>
              	</div>
  	        </form>

              <button type="button" class="btn btn-success btn-lg btn-block my-4 mb-4 ">Save changes</button>


  	    </section>

  	</div>
  </div>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
  <script>
  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
  </script>
@endpush
