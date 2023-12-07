<?php

$host = 'localhost';
$dbname = 'best_électroniques_2';
$username = 'root';
$password = '';

// $host = 'localhost';
// $dbname = 'id21635586_ultra_pc';
// $username = 'id21635586_root';
// $password = 'ultra@PC123';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // session_start();
   
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}






?>
