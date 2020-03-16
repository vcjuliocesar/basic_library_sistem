<?php

$router->get(APP,'HomePageController@home');

$router->get(APP.'/login','LoginController@Login');

$router->post(APP.'/login','LoginController@signin');

$router->get(APP.'/logout','LoginController@Logout');

$router->get(APP.'/detail','HomePageController@booksDetail');

/*$router->post('update','HomePageController@booksUpdate');

$router->get('delete','HomePageController@booksDelete');

$router->post('login','UsersController@index');*/
