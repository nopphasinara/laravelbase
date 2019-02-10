@extends(dashboard_views('layout.app'))

@push('after-styles')
  {{-- <link rel="stylesheet" href="{{ asset(dashboard_css('category1.css')) }}"> --}}
  <style></style>
@endpush

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-auto align-self-center col-sm-4 logo"><img alt="image" src="http://www.cellarwatch.com/assets/img/cellarwatch_logo.png" /></div>
        <div class="col-sm-4 text-center">
          <h2>Line Efficiency Report</h2>
          <h4>Bottle Fill Orders</h4>
        </div>
        <div class="col-sm-4 text-center align-self-center text-sm-right">Version 262</div>
      </div>
      <div class="card mt-3">
        <div class="card-header justify-content-between">
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="true">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="fills-tab" data-toggle="tab" href="#fills" role="tab" aria-controls="fills" aria-selected="false">Fills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="find-prod-order-tab" data-toggle="tab" href="#findProdOrder" role="tab" aria-controls="findProdOrder" aria-selected="false">Find Production Order</a>
            </li>
          </ul>
        </div>
        <div class="card-body tab-content">
          <!-- 1) Orders tab -->
          <div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
            <form action="">
              <div class="form-row border border-secondary border-top-0 border-left-0 border-right-0 mb-4">
                <div class="col-sm-6">
                  <div class="form-row">
                    <label class="col-form-label col-auto" for="bottlingLineSelect">Bottling Line</label>
                    <div class="col-sm-6">
                      <select id="bottlingLineSelect" class="form-control">
                        <option selected>All lines</option>
                        <option>Line 1</option>
                        <option>Line 2</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end">
                  <div class="form-check form-check-inline">
                    <label class="form-check-label col-form-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> All Orders
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label col-form-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Open
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label col-form-label">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Complete
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-12 col-sm">
                  <label for="bottlingLineSelect">Bottling Line</label>
                  <select id="bottlingLineSelect" class="form-control">
                    <option selected>All lines</option>
                    <option>Line 1</option>
                    <option>Line 2</option>
                  </select>
                </div>
                <div class="form-group col-12 col-sm">
                  <label for="orderNo">Order No</label>
                  <input type="text" class="form-control" id="orderNo">
                </div>
                <div class="form-group col-12 col-sm">
                  <label for="dataFilled">Data Filled</label>
                  <input type="text" class="form-control" id="dataFilled">
                </div>
                <div class="form-group col-12 col-sm-4">
                  <label for="orderDescription">Order Line Description</label>
                  <input type="text" class="form-control" id="orderDescription">
                </div>
                <div class="form-group col-12 col-sm">
                  <label for="uom">UOM</label>
                  <input type="text" class="form-control" id="uom">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-12 col-sm-2">
                  <label for="id">ID</label>
                  <input type="text" class="form-control" id="id">
                </div>
                <div class="form-group col-12 col-sm-2">
                  <label for="startTime">Start Time</label>
                  <input type="text" class="form-control" id="startTime">
                </div>
                <div class="form-group col-12 col-sm-2">
                  <label for="intervalMin">Interval Min</label>
                  <input type="text" class="form-control" id="intervalMin">
                </div>
                <div class="form-group col-12 col-sm-2">
                  <label for="noSlots">No Slots</label>
                  <input type="text" class="form-control" id="noSlots">
                </div>
                <div class="form-group col-12 col-sm-2">
                  <label for="maxFiller">Max Filler</label>
                  <input type="text" class="form-control" id="maxFiller">
                </div>
                <div class="form-group col-12 col-sm-2">
                  <label for="maxCases">Max Cases</label>
                  <input type="text" class="form-control" id="maxCases">
                </div>
                <div class="form-group col-12 col-sm-2">
                  <label for="totalSlots">Total Slots</label>
                  <input disabled type="text" class="form-control" id="totalSlots">
                </div>
                <div class="form-group col-12 col-sm-2">
                  <label for="totalCases">Total Cases</label>
                  <input disabled type="text" class="form-control" id="totalCases">
                </div>
                <div class="form-group col-12 col-sm-2">
                  <label for="delay">Delay</label>
                  <input disabled type="text" class="form-control" id="delay">
                </div>
                <div class="form-group col-12 col-sm-2">
                  <label for="eff">EFF %</label>
                  <input disabled type="text" class="form-control" id="eff">
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-6 d-flex">
                  <button type="button" class="btn btn-info col col-sm-auto mr-1">Complete</button>
                  <button type="button" class="btn btn-info col col-sm-auto">Send to Archive</button>
                </div>
                <div class="col-sm-6 d-flex justify-content-sm-end mt-2 mt-sm-0">
                  <button type="button" class="btn btn-danger col col-sm-auto">X</button>
                  <button type="button" class="btn btn-primary col col-sm-auto ml-1">Update</button>
                  <button type="button" class="btn btn-success col col-sm-auto ml-1">Start Fill</button>
                </div>
              </div>
            </form>
            <!-- 2) Fills tab -->
            <div class="tab-pane fade" id="fills" role="tabpanel" aria-labelledby="fills-tab">fills</div>
            <!-- 3) Find production order tab -->
            <div class="tab-pane fade" id="findProdOrder" role="tabpanel" aria-labelledby="find-prod-order-tab">find prod order</div>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('after-scripts')
  {{-- <script src="{{ asset(dashboard_js('category1.js')) }}" crossorigin="anonymous"></script> --}}
  <script></script>
@endpush
