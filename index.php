<?php
require 'core/bootstrap.php';
$router = new Router;
Router::load('routes.php')->direct(Request::url(),Request::method());
