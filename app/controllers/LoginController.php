<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Login;
use App\Core\Session;

class LoginController
{
  public function Login()
  {
    if ( is_session_started() === FALSE ) session_start();
    //dd(Session::get('user') !== null);
    if(Session::get('user') !== null){
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
