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
    $gru->NU_GRU = isset($_GET['NU_GRU']) ? $_GET['NU_GRU'] : die();
    $gru->readOne();

    if($gru->NU_GRU!=null) {
        $gru_arr = array("NU_GRU" =>  $gru->NU_GRU);
        http_response_code(200);
        echo json_encode($gru_arr);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "GRU Não Existe."));
    }
?>