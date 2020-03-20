<!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastro</title>
    </head>
    <body>
        <?php
        require 'init.php';
        $nome = isset($_POST['nome']) ? $_POST['nome']: '';
        $email = isset($_POST['email']) ? $_POST['email']: '';
        $senha = isset($_POST['senha']) ? $_POST['senha']: '';

        //checando campo vazio
        if(empty($nome) || empty($email) || empty($senha)){
           echo " <script type=\"text/javascript\">
            alert(\"Não é permitido campo vazio\");</script>";
            exit;
        }
        $PDO = db_connect();
        $sql = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam('nome', $nome);
        $stmt->bindParam('email', $email);
        $stmt->bindParam('senha', $senha);

        if($stmt->execute()){
            echo "
            
            <script type=\"text/javascript\">
            alert(\"Usuario cadastrado com sucesso.\");
            </script>
            ";
            header('Location: index.php');
        }else{
            echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0; URL=
            http://localhost/intereventos/index.php'>
            <script type=\"text/javascript\">
            alert(\"Erro no cadastro tente novamente.\");
            </script>
            ";
        }

        mysqli_close($conn);
?>
<!-- <a href="index.php">Quer voltar ao Início 'Clique Aqui'</a> --->
</body>
</html>
