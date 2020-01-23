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
 
$gru->id = isset($_GET['nu_gru']) ? $_GET['nu_gru'] : die();
 
$gru->readOne();
 
if($gru->nu_gru!=null){

	$gru_arr = array(
        "nu_gru" =>  $gru->nu_gru
    );
 
    http_response_code(200);
 
    echo json_encode($gru_arr);
}
 
else{
    http_response_code(404);
 
    echo json_encode(array("message" => "GRU Não Existe."));
}
?>