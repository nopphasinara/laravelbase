<?php

if (!function_exists('dashboard_views')) {
  function dashboard_views($path = '')
  {
    if ($path) {
      $path = str_finish($path, '');
      $path = str_start($path, '.');
    }
    $path = config('dashboard.views') . $path;

    return $path;
  }
}

if (!function_exists('dashboard_css')) {
  function dashboard_css($path = '')
  {
    if ($path) {
      $path = str_finish($path, '/');
      $path = str_start($path, '/');
    }
    return config('dashboard.css') . $path;
  }
}

if (!function_exists('dashboard_js')) {
  function dashboard_js($path = '')
  {
    if ($path) {
      $path = str_finish($path, '/');
      $path = str_start($path, '/');
    }
    return config('dashboard.js') . $path;
  }
}
