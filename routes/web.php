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
  'as' => 'dashboard',
], function () {

  Route::get('{pagename?}', function ($pagename = '') {
    if (empty($pagename) || $pagename === '') {
      $pagename = 'home';
    }

    $pagename = str_start(str_finish($pagename, ''), '');
    $viewpath = 'vendor.dashboard.pages.'. $pagename .'';

    if (view()->exists($viewpath)) {
      return view($viewpath);
    }
    return abort(404);


    // echo '<pre>'; print_r(get_class_methods(view())); echo '</pre>';

    // echo '<pre>'; print_r(app()->getNamespace()); echo '</pre>';
    // echo '<pre>'; print_r(app()->getDeferredServices()); echo '</pre>';
    // echo '<pre>'; print_r(app()->getLoadedProviders()); echo '</pre>';
    // echo '<pre>'; print_r(app()->abort(403)); echo '</pre>';
    // echo '<pre>'; print_r(app()->isBooted()); echo '</pre>';
    // echo '<pre>'; print_r(app()->isLocal()); echo '</pre>';
    // echo '<pre>'; print_r(app()->environment()); echo '</pre>';
    // echo '<pre>'; print_r(app()->environmentFilePath()); echo '</pre>';
    // echo '<pre>'; print_r(app()->environmentFile()); echo '</pre>';
    // echo '<pre>'; print_r(app()->environmentPath()); echo '</pre>';
    // echo '<pre>'; print_r(app()->resourcePath()); echo '</pre>';
    // echo '<pre>'; print_r(app()->storagePath()); echo '</pre>';
    // echo '<pre>'; print_r(app()->publicPath()); echo '</pre>';
    // echo '<pre>'; print_r(app()->langPath()); echo '</pre>';
    // echo '<pre>'; print_r(app()->databasePath()); echo '</pre>';
    // echo '<pre>'; print_r(app()->configPath()); echo '</pre>';
    // echo '<pre>'; print_r(app()->bootstrapPath()); echo '</pre>';
    // echo '<pre>'; print_r(app()->basePath()); echo '</pre>';
    // echo '<pre>'; print_r(app()->path()); echo '</pre>';
    // echo '<pre>'; print_r(get_class_methods(app())); echo '</pre>';

    // echo '<pre>'; print_r($session->handlerNeedsRequest()); echo '</pre>';
    // echo '<pre>'; print_r($session->getHandler()); echo '</pre>';
    // echo '<pre>'; print_r($session->token()); echo '</pre>';
    // echo '<pre>'; print_r($session->setPreviousUrl('https://google.com')); echo '</pre>';
    // echo '<pre>'; print_r($session->previousUrl()); echo '</pre>';
    // echo '<pre>'; print_r($session->getId()); echo '</pre>';
    // echo '<pre>'; print_r($session->getName()); echo '</pre>';
    // echo '<pre>'; print_r(get_class_methods(Session::class)); echo '</pre>';

    // echo '<pre>'; print_r($route->hasParameter('pagename')); echo '</pre>';
    // echo '<pre>'; print_r($route->named()); echo '</pre>';
    // echo '<pre>'; print_r($route->getName()); echo '</pre>';
    // echo '<pre>'; print_r($route->uri()); echo '</pre>';
    // echo '<pre>'; print_r($route->setParameter('d', 'D')); echo '</pre>';
    // echo '<pre>'; print_r($route->setParameter('c', 'C')); echo '</pre>';
    // echo '<pre>'; print_r($route->getPrefix()); echo '</pre>';
    // echo '<pre>'; print_r($route->parameters()); echo '</pre>';
    // echo '<pre>'; print_r(get_class_methods(request()->route())); echo '</pre>';

    // echo '<pre>'; print_r(request()->bearerToken()); echo '</pre>';
    // echo '<pre>'; print_r(request()->header()); echo '</pre>';
    // echo '<pre>'; print_r(request()->getUri()); echo '</pre>';
    // echo '<pre>'; print_r(request()->getPathInfo()); echo '</pre>';
    // echo '<pre>'; print_r(request()->root()); echo '</pre>';
    // echo '<pre>'; print_r(request()->url()); echo '</pre>';
    // echo '<pre>'; print_r(request()->fullUrl()); echo '</pre>';
    // echo '<pre>'; print_r(request()->path()); echo '</pre>';
    // echo '<pre>'; print_r(request()->decodedPath()); echo '</pre>';
    // echo '<pre>'; print_r(view()->getFinder()); echo '</pre>';
    // echo '<pre>'; print_r(get_class_methods(request())); echo '</pre>';

  })->where([
    'pagename' => '[0-9a-zA-Z.\-\_^\/]+',
  ]);

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
