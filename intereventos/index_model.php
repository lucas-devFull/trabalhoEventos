<?php
include_once("conexao.php");
require 'init.php';
$PDO = db_connect();

function inserePostagem( $PDO, $dados){
    if(isset($dados['midia']) || $dados['midia'] != ""){
        $midia = $dados['midia'];

        $fp = fopen($midia, "rb");
        $conteudo = fread($fp, $tamanho);
        $conteudo = addslashes($conteudo);
        fclose($fp);

        $sql = "INSERT INTO feed_noticias (midia_post) VALUES ('$conteudo')";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam('midia_post', $midia);
        $result = $stmt->execute();
        if ($result) {
            return json_encode(array("status" => true));
        }else{
            return json_encode(array("status" => false));
        }
    }else{
        return json_encode(array("status" => false)); 
    }
    return;
}


// $sql = "SELECT * FROM feed_post";
// $stmt = $PDO->prepare($sql);
// $stmt->execute();
// $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Header( "Content-type: image/gif");

$resultado = array();
var_dump( $_POST['file']);
// switch ($_POST['acao']) {
    // case 'insert':
        // $resultado = inserePostagem($PDO, $_POST);
    // break;
// }


echo(json_encode($resultado));

?>