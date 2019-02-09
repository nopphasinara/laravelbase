@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('post1.css')) }}"> --}}
@endpush

@section('content')
  <div class="container-fluid bg-light ">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-2 pt-3">
        <div class="form-group ">
          <select id="inputState " class="form-control">
            <option selected>Brand</option>
            <option>BMW</option>
            <option>Audi</option>
            <option>Maruti</option>
            <option>Tesla</option>
          </select>
        </div>
      </div>
      <div class="col-md-2 pt-3">
        <div class="form-group">
          <select id="inputState" class="form-control">
            <option selected>Model</option>
            <option>BMW</option>
            <option>Audi</option>
            <option>Maruti</option>
            <option>Tesla</option>
          </select>
        </div>
      </div>
      <div class="col-md-2 pt-3">
        <div class="form-group">
          <select id="inputState" class="form-control">
            <option selected>Budget</option>
            <option>BMW</option>
            <option>Audi</option>
            <option>Maruti</option>
            <option>Tesla</option>
          </select>
        </div>
      </div>
      <div class="col-md-2 pt-3">
        <div class="form-group">
          <select id="inputState" class="form-control">
            <option selected>Type</option>
            <option>BMW</option>
            <option>Audi</option>
            <option>Maruti</option>
            <option>Tesla</option>
          </select>
        </div>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-primary btn-block">Search</button>
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
                <h4>Posts</h4>
              </div>
              <div class="col-md-6">
                <button type="button" class="btn btn-sm btn-primary">Add New</button>
              </div>

            </div>
            <div class="row">
              <div class="col-md-12">
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
                      <th>Title</th>
                      <th>Author</th>
                      <th>Categories</th>
                      <th>Tags</th>
                      <th>Comments</th>
                      <th>Date</th>
                      <th>Edit</th>

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
                      <td><small>Admin</small></td>
                      <td><a href="#"><small>5</small></a></td>
                      <td><small>Published 2018/05/21</small></td>
                      <td>
                        <a href="#"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="#"><i class="fa fa-eye"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
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
                      <td><small>Admin</small></td>
                      <td><a href="#"><small>5</small></a></td>
                      <td><small>Published 2018/05/21</small></td>
                      <td>
                        <a href="#"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="#"><i class="fa fa-eye"></i></a>
                        <a href="#"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>


                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('after-scripts')
  <script></script>
@endpush
