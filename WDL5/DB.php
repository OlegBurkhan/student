<?php
//$host = 'localhost';
//$user = 'root';
//$password = '';
//$dbname = 'WDL5_db';
//
////Set DSN
//
//$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
//
////Create a PDO instance
//
//$pdo = new PDO($dsn, $user, $password);

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
        $this->db = new PDO('mysql:host=localhost;dbname=WDL5_db', 'root', '');
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



//$stmt = $pdo->query('SELECT * FROM messages');
