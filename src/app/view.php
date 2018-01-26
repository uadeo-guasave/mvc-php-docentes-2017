<?php
namespace Src\App;

class View {
    public static function make(string $view) {
        // $view = 'user.index';
        $x = explode('.', $view);
        // $x[0] = 'user';
        // $x[1] = 'index';
        $y = count($x)-1;
        $ruta = VIEWS_DIR;
        for ($i = 0; $i <= $y; $i++) {
            if ($i == $y) {
                $ruta += $x[$i].'.php';
            } else {
                $ruta += $x[$i].'/';
            }
        }
        include $ruta;
    }
}