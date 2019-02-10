@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style>
  html {
    font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 14px;
}

.table {
    border: none;
}

.table-definition thead th:first-child {
    pointer-events: none;
    background: white;
    border: none;
}

.table td {
    vertical-align: middle;
}

.page-item > * {
    border: none;
}

.custom-checkbox {
  min-height: 1rem;
  padding-left: 0;
  margin-right: 0;
  cursor: pointer;
}
  .custom-checkbox .custom-control-indicator {
    content: "";
    display: inline-block;
    position: relative;
    width: 30px;
    height: 10px;
    background-color: #818181;
    border-radius: 15px;
    margin-right: 10px;
    -webkit-transition: background .3s ease;
    transition: background .3s ease;
    vertical-align: middle;
    margin: 0 16px;
    box-shadow: none;
  }
    .custom-checkbox .custom-control-indicator:after {
      content: "";
      position: absolute;
      display: inline-block;
      width: 18px;
      height: 18px;
      background-color: #f1f1f1;
      border-radius: 21px;
      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
      left: -2px;
      top: -4px;
      -webkit-transition: left .3s ease, background .3s ease, box-shadow .1s ease;
      transition: left .3s ease, background .3s ease, box-shadow .1s ease;
    }
  .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
    background-color: #84c7c1;
    background-image: none;
    box-shadow: none !important;
  }
    .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator:after {
      background-color: #84c7c1;
      left: 15px;
    }
  .custom-checkbox .custom-control-input:focus ~ .custom-control-indicator {
    box-shadow: none !important;
  }
  </style>
@endpush

@section('content')
      <main class="container pt-5">
          <div class="card mb-5">
              <div class="card-header">Fearures</div>
              <div class="card-block p-0">
                  <table class="table table-bordered table-sm m-0">
                      <thead class="">
                          <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Registration Date</th>
                              <th>E-mail address</th>
                              <th>Premium Plan</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>
                                  <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                  </label>
                              </td>
                              <td>John Lilki</td>
                              <td>September 14, 2013</td>
                              <td>jhlilk22@yahoo.com</td>
                              <td>No</td>
                          </tr>
                          <tr>
                              <td>
                                  <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                  </label>
                              </td>
                              <td>John Lilki</td>
                              <td>September 14, 2013</td>
                              <td>jhlilk22@yahoo.com</td>
                              <td>No</td>
                          </tr>
                          <tr>
                              <td>
                                  <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                  </label>
                              </td>
                              <td>John Lilki</td>
                              <td>September 14, 2013</td>
                              <td>jhlilk22@yahoo.com</td>
                              <td>No</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="card-footer p-0">
                  <nav aria-label="...">
                      <ul class="pagination justify-content-end mt-3 mr-3">
                          <li class="page-item disabled">
                              <span class="page-link">Previous</span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active">
                              <span class="page-link">2<span class="sr-only">(current)</span>
                              </span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
          <table class="table table-bordered table-definition mb-5">
              <thead class="table-warning ">
                  <tr>
                      <th></th>
                      <th>Name</th>
                      <th>Registration Date</th>
                      <th>E-mail address</th>
                      <th>Premium Plan</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                          </label>
                      </td>
                      <td>John Lilki</td>
                      <td>September 14, 2013</td>
                      <td>jhlilk22@yahoo.com</td>
                      <td>No</td>
                  </tr>
                  <tr>
                      <td>
                          <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                          </label>
                      </td>
                      <td>John Lilki</td>
                      <td>September 14, 2013</td>
                      <td>jhlilk22@yahoo.com</td>
                      <td>No</td>
                  </tr>
                  <tr>
                      <td>
                          <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                          </label>
                      </td>
                      <td>John Lilki</td>
                      <td>September 14, 2013</td>
                      <td>jhlilk22@yahoo.com</td>
                      <td>No</td>
                  </tr>
              </tbody>
              <tfoot>
                  <tr>
                      <th></th>
                      <th colspan="4">
                          <button class="btn btn-primary float-right">Add User</button>
                          <button class="btn btn-default">Approve</button>
                          <button class="btn btn-default">Approve All</button>
                      </th>
                  </tr>
              </tfoot>
          </table>
          <table class="table  table-sm">
              <thead class="table-info">
                  <tr>
                      <th></th>
                      <th>Name</th>
                      <th>Registration Date</th>
                      <th>E-mail address</th>
                      <th>Premium Plan</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                          </label>
                      </td>
                      <td>John Lilki</td>
                      <td>September 14, 2013</td>
                      <td>jhlilk22@yahoo.com</td>
                      <td>No</td>
                  </tr>
                  <tr>
                      <td>
                          <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                          </label>
                      </td>
                      <td>John Lilki</td>
                      <td>September 14, 2013</td>
                      <td class="table-danger">jhlilk22@yahoo.com</td>
                      <td>No</td>
                  </tr>
                  <tr>
                      <td>
                          <label class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                          </label>
                      </td>
                      <td>John Lilki</td>
                      <td>September 14, 2013</td>
                      <td>jhlilk22@yahoo.com</td>
                      <td>No</td>
                  </tr>
              </tbody>
          </table>
      </main>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
@endpush
