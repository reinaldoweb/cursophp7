<?php 


$conn = new PDO("mysql:dbname=dbphp7;host=localhost","admin","110278");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha)VALUES(:LOGIN, :PASSWORD)");

$login="reinaldo";
$senha="123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $senha);

$stmt->execute();

echo "Inserido ok";






 ?>