<?php
return
    spl_autoload_register(function($classname)
	{
        $path = strtolower($classname);
        $path = str_replace("\\","/",$path);
        $path = APP_DIR . $path . '.php';

        if (is_readable($path)) {
            require_once $path;
        } else {
            return false;
        }
	});