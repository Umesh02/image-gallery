<?php

define('ROOT', dirname(__DIR__) . '/');
define('APP', ROOT . 'app/');
define('MODEL', ROOT . 'src/Model/');
define('VIEW', ROOT . 'src/View/');
define('CONTROLLER', ROOT . 'src/Controller/');
define('PUBLIC_DIR', ROOT . 'public/');

require_once APP . 'Application.php';
require_once APP . 'Controller.php';
require_once APP . 'View.php';

require_once CONTROLLER . 'imageController.php';
require_once CONTROLLER . 'uploadController.php';
require_once CONTROLLER . 'userController.php';

require_once MODEL . 'DbConnection.php';
require_once MODEL . 'BaseModel.php';
require_once MODEL . 'UserModel.php';  // named as 'User' in the course

new Application;
