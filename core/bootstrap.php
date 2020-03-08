<?php

require 'core/App.php';

require 'core/helpers/helpers.php';

require 'core/Request.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

require 'core/Router.php';

require 'controllers/HomePageController.php';

App::bind('config',require 'config.php');

App::bind('database',new QueryBuilder(
    Connection::make(App::get('config')['database'])
  )
);
