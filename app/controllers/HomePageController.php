<?php
namespace App\Controllers;
use App\Core\App;
use App\Core\Login;

class HomePageController
{

  public function home()
  {
    if ( is_session_started() === FALSE ) session_start();
    if(!isset($_SESSION['user'])){
        return view('login');
    }

    $books = App::get('database')->selectAll('books');
    return view('index',compact('books'));
  }

  public function Login()
  {
    if(Login::checkLogin($_POST['user'],$_POST['password'])){
      return redirect(APP);
    }
  }

  public function Logout()
  {
    if ( is_session_started() === FALSE ) session_start();
    Login::Logout();
    return redirect(APP);
  }

  public function booksDetail()
  {
    $books = App::get('database')->selectWhere('books',['id'=>$_GET['id']]);
    dd($books);
    //return view('update',compact('books'));
  }

  public function booksDelete()
  {
    $books = App::get('database')->delete('books',['id'=>$_GET['id']]);
    return redirect('books');
  }

  public function booksUpdate()
  {
    $books = App::get('database')->update('books',
      [
        'id'=>$_POST['id'],'titulo'=>$_POST['titulo'],'categoria'=>$_POST['categoria'],'autor'=>$_POST['autor']
      ]
    );
    return redirect('books');
  }
}
//5579070113328614
