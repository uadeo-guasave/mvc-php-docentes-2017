<?php
namespace Src\Models;

class User {
    private $id = null;
    private $name = '';
    private $password = '';

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function getPassword() {
        return $this->password;
    }
}

$usuario = new User();
// $usuario->name = 'bidkar'; error
$usuario->setId(1);
echo $usuario->getId();