@extends(dashboard_views('layout.app'))

@push('after-styles')
  <link rel="stylesheet" href="{{ asset(dashboard_css('home1.css')) }}">
@endpush

@section('content')
  <div class="container">
    <div class="row">

      <p></p>
      <h1>Bootstrap Table Panel with Pagination</h1>
      <p>A simple example of how-to put a bordered table within a panel. Responsive, place holders in header/footer for buttons or pagination.</p>
      <p>Follow me <a href="https://twitter.com/asked_io" target="_new">@asked_io</a> & <a href="https://asked.io/" target="_new">asked.io</a>.</p>
      <p> </p><p> </p>

      <div class="col-md-10 col-md-offset-1">

        <div class="panel panel-default panel-table">
          <div class="panel-heading mb-3">
            <div class="row">
              <div class="col-12 col-md">
                <h3 class="panel-title">Panel Heading</h3>
              </div>
              <div class="col-12 col-md-auto text-md-right">
                <button type="button" class="btn btn-primary">Add new</button>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-list">
                <thead>
                  <tr>
                    <th class="hidden-xs">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="text-center"><i class="fas fa-cog"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td class="text-center">
                      <a class="btn btn-default"><i class="fas fa-pen"></i></a>
                      <a class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-12 col-md text-center text-md-left mb-3 mb-md-0">Page 1 of 5</div>
              <div class="col-12 col-md-auto">
                <div class="d-none d-md-block">
                  <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </div>
                <div class="d-md-none">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
