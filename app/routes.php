<?php

$router->get(APP,'HomePageController@home');

$router->post(APP.'/login','HomePageController@Login');
/*
$router->get('books','HomePageController@booksList');

$router->get('detail','HomePageController@booksDetail');

$router->post('update','HomePageController@booksUpdate');

$router->get('delete','HomePageController@booksDelete');

$router->post('login','UsersController@index');*/
