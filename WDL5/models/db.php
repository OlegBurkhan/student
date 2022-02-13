<?php

class DataBase {
    /**
     * @var Database
     */
    private static $instance;

    /**
     * @var PDO
     */
    private $db;

    private function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=playground', 'root', 'conquistador');
    }

    /**
     * @return DataBase
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    /**
     * @return PDO
     */
    public function getDB()
    {
        return $this->db;
    }
}
