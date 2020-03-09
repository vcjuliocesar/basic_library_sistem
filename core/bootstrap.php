<?php
/*
require 'app/controllers/HomePageController.php';

require 'app/controllers/UsersController.php';

require 'core/App.php';

require 'core/Request.php';

require 'core/Router.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';*/

require 'core/helpers/helpers.php';

use App\Core\App;

App::bind('config',require 'config.php');

App::bind('database',new QueryBuilder(
    Connection::make(App::get('config')['database'])
  )
);
