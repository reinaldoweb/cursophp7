<?php 


$conn = new mysqli("localhost", "admin","110278", "dbphp7");

if ($conn->connect_error) {
	
	echo "Error:" . $conn->connect_error;
	exit;
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (? , ?)");
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

 ?>