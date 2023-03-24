<?php

class DBConnect {
    private $db = NULL;

    const DB_SERVER = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_NAME = "rhe";

    public function __construct() {
        $dsn = 'mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_SERVER;
        try {
            $this->db = new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            throw new Exception('Connection failed: ' .
            $e->getMessage());
        }
        return $this->db;
    }
    

    public function getUsers(){
        $stmt = $this->db->prepare("SELECT * from rr ORDER BY id DESC LIMIT 8");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    
    
    
    
}
