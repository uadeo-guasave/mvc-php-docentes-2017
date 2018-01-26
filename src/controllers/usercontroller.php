<?php
namespace Src\Controllers;
use Src\Models;

class UserController() {
    public function index() {
        $usuarios = User::all();
        require '../views/user/index.php';
    }
}