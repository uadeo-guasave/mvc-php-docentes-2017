<?php
include_once '../config.inc.php';
include_once '../src/app/autoload.php';

if (isset($_GET['url']))
    echo $_GET['url'];
else
    echo 'variable $_GET[\'url\'] no existe';