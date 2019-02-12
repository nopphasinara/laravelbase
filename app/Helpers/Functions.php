<?php

if (!function_exists('dashboard')) {
  function dashboard($name = '')
  {
    if (!empty($name)) {
      $name = str_start($name, '/');
      $name = str_finish($name, '');
    }
    return config('dashboard.assets_demo') . $name;
  }
}

if (!function_exists('dashboard_demo')) {
  function dashboard_demo($name = '')
  {
    if (!empty($name)) {
      $name = str_start($name, '/');
      $name = str_finish($name, '');
    }
    return config('dashboard.assets_demo') . $name;
  }
}
