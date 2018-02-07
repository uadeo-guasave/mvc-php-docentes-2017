<?php
namespace Src\Controllers;

class UserController {
    public function index() {
        $usuarios = Src\Models\User::all();

        Src\App\View::make('user.index', compact('usuarios'));
    }

    public function login() {

    }

    public function edit($user_id) {
        
    }
}