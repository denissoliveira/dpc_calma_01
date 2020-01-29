<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../objects/gru.php';
 
$database = new Database();
$db = $database->getConnection();

$gru = new Gru($db);
 
$stmt = $gru->read();
$num = $stmt->rowCount();
 
if($num>0){
 
    $grus_arr=array();
    $grus_arr["GRUs"]=array();
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        $gru_item=array(
            "id" => $id,
            "nu_gru" => $nu_gru,
        );
 
        array_push($grus_arr["GRUs"], $gru_item);
    }
 
    http_response_code(200);
 
    echo json_encode($grus_arr);
}else{
 
    http_response_code(404);
 
    echo json_encode(
        array("message" => "GRU não encontrado.")
    );
}