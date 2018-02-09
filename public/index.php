<?php
include_once '../config.inc.php';
include_once '../src/app/autoload.php';
include_once '../src/routes.php';

if (isset($_GET['url'])) {
    // si existen valores despues de public/
    echo $_GET['url'] . '<br>';
    $url = $_GET['url'];
    if (substr($url, -1) == '/') {
        // quitar la ultima diagonal
        $url = substr($url, 0, strlen($url)-1);
    }
    echo $url;
    // buscar la existencia de la ruta en la variable Router::$rutas;
    foreach(Src\App\Router::$rutas as $ruta) {
        if (array_key_exists($url, $ruta)) {
            $llamada = 'Src\\Controllers\\';
            $llamada .= $ruta[$url]['controller'].'::';
            $llamada .= $ruta[$url]['action'];
            echo '<br>'.$llamada;
            call_user_func($llamada);
            break;
        }
    }
} else {
    // la ruta termina en public
    echo '<h1>Pagina de inicio</h1>';
}

var_dump(Src\App\Router::$rutas);