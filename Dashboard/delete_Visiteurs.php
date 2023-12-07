<?php include '../layout/coon.php';session_start();

 $id = $_GET["id"] ;

$stmt = $conn->prepare("DELETE FROM `users` WHERE id = $id");
$stmt->execute(); 






?>
