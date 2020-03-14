<?php

$router->get(APP,'HomePageController@home');

$router->post(APP.'/login','HomePageController@Login');

$router->get(APP.'/logout','HomePageController@Logout');

$router->get(APP.'/detail','HomePageController@booksDetail');

/*$router->post('update','HomePageController@booksUpdate');

$router->get('delete','HomePageController@booksDelete');

$router->post('login','UsersController@index');*/
