<?php
class Database {

    public $conn;
 
    public function getConnection() {
         $this->conn = null;
         try {
            $this-> conn = new PDO("oci:dbname=(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))(CONNECT_DATA =(SERVICE_NAME = ORCL)(SID = ORCL)));charset=utf8", "system", "qwe",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM]);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>