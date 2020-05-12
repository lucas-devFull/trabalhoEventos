<?php
require 'init.php';
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
$funcao = $_POST['funcao'];
if ($funcao == "busca") {
    echo buscaUsuario($codigo);
}else{
    return false;
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
?>