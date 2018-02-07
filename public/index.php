<?php
include_once '../config.inc.php';
include_once '../src/app/autoload.php';
include_once '../src/routes.php';

if (isset($_GET['url']))
    echo $_GET['url'];
else
    echo 'variable $_GET[\'url\'] no existe';

var_dump(Src\App\Router::$rutas);