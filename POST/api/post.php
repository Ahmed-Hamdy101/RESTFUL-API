<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');
require "./config.php";
$data = json_decode(file_get_contents("php://input"), true);
try {
    $user = $data['username'];
    $item = $data['item'];
    $email = $data['email'];
    $db = $pdo->query("INSERT INTO catagory(username,item,email) VALUES ('$user', '$item', '$email')");
    echo json_encode(["status" => "success", "message" => "Data inserted successfully"]);
} catch (\Throwable $th) {
    echo json_encode($th->getMessage());
}