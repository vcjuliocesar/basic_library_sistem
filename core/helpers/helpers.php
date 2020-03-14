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

if(!function_exists('is_session_started')) {
   function is_session_started() {
     if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return false;
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
define('APP',trim(dirname($_SERVER["SCRIPT_NAME"]),"/"));
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
