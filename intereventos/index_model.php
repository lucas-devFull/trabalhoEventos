<?php
include_once("conexao.php");
require 'init.php';
$PDO = db_connect();

function inserePostagem( $PDO, $dados, $midia){
    if(isset($dados)){
        $titulo = $dados['titulo'];
        $descricao = $dados['descricao'];
        $endereco = $dados['endereco'];
        $data = $dados['data'];
        $link_fb = $dados['link_fb'];
        $link_insta = $dados['link_insta'];
        $link_tt = $dados['link_tt'];
        $link_wpp = $dados['link_wpp'];
        $tipoMidia = $dados['tipoMidia'];
        $imgData = addslashes(file_get_contents($midia['tmp_name']));

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
        $result = $stmt->execute();
        $id_post = (int)$PDO->lastInsertId();

        $sql = "INSERT INTO midia (midia, id_post_midia, tipo_midia) VALUES ('$imgData','$id_post','$tipoMidia')";
        $request = $PDO->prepare($sql);
        $request->bindParam('midia', $imgData);
        $request->bindParam('id_post_midia', $id_post);
        $request->bindParam('tipo_midia', $tipoMidia);
        $imagem = $request->execute();

        if ($result && $imagem) {
            return json_encode(array("status" => true));
        }else{
            return json_encode(array("status" => false));
        }
    }else{
        return json_encode(array("status" => false)); 
    }
}

function pegaPostagem($PDO){
    $sql = "SELECT *,TO_BASE64(midia) as midia, tipo_midia FROM intereventos.feed_post left join midia on id_post_midia = id_post";
    $stmt = $PDO->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($result && count($result) > 0) {
        return array("status" => true, "dados" => $result);
    }else{
        return array("status" => false);
    }
}

$resultado = array();
switch ($_POST['acao']) {
    case 'insert':
        $resultado = inserePostagem($PDO, $_POST, $_FILES['file']);
    case 'select':
        $resultado = pegaPostagem($PDO);
    break;
}

echo(json_encode($resultado));

?>