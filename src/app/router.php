<?php
namespace Src\App;

class Router {
    public static $rutas = [];

    // Router::get('user/index', 'UserController@index');
    // Router::get('user', 'UserController@index');
    public static function get($url, $actionController) {
        $ac = explode('@', $actionController);
        $arreglo = [$url => ['controller'=>$ac[0], 'action'=>$ac[1]]];
        array_push(self::$rutas, $arreglo);
    }
    public static function post() {}
    public static function put() {}
    public static function delete() {}
}