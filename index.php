<?php
error_reporting( E_ALL );
define('LBOX', 'littlebooooooox');
define('ROOT_DIR', __DIR__);
define('LIB_DIR', ROOT_DIR.'/lib/');
define('LOCALES_FOLDER', ROOT_DIR.'/locale/');

require_once(LIB_DIR.'Translate/translate.php');
require_once(LIB_DIR.'Router/router.php');

$requestURI = strtok($_SERVER['REQUEST_URI'],'?');
error_log($requestURI);
$baseURI = '';

Router::setRequestURI($requestURI);
Router::setBaseURI($baseURI);

session_start();

$routes = array(
  'home' => 'home.php',
  'quienessomos' => 'quienessomos.php',
  'comenzar' => 'form.php',
  //predefinido
  ''    => 'home.php',
);

$availableLangsCodes = array_keys(Translate::$availableLangs);
$match = '404.php';
$lang = null;

$router = new Router($routes);
$params = $router::getParams();
$translate = new Translate($params['lang']);

$l = function($text) use($router){
  return $router->linkTo($text);
};

require_once('header.php');
require_once('./sections/'.$router::getFileToLoad());
require_once('footer.php');
