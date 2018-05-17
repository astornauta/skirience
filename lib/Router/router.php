<?php
require_once(LIB_DIR.'Translate/translate.php');
/**
* Router class
*/
class Router
{
    static $params = array('','','');
    static $requestURI = '';
    static $routes = '';
    static $baseURI = '';
    static $fileToLoad = '';

    public static function setBaseURI($baseURI){
        self::$baseURI = $baseURI;
    }

    public static function setRequestURI($requestURI){
        self::$requestURI = $requestURI;
    }

    public static function getParams(){
        return self::$params;
    }

    public static function getFileToLoad(){
        return self::$fileToLoad;
    }

    function __construct($routes){
        self::$routes = $routes;
        $availableLangsCodes = array_keys(Translate::$availableLangs);
        $matches = array_fill(0, 2, '');
        $lang = null;
        self::$fileToLoad = '404.php';
        $regex = implode(array(
            '/^('.preg_quote(self::$baseURI, '/').')?', // 1: baseURI
            '\\/?', // maybe a /
            '('.implode($availableLangsCodes, '|').')?', // 2: Lang code
            '\\/?', // maybe a /
            '('.implode(array_keys($routes), '|').')?', // 3: route name
            '\\/?$/', // maybe a last /
        ), '');
        error_log($regex);
        $res = preg_match($regex, self::$requestURI, $matches);
        if($res == 1){
            self::$fileToLoad = $routes[$matches[3]];
        }else{
            $matches = array_fill(0, 4, '');
        };
        self::$params = array_combine(
            array('uri'      , 'lang'     , 'routeName'),
            array($matches[1], $matches[2], $matches[3])
        );
    }

    public function linkTo($routeName){
        // if(!array_key_exists($routeName, array_keys(self::$routes))){throw new Exception("Route name doesn't exist", 1);}
        $translate = new Translate();
        $translate->getLang();
        $url = implode(array(self::$baseURI, $translate->getLang(), $routeName), '/');
        $url = preg_replace('/\/{2,}/', '/', $url);
        return $url;
    }

}

?>
