@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-select/bootstrap-select.css') }}">
  <style></style>
@endpush

@php
$name = 'selectpicker';
$options = collect([
  [
    'value' => 'mustard',
    'text' => 'Mustard',
    'data-icon' => 'fas fa-heart',
  ],
  [
    'value' => 'ketchup',
    'text' => 'Ketchup',
    'data-icon' => 'fas fa-user',
  ],
  [
    'value' => 'relish',
    'text' => 'Relish',
    'data-icon' => 'fas fa-cog',
  ],
])->map(function ($attributes, $index) {
  $text = $attributes['text'];
  $selected = '';
  if (collect(
    request()->get('selectpicker', [])
  )->contains(data_get($attributes, 'value', ''))) {
    $selected = 'selected';
  }
  $attributes = collect($attributes)->except(['text'])->map(function ($item, $index) {
    return ''. $index .'="'. $item .'"';
  });
  return '<option '. $attributes->implode(' ') .' '. $selected .'>'. $text .'</option>';
});
$value = '';
$attributes = collect([
  'id' => 'selectpicker',
  'class' => 'selectpicker show-tick form-control',
  'name' => 'selectpicker[]',
  'title' => 'Nothing selected',
  'multiple' => 'true',
  'data-actions-box' => 'true',
  'data-style' => 'btn-light',
  'data-width' => '100%',
  'data-size' => '10',
  // 'data-header' => 'Select a condiment',
])->map(function ($item, $index) {
  return $index . '="'. $item .'"';
});

echo '<pre>'; print_r(request()->input()); echo '</pre>';
@endphp


{!! Form::open([
  'url' => request()->fullUrl(),
  'method' => 'GET',
]) !!}
  {{-- {{ Form::select($name = 'selectpicker', $options = ['L' => 'Large', 'S' => 'Small'], $value = '', $attributes = [
    'title' => 'Choose one of the following...',
    'id' => 'selectpicker',
    'class' => 'selectpicker show-tick form-control',
    'multiple' => 'true',
    'data-actions-box' => 'true',
    'data-style' => 'btn-success',
    'data-width' => 'auto',
    'data-size' => '10',
  ]) }} --}}
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label for="selectpicker">Choose one of the following...</label>
          <select {!! $attributes->implode(' ') !!}>
            {!! $options->implode("\n\t") !!}
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
      </div>
    </div>
  </div>
{!! Form::close() !!}

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
  <script src="{{ asset('js/vendor/bootstrap-select/bootstrap-select.js') }}" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function () {
    $('.selectpicker').selectpicker().on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
      var self = $(this);
      // var p = $('bootstrap-select');
      // var opt = $(this).find('option')[clickedIndex];

      var opts = $(self[0]).find('option');
      opts.map(function (optionIndex, optionItem) {
        // console.log($(optionItem).is(':selected'));
      });
      // console.log(self.data());
      // console.log($(self[0]).find('option'));
    });
  });
  </script>
@endpush
