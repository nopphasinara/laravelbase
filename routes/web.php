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
  'prefix' => 'views',
  'name' => 'views.',
], function () {
  Route::get('{viewname?}', function ($viewname = '') {
    if (empty($viewname)) {
      return 'Please enter viewname.';
    }
    if (!view()->exists(dashboard_views('views.' . $viewname))) {
      return abort(404);
    }
    return view(dashboard_views('pages.views'))->with([
      'viewname' => $viewname,
    ]);
  });
});

Route::group([
  'prefix' => 'dashboard',
  'name' => 'dashboard.',
], function () {
  Route::get('{pagename?}', function ($pagename = '') {
    if (empty($pagename)) {
      $pagename = 'home';
    }

    return view(dashboard_views('pages.'. $pagename .''));
  })->name('starter');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
