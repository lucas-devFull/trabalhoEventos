<?php
 
require_once 'init.php';
 
// pega o ID da URL
$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : '';
 
// valida o ID
if (empty($codigo))
{
    echo "ID não informado";
    exit;
}
 
// remove do banco
$PDO = db_connect();
$sql = "DELETE FROM usuario WHERE codigo = $codigo";
$stmt = $PDO->prepare($sql);
$stmt->bindParam('codigo', $codigo, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao remover";
    print_r($stmt->errorInfo());
}