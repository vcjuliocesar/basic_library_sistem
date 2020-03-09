<?php
namespace App\Controllers;

use App\Core\App;

class UsersController
{

  public function index()
  {
    $users= App::get('database')->selectWhere('Users',['name'=>$_POST['name'],'pass'=>$_POST['password']]);
    if($users[0]->pass === $_POST['password'] ) {
        session_start();
        $_SESSION['name'] = $users[0]->name;
        return redirect('books');
        //return view('index');
    }
    return redirect('');
  }
}
