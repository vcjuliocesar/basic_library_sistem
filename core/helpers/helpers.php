<?php

if(!function_exists('view')){

  function view($name, $data = []) {
    extract($data);

    return require "app/views/{$name}.view.php";
  }
}


if(!function_exists('redirect')) {

  function redirect($path) {
      header("Location:/{$path}");
  }
}

if(!function_exists('dd')) {

  function dd($data) {
   echo "<pre>";
    die(var_dump($data));
   echo "</pre>";
  }
}

//variables globales;
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__, 3)).DS);
define('ASSETS', ROOT."public".DS."assets".DS);
if (! function_exists('url_base')) {
    function url_base()
    {
        $base = str_replace('\\', '/', dirname($_SERVER["SCRIPT_NAME"], 2));
        if ($base == '/') {
            $base = null;
        }
        return $base;
    }
}

define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].url_base().'/');
