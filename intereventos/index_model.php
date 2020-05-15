<?php
include_once("conexao.php");
require 'init.php';

$PDO = db_connect();

$sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha' ";
$stmt = $PDO->prepare($sql);
$stmt->bindParam('email', $email);
$stmt->bindParam('senha', $senha);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


// $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha' ";
// $stmt = $PDO->prepare($sql);
// $stmt->bindParam('email', $email);
// $stmt->bindParam('senha', $senha);
// $stmt->execute();
// 
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>