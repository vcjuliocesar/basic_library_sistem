<?php
namespace App\Controllers;

use App\Core\App;

class HomePageController {

    public function home()
    {
        return  ! $_SESSION['name'] ?? view('login');
    }

    public function booksList()
    {
        $books = App::get('database')->selectAll('books');

        return view('index', compact('books'));
    }

    public function booksDetail()
    {
        $books = App::get('database')->selectWhere('books', ['id' => $_GET['id']]);

        return view('update',compact('books'));
    }

    public function booksDelete()
    {
        $books = App::get('database')->delete('books', ['id' => $_GET['id']]);

        return redirect('books');
    }

    public function booksUpdate()
    {
        $books = App::get('database')->update('books',
          [
            'id' => $_POST['id'],'titulo'=>$_POST['titulo'],'categoria'=>$_POST['categoria'],'autor'=>$_POST['autor'],
          ]
        );

        return redirect('books');
    }
}
