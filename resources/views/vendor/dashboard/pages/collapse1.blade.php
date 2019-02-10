@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>
  .card {
    margin-bottom: 15px;
}

.icon-action {
    margin-top: 5px;
    float: right;
    font-size: 80%;
}

.list-group-item .title {
    margin-top: 5px;
    margin-bottom: 12px;
    font-weight: 600;
}
  </style>
@endpush

@section('content')
  <div class="container">
  <br>  <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
  <hr>

  <div class="row">
  	<aside class="col-sm-4">
  <p>Collapse - list group</p>


  <div class="list-group filter-wrap">
  	<article class="list-group-item">
  		<header class="filter-header">
  			<a href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" class="">
  				<i class="icon-action fa fa-chevron-down"></i>
  				<h6 class="title">Some heading </h6>
  			</a>
  		</header>
  		<div class="filter-content collapse show" id="collapse1" style="">
  			<form class="py-2">
  			<div class="input-group">
  			  <input type="text" class="form-control" placeholder="Search">
  			  <div class="input-group-append">
  			    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
  			  </div>
  			</div>
  			</form>
  			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt deserunt mollit anim id est laborum.	</p>
  		</div> <!-- collapse -filter-content  .// -->
  	</article>
  	<article class="list-group-item">
  		<header class="filter-header">
  			<a href="#" data-toggle="collapse" data-target="#collapse2">
  				<i class="icon-action fa fa-chevron-down"></i>
  				<h6 class="title">Second heading </h6>
  			</a>
  		</header>
  		<div class="filter-content collapse show" id="collapse2">
  			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt deserunt mollit anim id est laborum.	</p>
  		</div>
  	</article>
  	<article class="list-group-item">
  		<header class="filter-header">
  			<a href="#" data-toggle="collapse" data-target="#collapse3">
  				<i class="icon-action fa fa-chevron-down"></i>
  				<h6 class="title">Another title </h6>
  			</a>
  		</header>
  		<div class="filter-content collapse" id="collapse3">
  			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt deserunt mollit anim id est laborum.	</p>
  		</div>
  	</article>
  </div> <!-- card.// -->





  	</aside> <!-- col.// -->
  	<aside class="col-sm-4">
  <p>Collapse - card</p>


  <div class="card">
  	<header class="card-header">
  		<a href="#" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" class="">
  			<i class="icon-action fa fa-chevron-down"></i>
  			<span class="title">Heading of card </span>
  		</a>
  	</header>
  	<div class="collapse show" id="collapse11" style="">
  		<article class="card-body">
  			<form class="mb15">
  			<div class="input-group">
  			  <input type="text" class="form-control" placeholder="Search">
  			  <div class="input-group-append">
  			    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
  			  </div>
  			</div>
  			</form>
  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt deserunt mollit anim id est laborum.
  		</article> <!-- card-body.// -->
  	</div> <!-- collapse .// -->
  </div> <!-- card.// -->
  <div class="card">
  	<header class="card-header">
  		<a href="#" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" class="">
  			<i class="icon-action fa fa-chevron-down"></i>
  			<span class="title">Heading of card </span>
  		</a>
  	</header>
  	<div class="collapse show" id="collapse22" style="">
  		<article class="card-body">
  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt deserunt mollit anim id est laborum.
  		</article> <!-- card-body.// -->
  	</div> <!-- collapse .// -->
  </div> <!-- card.// -->




  	</aside> <!-- col.// -->
  	<aside class="col-sm-4">
  <p>Collapse - card group</p>



  <div class="card">
  	<article class="card-group-item">
  		<header class="card-header">
  			<a href="#" data-toggle="collapse" data-target="#collapse33" aria-expanded="true" class="">
  				<i class="icon-action fa fa-chevron-down"></i>
  				<h6 class="title">Another title </h6>
  			</a>
  		</header>
  		<div class="filter-content collapse show" id="collapse33" style="">
  			<div class="card-body">
  				<form class="pb-3">
  				<div class="input-group">
  				  <input type="text" class="form-control" placeholder="Search">
  				  <div class="input-group-append">
  				    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
  				  </div>
  				</div>
  				</form>
  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt deserunt mollit anim id est laborum.	</p>
  			</div> <!-- card-body.// -->
  		</div>
  	</article> <!-- card-group-item.// -->
  	<article class="card-group-item">
  		<header class="card-header">
  			<a href="#" data-toggle="collapse" data-target="#collapse44" aria-expanded="false" class="collapsed">
  				<i class="icon-action fa fa-chevron-down"></i>
  				<h6 class="title">Another title </h6>
  			</a>
  		</header>
  		<div class="filter-content collapse" id="collapse44" style="">
  			<div class="card-body">
  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt deserunt mollit anim id est laborum.	</p>
  			</div> <!-- card-body.// -->
  		</div>
  	</article> <!-- card-group-item.// -->
  </div> <!-- card.// -->




  	</aside> <!-- col.// -->
  </div> <!-- row.// -->

  </div>
  <!--container end.//-->

  <br><br>
  <article class="bg-secondary mb-3">
  <div class="card-body text-center">

      <h3 class="text-white mt-3">Bootstrap 4 UI KIT</h3>
  <p class="h5 text-white">Components and templates  <br> for Ecommerce, marketplace, booking websites
  and product landing pages</p>   <br>
  <p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com
   <i class="fa fa-window-restore "></i></a></p>
  </div>
  <br><br>
  </article>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
@endpush
