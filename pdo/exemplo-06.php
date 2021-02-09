<?php 


$conn = new PDO("mysql:dbname=dbphp7;host=localhost","admin","110278");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario= ?");


$idusuario = 3;
$stmt->execute(array($idusuario));

$conn->rollback();
//$conn->commit();

echo "Delete confirmado";






 ?>