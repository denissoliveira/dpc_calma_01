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
                g.id,
                g.nu_gru
            FROM
                " . $this->table_name . " g";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    function readOne(){
 
        $query = "SELECT
                    g.nu_gru
                FROM
                    " . $this->table_name . " g
                WHERE
                    g.nu_gru = ?";
     
        $stmt = $this->conn->prepare( $query );
     
        $stmt->bindParam(1, $this->id);
     
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->nu_gru = $row['nu_gru'];
    }
}