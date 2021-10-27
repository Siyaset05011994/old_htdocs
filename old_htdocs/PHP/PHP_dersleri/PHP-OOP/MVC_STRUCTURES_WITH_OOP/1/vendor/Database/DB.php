<?php

namespace Database;

include "../../config/database.php";

class DB{

    private $servername;
    private $db_name;
    private $username;
    private $password;
    private $conn=null;

    public function __construct($servername,$db_name,$username,$password)
    {
       $this->servername=$servername;
       $this->db_name=$db_name;
       $this->username=$username;
       $this->password=$password;
    }

    public function getConnection(){

        try {

            $conn = new \PDO("mysql:host=$this->servername;dbname=$this->db_name", $this->username, $this->password);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->conn=$conn;

        } catch(\PDOException $e) {
            $this->conn= "Connection failed: " . $e->getMessage();
        }

        return $this->conn;
    }

    public function closeConnection(){

    }

    public static function query($string){
       return self::closeConnection();
    }

}

new DB($mysql['servername'],$mysql['db_name'],$mysql['username'],$mysql['password']);
//print_r($db->getConnection()->query("SELECT * FROM posts")->fetchAll());
