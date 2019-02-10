@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style></style>
@endpush

@section('content')
  <div class="container">
    <h2>Filterable Table</h2>
    <p>Type something in the input field to search the table for first names, last names or emails:</p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody id="myTable">
        <tr>
          <td>zai</td>
          <td>djafar</td>
          <td>xx@gmail.com</td>
        </tr>
        <tr>
          <td>nia</td>
          <td>djafar</td>
          <td>xx@gmail.com</td>
        </tr>
        <tr>
          <td>jehan</td>
          <td>djafar</td>
          <td>xx@gmail.com</td>
        </tr>
        <tr>
          <td>kita</td>
          <td>semua</td>
          <td>xx@keluarga.com</td>
        </tr>
      </tbody>
    </table>

    <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
  </div>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
  <script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
@endpush
