<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Login;

class LoginController
{
  public function Login()
  {
    if ( is_session_started() === FALSE ) session_start();
    if(isset($_SESSION['user'])){
        return redirect(APP);
    }
    return view('login');
  }

  public function signin()
  {
    if(Login::checkLogin($_POST['user'],$_POST['password'])){
      return redirect(APP);
    }
    return view('login');
  }

  public function Logout()
  {
    if ( is_session_started() === FALSE ) session_start();
    Login::Logout();
    return redirect(APP);
  }
}
