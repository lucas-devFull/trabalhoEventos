<?php
require 'init.php';
$PDO = db_connect();

function insert($PDO,$insert) {
    $descricao = $insert['descricao'];
    $autor = $insert['autor'];
    $id_postagem = $insert['id_postagem'];
    $id_pergunta = $insert['id_pergunta'];
    $sql = "INSERT INTO mensagens (descricao,autor,id_postagem,id_pergunta) values ('$descricao', '$autor', '$id_postagem', '$id_pergunta'); ";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam('descricao', $descricao, PDO::PARAM_STR);
    $stmt->bindParam('autor', $autor, PDO::PARAM_STR);
    $stmt->bindParam('id_postagem',$id_postagem, PDO::PARAM_INT);
    $stmt->bindParam('id_pergunta',  $id_pergunta, PDO::PARAM_INT);
    $stmt->execute();
    return (int)$PDO->lastInsertId();
}

function get($PDO, $id_postagem=0) {
    $sql = "SELECT * FROM mensagens where id_postagem = $id_postagem ORDER BY data_postagem ASC";
    $stmt = $PDO->prepare($sql);
    // $stmt->bindParam('id_postagem', $id_postagem, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}


$respose = array();
switch ($_POST['acao']) {
    case 'insert':
        $respose['id'] = insert($PDO,$_POST);
        break;
    case 'get':
        $respose = get($PDO,$_POST['id_postagem']);
        break;
    default:
        $respose = false;
        break;
}

echo json_encode($respose);



?>