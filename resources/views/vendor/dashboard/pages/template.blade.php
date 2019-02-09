@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
@endpush

@section('content')

@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
@endpush
