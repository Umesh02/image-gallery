<?php 

define('ROOT', dirname(__DIR__) . '/');
define('APP', ROOT . 'app/');
define('MODEL', ROOT . 'src/Model/');
define('VIEW', ROOT . 'src/View/');
define('CONTROLLER', ROOT . 'src/Controller/');
define('PUBLIC_DIR', ROOT . 'public/');

require_once APP . 'Application.php';


new Application;

?>