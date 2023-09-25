<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require "../database/config.php";
// get date send from postman-json
$data = json_decode(file_get_contents("php://input"), true);
// handle excption
try {
    // valid the inputs 
    if (!isset($data['username']) || !isset($data['item']) || !isset($data['email'])) {
        throw new Exception("Incomplete data. Please provide username, item, and email.");
    }
    //  data-input  passed into varibles
    $user = $data['username'];
    $item = $data['item'];
    $email = $data['email'];
    // prepare statements & update query
    $stmt = $pdo->prepare("UPDATE catagory SET username=?, item=?, email=? WHERE id = 1");
    // execute one query
    $stmt->execute([$user, $item, $email]);
// if record get 1 then its succfully updated 
    if ($stmt->rowCount() > 0) {
        echo json_encode(["status" => "success", "message" => "Data updated successfully"]);
    } 
    // if zero
    else {
        echo json_encode(["status" => "error", "message" => "No records updated"]);
    }
} catch (Exception $e) {
    // Bad Request
    http_response_code(400); 
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>
