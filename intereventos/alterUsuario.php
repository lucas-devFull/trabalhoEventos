<?php
require 'init.php';
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$funcao = $_POST['funcao'];
if ($funcao == "busca") {
    echo buscaUsuario($codigo);
}else{
    echo alteraUsuario($codigo, $email, $nome, $senha);
}

function buscaUsuario($codigo){
    $PDO = db_connect();
    $sql = "SELECT * FROM usuario WHERE codigo = '$codigo' ";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam('codigo', $codigo, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (count($user) > 0) {
        return json_encode(array("status" => true, "dados" => $user));
    }else{
        return json_encode(array("status" => false));
    }
}

function alteraUsuario($codigo, $email, $nome, $senha){
    $PDO = db_connect();
    if ($senha !== "") {
        $sql = "UPDATE intereventos.usuario SET email='$email', nome='$nome', senha='$senha' WHERE codigo='$codigo'";
    }else{
        $sql = "UPDATE intereventos.usuario SET email='$email', nome='$nome' WHERE codigo='$codigo'";
    }
    $stmt = $PDO->prepare($sql);
    $stmt->execute();
    $user = $stmt->rowCount();
    if (count($user) > 0) {
        session_start();
        $_SESSION['logged_in'] = false;
        session_destroy();
        return json_encode(array("status" => true));
    }else{
        return json_encode(array("status" => false));
    }
}
?>