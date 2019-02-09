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
