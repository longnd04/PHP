<?php

define('WEBROOT', '/index.php');
define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
require('../vendor/autoload.php');

use phptest\Config\Database;
use phptest\Core\Controller;
use phptest\Core\Student;
use phptest\Router;
use phptest\Request;
use phptest\Dispatcher;

$dispatch = new Dispatcher();
$dispatch->dispatch();
