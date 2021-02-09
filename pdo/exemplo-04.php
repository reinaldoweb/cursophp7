<?php 


$conn = new PDO("mysql:dbname=dbphp7;host=localhost","admin","110278");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin=:LOGIN, dessenha=:PASSWORD WHERE idusuario=:ID");

$login="daniel";
$senha="110593";
$idusuario = "2";


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $senha);
$stmt->bindParam(":ID", $idusuario);
$stmt->execute();

echo "Atualização ok";






 ?>