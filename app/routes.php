<?php

$router->get('','HomePageController@home');

$router->get('books','HomePageController@booksList');

$router->get('detail','HomePageController@booksDetail');

$router->post('update','HomePageController@booksUpdate');

$router->get('delete','HomePageController@booksDelete');

$router->post('login','UsersController@index');
