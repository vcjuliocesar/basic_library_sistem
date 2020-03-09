<?php
namespace App\Controllers;

class HomePageController
{

  public function home()
  {
    if(!isset($_SESSION['user'])){
        return view('login');
    }
    return view('index');
  }
}
//5579070113328614
