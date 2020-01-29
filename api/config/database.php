<?php
class Database{

    private $server         = "127.0.0.1";
    private $db_username    = "SYSTEM";
    private $db_password    = "Oracle_1";
    private $service_name   = "ORCL";
    private $sid            = "ORCL";
    private $port           = 1522;
    private $mydb="
        (DESCRIPTION =
            (ADDRESS = (PROTOCOL = TCP)(HOST = $server)(PORT = $port))
            (CONNECT_DATA =
                (SERVICE_NAME = $service_name)
                (SID = $sid)
            )
        )";

    private $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
    ];
 
    // private $host = "localhost";
    // private $db_name = "grudb";
    // private $username = "postgres";
    // private $password = "postgres";
    public $conn;
 
    public function getConnection(){
         $this->conn = null;
         try{
            $this-> conn = new PDO("oci:dbname=" . $mydb . ";charset=utf8", $db_username, $db_password, $opt)
            //$this-> conn = new PDO("oci:dbname=".$mydb, $username, $password, $opt);
            // $this->conn = new PDO("pgsql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            // $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
         return $this->conn;
    }
}
?>
