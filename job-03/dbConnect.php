<?php

class DbConnect {

    private static $instance = null;
    private $conn;

    private function __construct() {
        $this->conn = new PDO("mysql:host=localhost;dbname=draft-shop", "root", "root");
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DbConnect();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }

}

?>