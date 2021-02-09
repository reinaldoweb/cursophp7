<?php 


$conn = new PDO("mysql:dbname=dbphp7;host=localhost","admin","110278");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario=:ID");


$idusuario = "1";

$stmt->bindParam(":ID", $idusuario);
$stmt->execute();

echo "Delete ok";






 ?>