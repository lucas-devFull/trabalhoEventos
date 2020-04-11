<?php
require 'init.php';
$PDO = db_connect();

function insert($PDO,$insert) {
    $descricao = $insert['descricao'];
    $autor = $insert['autor'];
    $id_postagem = $insert['id_postagem'];
    $id_pergunta = $insert['id_pergunta'];
    $sql = "INSERT INTO mensagens (descricao,autor,id_postagem,id_pergunta) values ($descricao, $autor, $id_postagem, $id_pergunta) ";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam('descricao', $descricao, PDO::PARAM_STR);
    $stmt->bindParam('autor', $autor, PDO::PARAM_STR);
    $stmt->bindParam('id_postagem',$id_postagem, PDO::PARAM_INT);
    $stmt->bindParam('id_pergunta',  $id_pergunta, PDO::PARAM_INT);
    return $stmt->execute();
}

function get($PDO, $id_postagem) {

    $sql = "SELECT * FROM mensagens where id_postagem = $id_postagem ORDER BY data_postagem desc";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam('id_postagem', $id_postagem, PDO::PARAM_INT);
    return $stmt->execute();
}

$a = $_POST;
exit();
// busca os dados du usuário a ser editado

$respose = "";
switch ($_POST['acao']) {
    case 'insert':
        $respose = insert($PDO,$_POST);
        break;
    case 'get':
        $respose = get($PDO,$_POST);
        break;
    default:
        $respose = false;
        break;
}

echo json_encode($respose);



?>