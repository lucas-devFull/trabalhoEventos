<?php
include_once("conexao.php");
require 'init.php';
$PDO = db_connect();

function inserePostagem( $PDO, $dados){
    if(isset($dados)){
        $midia = $dados['midia'];
        $titulo = $dados['titulo'];
        $descricao = $dados['descricao'];
        $endereco = $dados['endereco'];
        $data = $dados['data'];
        $link_fb = $dados['link_fb'];
        $link_insta = $dados['link_insta'];
        $link_tt = $dados['link_tt'];
        $link_wpp = $dados['link_wpp'];

        $fp = fopen($midia, "rb");
        $conteudo = fread($fp, $tamanho);
        $conteudo = addslashes($conteudo);
        fclose($fp);

        $sql = "INSERT INTO feed_post (titulo_post,descricao_post,endereco_post,data_post,link_fb,link_instagram,link_twitter,link_wpp) VALUES ('$titulo','$descricao','$endereco','$data','$link_fb','$link_insta','$link_tt','$link_wpp')";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam('titulo_post', $titulo);
        $stmt->bindParam('descricao_post', $descricao);
        $stmt->bindParam('endereco_post', $endereco);
        $stmt->bindParam('data_post', $data);
        $stmt->bindParam('link_fb', $link_fb);
        $stmt->bindParam('link_instagram', $link_insta);
        $stmt->bindParam('link_twitter', $link_tt);
        $stmt->bindParam('link_wpp', $link_wpp);
        $stmt->bindParam('midia_post', $midia);
        $result = $stmt->execute();
        $id_post = (int)$PDO->lastInsertId();

        $sql = "INSERT INTO midia (midia, id_post_midia) VALUES ('$conteudo','$id_post')";
        $request = $PDO->prepare($sql);
        $request->bindParam('midia', $conteudo);
        $request->bindParam('id_post_midia', $id_post);
        $imagem = $request->execute();

        if ($result) {
            return json_encode(array("status" => true));
        }else{
            return json_encode(array("status" => false));
        }
    }else{
        return json_encode(array("status" => false)); 
    }
}

function pegaPostagem($PDO){
    $sql = "SELECT * FROM feed_post";
    $stmt = $PDO->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $id_post = $result['id_post']; 

    $sql = "SELECT midia FROM intereventos.midia where id_post_midia=3";
    $stmt = $PDO->prepare($sql);
    $stmt->execute();
    $midia = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result && count($result) > 0) {
        return json_encode(array("status" => true, "dados" => $result, "midia" => base64_encode($midia['midia'])));
    }else{
        return json_encode(array("status" => false));
    }
}


// $sql = "SELECT * FROM feed_post";
// $stmt = $PDO->prepare($sql);
// $stmt->execute();
// $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

$resultado = array();
switch ($_POST['acao']) {
    case 'insert':
        $resultado = inserePostagem($PDO, $_POST);
    case 'select':
        $resultado = pegaPostagem($PDO);
    break;
}


echo(json_encode($resultado));

?>