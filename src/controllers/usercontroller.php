<?php
namespace Src\Controllers;
use Src\Models\User;
use Src\App\View;

class UserController {
    public function index() {
        $usuarios = User::all();

        View::make('user.index', compact('usuarios'));
    }

    public function login() {

    }

    public function edit($user_id) {
        
    }
}