<?php
include_once("conexao.php");
require 'init.php';

$PDO = db_connect();

$sql = "SELECT * FROM tipo_balada";
$stmt = $PDO->prepare($sql);
$stmt->execute();
$tipo_baladas = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM balada";
$stmt = $PDO->prepare($sql);
$stmt->execute();
$baladas = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo(json_encode(array("status" => true, "dados" => array("tipo_balada" => $tipo_baladas, "baladas" => $baladas))));

// $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha' ";
// $stmt = $PDO->prepare($sql);
// $stmt->bindParam('email', $email);
// $stmt->bindParam('senha', $senha);
// $stmt->execute();
// 
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>