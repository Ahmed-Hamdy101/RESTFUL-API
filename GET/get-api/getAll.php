<?php
header('Content-Type:application/json');
require './config.php';

try {
    $db = $pdo->query('SELECT  * FROM catagory ');
    if($db) {$db=$db->fetchAll();echo json_encode($db);}
    else {
        throw new Exception("Error Processing Request",1);
    }
} catch (\Throwable $e) {
    $e->getMessage();
}
