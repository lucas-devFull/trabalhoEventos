<?php
include_once("conexao.php");
require 'init.php';

$PDO = db_connect();

$sql = "SELECT * FROM feed_post";
$stmt = $PDO->prepare($sql);
$stmt->execute();
$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo(json_encode(array("status" => true, "dados" => $dados)));

?>