<?php
namespace App\Controllers;

use App\Core\App;

class UsersController
{

  public function index()
  {
    //App::get('database')->selectWhere('Users',['name'=>$_POST['name'],'pass'=>$_POST['password']]);
    App::get('database')->selectAll('Users');
    //die(var_dump(App::get('config')['database']));
  }
}
