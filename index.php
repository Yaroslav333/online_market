<?php


// FRONT CONTROLLER
// 1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);


session_start();
//подключение файлов

define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Autoload.php');
require_once (ROOT.'/components/Router.php');
require_once (ROOT.'/components/Db.php');


//вызов Router


$router = new Router();
$router->run();