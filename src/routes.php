<?php

Src\App\Router::get('user', 'UserController@index');
Src\App\Router::get('user/index', 'UserController@index');
Src\App\Router::get('user/login', 'UserController@login');
Src\App\Router::get('user/edit/{id}', 'UserController@edit');