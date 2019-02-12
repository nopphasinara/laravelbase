<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
  'prefix' => 'demo',
  'as' => 'demo.',
], function () {
  Route::get('{viewname?}', function ($viewname = '') {
    request()->route()->name($viewname);

    if (empty($viewname)) {
      return 'please select viewname.';
    }

    if (view()->exists('vendor.dashboard.demo.'. $viewname .'')) {
      return view('vendor.dashboard.demo.'. $viewname .'');
    }
    return abort(404);
  })->where([
    'name' => '[0-9a-zA-Z\.\-\_]+',
  ]);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
