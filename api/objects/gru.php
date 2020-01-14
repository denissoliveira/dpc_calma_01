<?php
class GRU
{

    private $conn;
    private $table_name = "TB_GRU_RECUPERACAO";

    public $NU_GRU;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function read() {

        $query = "SELECT
                g.NU_GRU
            FROM
                " . $this->table_name . " g";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    function readOne(){
 
        $query = "SELECT
                    g.NU_GRU
                FROM
                    " . $this->table_name . " p
                WHERE
                    g.NU_GRU = ?";
     
        $stmt = $this->conn->prepare( $query );
     
        $stmt->bindParam(1, $this->id);
     
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->NU_GRU = $row['NU_GRU'];
    }
}