<?php
namespace Src\App;

class MySQL extends \mysqli {
    private $server = '127.0.0.1';
    private $user = 'root';
    private $passwd = 'toor';
    private $db = 'mvc';
    private $port = 3306;

    public function __construct() {
        parent::__construct($this->server, $this->user, $this->passwd, $this->db, $this->port);
    }
}

$conexion = new MySQL();
var_dump($conexion);