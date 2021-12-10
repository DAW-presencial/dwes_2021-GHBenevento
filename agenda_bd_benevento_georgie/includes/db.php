<?php

class Db{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "agendadb";

        try {

        $pdo = new PDO('mysql:host=' . $this->servername . ';dbname=' . $this->dbname, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;

        } catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }

    }
}

$db = new Db;
$conn = $db->connect();
