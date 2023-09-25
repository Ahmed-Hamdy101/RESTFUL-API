<?php
 require "../DB/Database.php";


use DB\Database;

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

if (!empty($data)) {
    // Store data of the API
    $id = $data['id'];

    // Create a new connection to the database
    $api = new Database();

    // Attempt to delete the record
    $rowCount = $api->deleteCategoryById($id);

    if ($rowCount > 0) {
        // Record was deleted successfully
        http_response_code(200);
        echo json_encode(['message' => 'Data deleted successfully', 'status' => 200]);
    } else {
        // No records were deleted (record with the given ID may not exist)
        http_response_code(400);
        echo json_encode(['message' => 'Error: Record not found or could not be deleted', 'status' => 400]);
    }
} else {
    // Invalid or empty JSON data
    http_response_code(400);
    echo json_encode(['message' => 'Invalid or empty JSON data', 'status' => 400]);
}
