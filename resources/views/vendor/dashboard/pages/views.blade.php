@extends(dashboard_views('layout.app'))

@section('content')
  @includeif(dashboard_views('views.'. $viewname .''))
@endsection
