<?php
namespace App\Controllers;
use App\Core\App;
use App\Core\Session;

class HomePageController
{

  public function home()
  {
    if ( is_session_started() === FALSE ) session_start();
    if(Session::get('user') == null || Session::getStatus() == 1){
        return redirect(APP.'/login');
    }

    $books = App::get('database')->selectAll('books');
    return view('index',compact('books'));
  }

  public function booksDetail()
  {
    $books = App::get('database')->selectWhere('books',['id'=>$_GET['id']]);
    return view('update',compact('books'));
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
        'id'=>$_POST['idbook'],'title'=>$_POST['title'],'category'=>$_POST['category'],'author'=>$_POST['author'],'publication_at'=>$_POST['publication_at']
      ],
      [
        'id'=>$_POST['idbook']
      ]
    );
    return redirect(APP);
  }

  public function booksAdd()
  {
    return view('add');
  }

  public function booksStore()
  {
    App::get('database')->insert('books',[
      'id'=>$_POST['idbook'],
      'title'=>$_POST['title'],
      'category'=>$_POST['category'],
      'author'=>$_POST['author'],
      'publication_at'=>$_POST['publication_at'],
      'quantity'=>$_POST['quantity'],
      'available'=>$_POST['available']
    ]);
    return redirect(APP);
  }
}
