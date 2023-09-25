<?php
header('Content-Type:application/json');

error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST['submit'])) {
    echo json_encode($_POST['api']);
}