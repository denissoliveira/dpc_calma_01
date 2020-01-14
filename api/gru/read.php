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
 
    // grus array
    $grus_arr=array();
    $grus_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $gru_item=array(
            "id" => $id,
            "name" => $name,
            "description" => html_entity_decode($description),
            "price" => $price,
            "category_id" => $category_id,
            "category_name" => $category_name
        );
 
        array_push($grus_arr["records"], $gru_item);
    }
 
    http_response_code(200);
 
    echo json_encode($grus_arr);
}else{
 
    http_response_code(404);
 
    echo json_encode(
        array("message" => "GRU não encontrado.")
    );
}