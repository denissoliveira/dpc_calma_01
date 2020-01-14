<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
include_once '../config/database.php';
include_once '../objects/gru.php';
 
$database = new Database();
$db = $database->getConnection();
 
$gru = new gru($db);
 
$gru->id = isset($_GET['id']) ? $_GET['id'] : die();
 
$gru->readOne();
 
if($gru->name!=null){

	$gru_arr = array(
        "NU_GRU" =>  $gru->NU_GRU
    );
 
    http_response_code(200);
 
    echo json_encode($gru_arr);
}
 
else{
    http_response_code(404);
 
    echo json_encode(array("message" => "GRU Não Existe."));
}
?>