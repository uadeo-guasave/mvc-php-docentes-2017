<?php
namespace Src\Models;
require '../app/mysql.php';
use Src\App\MySQL;

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

    public static function all() {
        // regresar todos los usuarios de la tabla users
        $cnn = new MySQL(); // conectamos a base de datos
        $sql = "select * from users";
        $rst = $cnn->query($sql); // 1: mysqli_result 2: false
        $cnn->close();
        if (!$rst) {
            die('Error en la consulta: ' . $sql);
        } elseif ($rst->num_rows > 0) {
            $usuarios = [];
            while ($u = $rst->fetch_assoc()) {
                $usuario = new User();
                $usuario->id = $u['id'];
                $usuario->name = $u['name'];
                $usuario->firstname = $u['firstname'];
                $usuario->lastname = $u['lastname'];
                $usuario->email = $u['email'];
                array_push($usuarios, $usuario);
            }
        } else {
            return false;
        }

        return $usuarios; // arreglo de objetos tipo User
    }

    public static function getById($id) {
        $cnn = new MySQL(); // conectamos a base de datos
        $sql = sprintf("select * from users where id = %d", $id);
        $rst = $cnn->query($sql); // 1: mysqli_result 2: false
        $cnn->close();
        if (!$rst) {
            die('Error en la consulta: ' . $sql);
        } elseif ($rst->num_rows > 0) {
            $u = $rst->fetch_assoc();
            $usuario = new User();
            $usuario->id = $u['id'];
            $usuario->name = $u['name'];
            $usuario->firstname = $u['firstname'];
            $usuario->lastname = $u['lastname'];
            $usuario->email = $u['email'];
        } else {
            return false;
        }

        return $usuario;
    }
    
}

$usuarios = User::all();
var_dump($usuarios);

$usuario = User::getById(1);
var_dump($usuario);