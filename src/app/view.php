<?php
namespace Src\App;

class View {
    public static function make($view, $params = null) {
        $x = explode('.', $view);
        $y = count($x)-1;
        $ruta = VIEWS_DIR;

        for ($i = 0; $i <= $y; $i++) {
            if ($i == $y) {
                $ruta .= $x[$i] . '.php';
            } else {
                $ruta .= $x[$i] . '/';
            }
        }

        if (is_readable($ruta)) {
            if ($params != null) {
                extract($params);
            }
            require_once $ruta;
        } else {
            return false;
        }
    }
}