<?php

if(!function_exists('view')){

  function view($name, $data = []) {
    extract($data);

    return require "views/{$name}.view.php";
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
