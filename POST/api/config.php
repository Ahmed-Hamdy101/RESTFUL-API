<?php

define("HOST", "localhost");
define("DB", "php-api");
define("USERNAME", "root");
define("PASS", "root");
define("PORT", "3306");

try {
    $pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB . ';port=' . PORT . ';', USERNAME, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES'utf8'");
} catch (\Throwable $th) {
    throw new Exception("Error DATABASE CONNECTION", 1);
    $th->getMessage();
}
