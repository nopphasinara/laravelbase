@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <style></style>
@endpush

@section('content')

<div class="container">
	<div class="row">
	    <form class="col-md-4">
	        <label>Select</label>
	        <select class="form-control select2">
	           <option>Select</option>
	           <option>Car</option>
	           <option>Bike</option>
	           <option>Scooter</option>
	           <option>Cycle</option>
	           <option>Horse</option>
	        </select>
	    </form>
	    <form class="col-md-4">
	        <label>Select Multiple</label>
	        <select class="form-control select2" multiple>
	           <option>Select</option>
	           <option>Car</option>
	           <option>Bike</option>
	           <option>Scooter</option>
	           <option>Cycle</option>
	           <option>Horse</option>
	        </select>
	    </form>
 	</div>
</div>


  <div class="row">
    <div class="col-md-6 mb-3">
    	<label for="validationCustom03">Category:</label>
        <select class="form-control form-control-lg" name="category" id="validationCustom03" onchange="ChangecatList()" required>
          <option value="">Choose... </option>
          <option value="Classroom Instruction and Assessment">Classroom Instruction and Assessment</option>
          <option value="Curriculum Development and Alignment">Curriculum Development and Alignment</option>
          <option value="District Committee">District Committee</option>
          <option value="Meeting">Meeting</option>
          <option value="Other Category">Other Category</option>
          <option value="Professional Conference">Professional Conference</option>
          <option value="Professional Workshop / Training">Professional Workshop / Training</option>
          <option value="Pupil Services">Pupil Services</option>
        </select>
  	<div class="invalid-feedback">
  		Please provide a category.
  	</div>
    </div>
    <div class="col-md-6 mb-3">
    	<label for="validationCustom04">Activity:</label>
       <select class="form-control form-control-lg" id="validationCustom04" name="activity" required></select>
      <div class="invalid-feedback">
  		Please provide an activity.
  	</div>
    </div>
  </div>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
  <script>
  var catAndActs = {};
catAndActs['Classroom Instruction and Assessment'] = ['Assessment Day', 'Common Assessment Development', 'Data Team', 'Kindergarten Screening', 'Other'];
catAndActs['Curriculum Development and Alignment'] = ['Capstone Development', 'Course Of Study Development / Revision', 'Standards Alignment / Rollout', 'Other'];
catAndActs['District Committee'] = ['Curriculum Council', 'Grading & Assessment Task Force', 'Professional Development Planning Committee', 'Race To The Top Committee', 'Teacher Evaluation Committee', 'Other'];
catAndActs['Meeting'] = ['Academic Support Team', 'ELL / eKLIP Teachers', 'Gifted Intervention Specialist', 'Intervention Assistance Team', 'Intervention Teachers', 'Kindergarten Parent Conference', 'KLIP Teachers', 'Title I Teachers', 'Other'];
catAndActs['Other Category'] = ['Other'];
catAndActs['Professional Conference'] = ['Conference'];
catAndActs['Professional Workshop / Training'] = ['In-District', 'Out-Of-District'];
catAndActs['Pupil Services'] = ['IEP Meeting', 'IEP Writing'];

function ChangecatList() {
    var catList = document.getElementById("validationCustom03");
    var actList = document.getElementById("validationCustom04");
    var selCat = catList.options[catList.selectedIndex].value;
    while (actList.options.length) {
        actList.remove(0);
    }
    var cats = catAndActs[selCat];
    if (cats) {
        var i;
        for (i = 0; i < cats.length; i++) {
            var cat = new Option(cats[i], i);
            actList.options.add(cat);
        }
    }
}
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" crossorigin="anonymous"></script>
  <script>
      $('.select2').select2();
  </script>
@endpush
