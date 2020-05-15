<?php
require_once("conexao.php");
require 'init.php';


$PDO = db_connect();
if(isset($_POST["descricao"]) && isset($_POST["id_tipo"]) && $_POST["id_tipo"] != "" && $_POST["id_tipo"] != null && $_POST["descricao"] != "" && $_POST["descricao"] != null ){
    $desc = $_POST["descricao"];
    $id_tipo = (int)$_POST["id_tipo"];

    $PDO = db_connect();
    $sql = "INSERT INTO balada(desc_balada, id_tipo_balada) VALUES ('$desc', '$id_tipo')";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam('desc_balada', $desc);
    $stmt->bindParam('id_tipo_balada', $id_tipo);
    $result = $stmt->execute();
    if ($result) {
        echo json_encode(array("status" => true));
    }else{
        echo json_encode(array("status" => false));
    }
}else{
    echo json_encode(array("status" => false)); 
}


?>