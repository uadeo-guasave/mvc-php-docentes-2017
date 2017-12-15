<?php
namespace Src\Models;

class User {
    private $data = [
        'id' => null,
        'name' => null,
        'password' => null,
        'firstname' => null,
        'lastname' => null,
        'email' => null
    ];

    public function __get($var) {
        if (array_key_exists($var, $this->data))
            return $this->data[$var];
        else {
            return false;
        }
    }
    
    public function __set($var, $value) {
        if (array_key_exists($var, $this->data))
            $this->data[$var] = $value;
    }
    
}

$usuario = new User();
$usuario->name = 'bidkar';
echo $usuario->name;
// $usuario->name = 'bidkar'; error
// $usuario->setId(1);
// echo $usuario->getId();

// $arreglo = [1,2,3,4,'otro'];
// echo $arreglo[3]; // 4
// $asociativo = ['id'=>1, 'name'=>'bidkar'];
// echo $asociativo['name']; // bidkar