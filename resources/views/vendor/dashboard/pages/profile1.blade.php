@extends(dashboard_views('layout.app'))

@push('after-styles')
  <link rel="stylesheet" href="{{ asset(dashboard_css('profile1.css')) }}">
@endpush

@section('content')
  <div class="container">
    {{-- <div class="row">
      <div class="col-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
      </div>
    </div> --}}

    <div class="row">
      <div class="col-12">
        <div class="tabs">
          <div class="tab-button-outer">
            <ul id="tab-button">
              <li><a href="#tab01">Tab 1</a></li>
              <li><a href="#tab02">Tab 2</a></li>
              <li><a href="#tab03">Tab 3</a></li>
              <li><a href="#tab04">Tab 4</a></li>
              <li><a href="#tab05">Tab 5</a></li>
            </ul>
          </div>
          <div class="tab-select-outer">
            <select id="tab-select">
              <option value="#tab01">Tab 1</option>
              <option value="#tab02">Tab 2</option>
              <option value="#tab03">Tab 3</option>
              <option value="#tab04">Tab 4</option>
              <option value="#tab05">Tab 5</option>
            </select>
          </div>

          <div id="tab01" class="tab-contents">
            <h2>Tab 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
          </div>
          <div id="tab02" class="tab-contents">
            <h2>Tab 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
          </div>
          <div id="tab03" class="tab-contents">
            <h2>Tab 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
          </div>
          <div id="tab04" class="tab-contents">
            <h2>Tab 4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
          </div>
          <div id="tab05" class="tab-contents">
            <h2>Tab 5</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
          </div>
        </div>
      </div>
    </div>
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
              <div class="col-md-12">
                <h4>Your Profile</h4>
                <hr>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form>
                  <div class="form-group row">
                    <label for="username" class="col-4 col-form-label">User Name*</label>
                    <div class="col-8">
                      <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">First Name</label>
                    <div class="col-8">
                      <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Last Name</label>
                    <div class="col-8">
                      <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Nick Name*</label>
                    <div class="col-8">
                      <input id="text" name="text" placeholder="Nick Name" class="form-control here" required="required" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Display Name public as</label>
                    <div class="col-8">
                      <select id="select" name="select" class="custom-select">
                        <option value="admin">Admin</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email*</label>
                    <div class="col-8">
                      <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="website" class="col-4 col-form-label">Website</label>
                    <div class="col-8">
                      <input id="website" name="website" placeholder="website" class="form-control here" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="publicinfo" class="col-4 col-form-label">Public Info</label>
                    <div class="col-8">
                      <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="newpass" class="col-4 col-form-label">New Password</label>
                    <div class="col-8">
                      <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('after-scripts')
  <script>
  $(function() {
    var $tabButtonItem = $('#tab-button li'),
    $tabSelect = $('#tab-select'),
    $tabContents = $('.tab-contents'),
    activeClass = 'is-active';

    $tabButtonItem.first().addClass(activeClass);
    $tabContents.not(':first').hide();

    $tabButtonItem.find('a').on('click', function(e) {
      var target = $(this).attr('href');

      $tabButtonItem.removeClass(activeClass);
      $(this).parent().addClass(activeClass);
      $tabSelect.val(target);
      $tabContents.hide();
      $(target).show();
      e.preventDefault();
    });

    $tabSelect.on('change', function() {
      var target = $(this).val(),
      targetSelectNum = $(this).prop('selectedIndex');

      $tabButtonItem.removeClass(activeClass);
      $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
      $tabContents.hide();
      $(target).show();
    });
  });
  </script>
@endpush
