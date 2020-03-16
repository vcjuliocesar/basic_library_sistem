<?php
require 'vendor/autoload.php';

require 'core/bootstrap.php';

use App\Core\Router;

use App\Core\Request;

define('BASEPATH', true);

Router::load('app/routes.php')->direct(Request::url(),Request::method());
